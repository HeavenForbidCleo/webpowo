<?php 
    if(isSet($_POST["calcButton"])){
        $sales = $_POST['sales'];

        if ($sales<=2000){
            $result = $sales - ($sales*0.03);
        }
        else if ($sales>2000 && $sales<5000){
            $result = $sales - ($sales*0.05);
        }
        else{
            $result = $sales - ($sales*0.07);
        }

        echo 'Your total commission is RM', $result;
    }