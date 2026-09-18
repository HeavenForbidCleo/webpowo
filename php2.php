<!DOCTYPE html>
//GET is to show var inputs in the search bar (?)
<html>
    <body>
        <h1>Age check program</h1>
        <form action = "" method = "POST">
            Enter your age:
            <br><input type = "text" name = "age">
            <br><input type  = "Submit" name = "checkButton" value = "check">
        </form>
        <?php
            if(isSet($_POST["checkButton"])){
                $age=$_POST['age'];
                if ($age >= 21 )        
                    echo 'Your age is: '.$age.' You can vote';
                    
                else
                    echo 'Your age is: '.$age.' You are not qualified to vote';           
            }
        ?>
        <br>
        <h1>Add number program</h1>
        <form action = "" method = "POST">
            <br>Enter first number:
            <br><input type = "number" name = "no1">
            <br>Enter second number:
            <br><input type = "number" name = "no2">
            <br><input type = "submit" name = "addButton" value = "Add">
        </form>
        <?php
            if(isSet($_POST["addButton"])){
                $no1 = $_POST['no1'];
                $no2 = $_POST['no2'];
                $total = $no1 + $no2;
                echo '<br>No1: '.$no1;
                echo '<br>No2: '.$no2;
                echo '<br>Total:'.$total;
            }
        ?>
    </body>
</html>
