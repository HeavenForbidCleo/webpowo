<!DOCTYPE html>
<html>
    <body>
        <h4>Loop Program</h4>
        <form action = "" method = "post">
            <fieldset>
                Enter a number greater than 1:
                <br>
                <input type = "text" name = "no1">
                <br>
                <input type = "submit" name = "display" value = "display">
            </fieldset>
            
            <?php
                if(isSet($_POST["no1"])){
                    $no1 = $_POST['no1'];
                    for ($i=1; $i<=$no1; $i++)
                    echo $i.' ';
                }

                $DaysOfWeek = array ("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

                foreach ($DaysOfWeek as $Day){
                    echo "<p>$Day</p>";
                }
                
                $count = 1;
                while ($count <= 5){
                    echo "$count<br>";
                    $count++;
                }

                $count = 5;
                while ($count >= 1){
                    echo "$count";
                    $count--;
                }

                function displayCompanyName ($Company1, $Company2, $Company3){
                    echo "<p>$Company1</p>";
                    echo "<p>$Company2</p>";
                    echo "<p>$Company3</p>";
                }

                displayCompanyName("Hoyoverse", "Mixue", "Riot");


                if(isSet($_POST["display"])){
                    $no2 = $_POST['no1'];
                    display($no2);
                }
                function display($n){
                    for($i = 1; $i<=$n; $i++)
                        echo $i.' ';
                }
               

               $GlobalVariable = "Global variable";
               function scopeExample(){
                global $GlobalVariable;
                echo "<p>$GlobalVariable</p>";
               }
               scopeExample();

               //array
               $cars = array("Proton", "Honda", "Toyota");
               echo '<br>print_r()<br>';
               print_r('print_r');

               echo '<br>var_dump()<br>';
               var_dump($cars);

               echo '<br>var_export<br>';
               var_export($cars);

                echo '<br>';
                echo 'count '.count($cars);
            ?>
        </form>
    </body>
</html>