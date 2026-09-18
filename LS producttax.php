<!DOCTYPE html>
<html>
    <header>
        <title>Tax of product</title>
    </header>
    <body>
        <form action="" method="POST">
            <fieldset>
                Product Price:<br><input type = "text" name = "price"><br>
                Tax (%): <br><input type = "text" name = "tax"><br>
                
                <input type = "submit" name = "calcButton" value = "Calculate"><br>
            </fieldset>

            <?php
                if(isSet($_POST["calcButton"])){
                    $price = $_POST['price'];
                    $tax = $_POST['tax'];

                    $result = $price * ($tax/100);

                    echo 'Product tax is RM', $result;
                }
            ?>
        </form>
    </body>
</html>