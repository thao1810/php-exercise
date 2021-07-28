<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        function area($y, $m){
            $caculator = $m/12;
            $convert = (int)$caculator;
            $total = $y + $convert;
            return $total;
        }
        $num1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
        $num2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
        $abc =  area($num1, $num2);
    ?>
<form action="#" method="get">
        <table>
            <tr>
                <td><lable for="num1">Number1</lable></td>
                <td><input type="text" name="num1" id="num1"></td>
            </tr>
            <tr>
                <td><lable for="num2">Number2</lable></td>
                <td><input type="text" name="num2" id="num2"></td>
            </tr>
            <tr>
                <td>Return</td>
                <td><input type="text" name="" id="" value="<?php echo $abc; ?>" disabled></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="click"></td>
            </tr>
        </table>
   
   </form>
</body>
</html>
