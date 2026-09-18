<html>
    <header>
       <title>Basic PHP</title>
    </header>

    <body>
        <h1>Using Html</h1>
        <p>This is standard HTML</p>
        <?php
            echo '<h1>Hello world</h1>';
            echo "<p>welcome to PHP Programming</p>";
            $votingAge = 21;
            echo "The voting age is $votingAge<br>";
            echo 'The voting age is $votingAge<br>';
            echo '<p>The voting age is'.$votingAge; 
            echo "<p>The voting age is".'$votingAge</p>';
            echo '<p>The voting age is'."$votingAge</p>";
            
            $SalesTotal = 40;
            echo "<p>Your sales total is $$SalesTotal</p>";
            echo "<p>Your new sales total is $$SalesTotal</p>";

            define("AGE_LIMIT", 60);
            echo AGE_LIMIT;
            echo '<br>retirement age is:'.AGE_LIMIT;
        ?>
    </body>
<html>