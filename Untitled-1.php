<!DOCTYPE html>
<html>
    <header>
        <title>Calculator</title>
    </header>
    <body>
        <form action="calculate2.php" method = "POST"> First Num:
                <br><input type = "text" name = "no1"><br>
                Second Num:
                <br><input type = "text" name = "no2"><br>
                <input type = "submit" name = "addButt" value = "ADD"><br>
        </form>
     <?php
     $no1 = $_POST['no1'];
     $no2 = $_POST['no2'];

          $result = $no1 + $no2;
          echo 'Result is: ', $result;
    ?>
    </body>
</html>