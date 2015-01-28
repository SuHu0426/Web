#!/bin/bash
###### From configure_host_KVM() ######
SHUTDOWN_TIMEOUT=20

isrunning() {
    if [ -r /src4/mln/projects/cow2/L-kvm01.pid ]; then
        pid=`cat /src4/mln/projects/cow2/L-kvm01.pid 2>/dev/null`
        if [ ! -z "${pid}" -a -d /proc/${pid} ]; then
            return 0 #Success - running
        else
            return 1 #Failure - not running
        fi
    else
        return 1 #Failure - not running
    fi
}

#########################################################

echo -n "Stopping VM L-kvm01 ..."
if isrunning; then
  echo "system_powerdown" | socat - UNIX-CONNECT:/src4/mln/projects/cow2/L-kvm01.monitor >/dev/null
  for (( i = 0 ; i < ${SHUTDOWN_TIMEOUT} ; i++ )); do
      sleep 1
      if isrunning; then
          echo -n "."
      else
          echo " done"
          break;
      fi
  done

  sleep 1
  if isrunning; then
      if [ $1 == "halt" 2>/dev/null ]; then
          echo "TIMEOUT force halt !"
          echo "quit" | socat - UNIX-CONNECT:/src4/mln/projects/cow2/L-kvm01.monitor >/dev/null
          sleep 2
      fi
  fi

  if isrunning; then
      echo " problem stopping!"
      exit 1
  fi

  rm /src4/mln/projects/cow2/L-kvm01.pid
  rm /src4/mln/projects/cow2/L-kvm01.monitor
  else
      echo " L-kvm01 is not running restore lan only."
fi

echo -n "Restore lan ..."
sudo arp -d 192.168.1.123 -i eth0
echo " done"
