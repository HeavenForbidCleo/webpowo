<!DOCTYPE html>
<html>
    <header>
        <title>Intro PHP</title>
        <style>
            p{
                font-family:'Courier New', Courier, monospace
            }
        </style>
    </header>
    <body>
        <p><i>Display the variable in this format:</i></p>
        <p><i>STUDENT INFORMATION</i></p>

        <?php
            $metric = "KTYS242DDWD0083";
            $name = "BIBI AFIFAH HANAN";
            $age = "20 Years Old";
            $course = "DDWD";
            $weight = "55kg";
            $height = "150cm";

            echo '<br>Name:<input type = "text" value= "'.$name.'" readonly>';
            echo '<br>=========================<br>';
            echo '<br>Age:<input type = "text" value= "'.$age.'"readonly>';
            echo '<br>=========================<br>';
            echo '<br>Course:<input type = "text" value= "'.$course.'"readonly>';
            echo '<br>=========================<br>';
            echo '<br>Weight:<input type = "text" value= "'.$weight.'"readonly>';
            echo '<br>=========================<br>';
            echo '<br>Height:<input type = "text" value= "'.$height.'"readonly>';

       ?>
    </body>
</html>