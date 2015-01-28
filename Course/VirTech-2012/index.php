<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VirTech-2012 Final Assignment Check</title>
</head>
<body bgcolor="#FFFFCC">
<h1>VirTech-2012 Final Assignment Check</h1>
<table border="1">
<tr><th>學號<th>姓名<th>Host IP<th>VM IP
<?php
$UserData = Array(
   Array('ID' => "7099053103", 'name' => "古龍樺", 'PMIP' => "192.168.0.29", 'VMIP' => "192.168.0.129"),
   array('ID' => "7099053111", 'name' => "賴俊佑", 'PMIP' => "192.168.0.30", 'VMIP' => "192.168.0.130"),
   array('ID' => "7099056034", 'name' => "陳俞孝", 'PMIP' => "192.168.0.31", 'VMIP' => "192.168.0.131"),
   array('ID' => "7099056037", 'name' => "林正浩", 'PMIP' => "192.168.0.32", 'VMIP' => "192.168.0.132"),
   array('ID' => "7100053101", 'name' => "許宏兆", 'PMIP' => "192.168.0.33", 'VMIP' => "192.168.0.133"),
   array('ID' => "7100053102", 'name' => "黃健旻", 'PMIP' => "192.168.0.34", 'VMIP' => "192.168.0.134"),
   array('ID' => "7100053104", 'name' => "蘇介民", 'PMIP' => "192.168.0.35", 'VMIP' => "192.168.0.135"),
   array('ID' => "7100053105", 'name' => "劉得驊", 'PMIP' => "192.168.0.36", 'VMIP' => "192.168.0.136"),
   array('ID' => "7100053114", 'name' => "彭敬凱", 'PMIP' => "192.168.0.37", 'VMIP' => "192.168.0.137"),
   array('ID' => "7100056001", 'name' => "張延詮", 'PMIP' => "192.168.0.38", 'VMIP' => "192.168.0.138"),
   array('ID' => "7100056007", 'name' => "何易宸", 'PMIP' => "192.168.0.39", 'VMIP' => "192.168.0.139"),
   array('ID' => "7100056008", 'name' => "施依君", 'PMIP' => "192.168.0.40", 'VMIP' => "192.168.0.140"),
   array('ID' => "7100056009", 'name' => "陳孟緯", 'PMIP' => "192.168.0.41", 'VMIP' => "192.168.0.141"),
   array('ID' => "7100056010", 'name' => "張道遠", 'PMIP' => "192.168.0.42", 'VMIP' => "192.168.0.142"),
   array('ID' => "7100056016", 'name' => "蕭中一", 'PMIP' => "192.168.0.43", 'VMIP' => "192.168.0.143"),
   array('ID' => "7100056018", 'name' => "侯柏丞", 'PMIP' => "192.168.0.44", 'VMIP' => "192.168.0.144"),
   array('ID' => "7100056026", 'name' => "林雅純", 'PMIP' => "192.168.0.45", 'VMIP' => "192.168.0.145"),
   array('ID' => "7100056028", 'name' => "吳星佑", 'PMIP' => "192.168.0.46", 'VMIP' => "192.168.0.146"),
   array('ID' => "7100056029", 'name' => "鄭有成", 'PMIP' => "192.168.0.47", 'VMIP' => "192.168.0.147"),
   array('ID' => "7100056030", 'name' => "黃聖荃", 'PMIP' => "192.168.0.48", 'VMIP' => "192.168.0.148"),
   array('ID' => "7100056036", 'name' => "朱信昱", 'PMIP' => "192.168.0.49", 'VMIP' => "192.168.0.149"),
   array('ID' => "7100083003", 'name' => "陳威呈", 'PMIP' => "192.168.0.50", 'VMIP' => "192.168.0.150")
);
$PMStatus = file("/home/hsu/WhatHaveILearned/PMstatus");
$VMStatus = file("/home/hsu/WhatHaveILearned/VMstatus");
for ($i=0;$i<sizeof($UserData);$i++) {
	if ($PMStatus[$i] != 0) {
		$PMcolor="red";
		$PMfc="black";
    } else {
    	$PMcolor="#99CC33";
    	$PMfc="black";
    }
   	if ($VMStatus[$i] != 0) {
		$VMcolor="red";
		$VMfc="black";
    } else {
    	$VMcolor="#99CC33";
    	$VMfc="black";
    }
    echo "<tr><td>".$UserData[$i]['ID']."<td>".$UserData[$i]['name'].
     "<td bgcolor=\"".$PMcolor."\"><font color=\"".$PMfc."\">".$UserData[$i]['PMIP']."</font>
     <td bgcolor=\"".$VMcolor."\">";
/*
     echo "<tr><td>".$UserData[$i]['ID']."<td>".$UserData[$i]['name'].
     "<td ";
     //exec("ping -c 1 ".$UserData[$i]['PMIP'], $output, $retval);
     if ($PMStatus[$i] != 0) {
       echo "bgcolor=\"red\"";
     } else {
     echo "bgcolor=\"lightgreen\">".$UserData[$i]['PMIP']; 
     }
     echo "<td ";
     //exec("ping -c 1 ".$UserData[$i]['VMIP'], $output, $retval);
     if ($VMStatus[$i] != 0) {
       echo "bgcolor=\"red\">";
     } else {
       echo "bgcolor=\"lightgreen\">"; 
     }
     */
     echo "<a target=\"newwindow\" href=\"/WhatHaveILearned/WhatHaveILearned-".$UserData[$i]['ID'].".html\"><font color=\"".$VMfc."\">".$UserData[$i]['VMIP']."</a></font>";
 }
?>
</table>
<table>
<tr><td bgcolor="#99CC33">正常運作<td bgcolor="red">網路異常
</table>

<hr>
<address align="right">
<a href="mailto:d100056004@mail.nchu.edu.tw"> Chi-Sheng Su </a>
</address>
</body>
</html>
