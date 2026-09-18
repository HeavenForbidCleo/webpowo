<!DOCTYPE html>
<html>
    <header>
        <title>Rectangle Area</title>
    </header>
    <body>
        <form action="" method = "GET">
            <fieldset>
                Width: <br><input type = "text" name = "width" placeholder = "Width"><br>
                Length: <br><input type = "text" name = "length" placeholder = "Length"><br>
                <input type = "submit" name = "button" value = "Calculate"><br>
            </fieldset>
        </form>

        <?php
            if(isSet($_GET["button"])){
                $wide = $_GET['width'];
                $leng = $_GET['length'];

                $size = $wide*$leng;
                echo 'The size of a rectangle is ',$size;
            }
        ?>
    </body>
</html>
