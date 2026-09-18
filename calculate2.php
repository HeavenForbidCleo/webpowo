<?php
    $no1 = $_POST['no1'];
    $no2 = $_POST['no2'];

    if(isSet($_POST["addButt"])){
         $result = $no1 + $no2;
         echo 'Result is: ', $result;
    }

    if(isSet($_POST["subButt"])){
        $result = $no1 - $no2;

        echo 'Result is: ', $result;
    }

    if(isSet($_POST["mulButt"])){
        $result = $no1*$no2;

        echo 'Result is: ', $result;
    }

    if(isSet($_POST["divButt"])){
        $result = $no1/$no2;

        echo 'Result is ', $result;
    }
?>