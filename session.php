<?php
session_start();
if(isset($-REQUEST['sbm'])){
    $_SESSION['value1'] = $_REQUEST['num1'];
    $_SESSION['value2'] = $_REQUEST['num2'];
    header('location:displaysession.php');
}
?>
<html>
<head>
    <title>session in php</title>
    </head>
    <body>
    <form method="post">
        <table>
        <tr>
            <td>frist number</td>
            <td><input type="text" name="num1"></td>
            </tr>
            <tr>
            <td>second number</td>
                <td><input type="text" name="num2"></td>
            </tr>
            <tr>
            <td></td>
                <td><input type="submit" name="sbm" value="get data"></td>
            </tr>
        </table>
        </form>
    </body>
</html>