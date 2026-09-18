<?php
    if(isSet($_POST["calcButton"])){
        $sales = $_POST['sales'];
        $result = getComm($sales);

        echo 'Your total commission is RM', $result;
    }

    function getComm($sal){
        if($sal <= 2000){
            return $sal - ($sal*0.03);
        }
        else if($sal>2000 && $sal<5000){
            return $sal - ($sal*0.05);
        }
        else{
            return $sal - ($sal*0.07);
        }
    }