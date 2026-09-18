<!DOCTYPE html>
<html>
    <body>
        <form action = "" method = "POST">
            <br>Enter your salary:
            <br><input type = "text" name = "sal">
            <br>Do you always work overtime?
            <br><input type = "text" name = "OT">
            <br><input type = "submit" name = "salary" value = "Submit">
        </form>

        <?php
            if(isSet($_POST["salary"])){
                $sal = $_POST['sal'];
                if($sal > 1000)
                    echo 'high salary';
                else if ($sal >= 5000)
                    echo 'good salary';
                else{
                    echo 'low salary';
                    echo '<br>Need part time job';
                }
            

            $course = $_POST['OT'];

            switch ($course){
                case "yes":
                    echo 'You deserve a rest :)';
                    break;
                case "maybe":
                    echo 'You took too many day offs did you.';
                default:
                    echo 'Keep working, slave.';
                }
            }
        ?>
    </body>
</html>