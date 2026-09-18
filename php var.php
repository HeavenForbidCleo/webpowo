<!DOCTYPE html>
<html>
    <header></header>
    <body>
        <?php
        //Variable declaration
            $math = 65;
            $science = 80;
            $total = $math + $science;
            $average = $total / 2;
            echo 'math:'.$math;
            echo '<br>science:'.$science;
            echo '<br>total:'.$total;
            echo '<br>Average.mark:'.$average;
            
            $testMark = 20;
            $finalExamMark = 35;
            $total = $testMark + $finalExamMark;

            echo '<br>';
            if($total >= 40)
                echo 'You pass!';
            else 
                echo 'You fail!';
            
        ?>
        <?php
            $age = 28;
            if($age >= 21)
                echo 'You can vote!';
            else
                echo 'You are not qualified to vote!';

            echo '<br>';
            $a = 5;
            $b = 5.34;
            $c = "25 kilometers";
            $d = "kilometers 25";

            echo 
            $a = (int) $a;
            $b = (int) $b;
            $c = (int) $c;
            $d = (int) $d;
            echo $a.'<br>';
            echo $b.'<br>';
            echo $c.'<br>';
            echo $d.'<br>';
        ?>
    </body>
</html>
