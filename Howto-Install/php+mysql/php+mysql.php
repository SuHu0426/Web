<?php
if(count($_POST)>0){ 
  foreach($_POST as $name=>$value){
    echo $name."=".$value."<br />"; 
  } 
}
?>