<?php
$data=$_GET['datavalue'];

$a=array('faislabad','toba');
$b=array('kamalia','rajana');
$c=array('chichawatni','peer mahal');
if($data=="Karachi"){
    foreach($a as $aone){
        echo "<option>$aone</option>";
    }
}
    if($data=="Lahore"){
        foreach($b as $bone){
            echo "<option>$bone</option>";
        }
    }
        if($data=="Islamabad"){
            foreach($c as $cone){
                echo "<option>$cone</option>";
            }
    }

?>