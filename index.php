<?php
    include_once('includes/autoloader.inc.php');
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form action="includes/calc.inc.php" method="post">
            <p>Calculator</p>
            <input type="number" name="num1" placeholder="First number">
            <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
            </select>
            <input type="number" name="num2" placeholder="Second number">
            <button type="submit" name="submit">Calculate</button>
        </form>
    </body>
</html>