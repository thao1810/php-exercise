<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        function is_same_num($n1, $n2){
            if($n1==$n2){
                return true;
            }else{
                return false;
            }
        }
        $num1 = isset($_GET['num1']);
        $num2 = isset($_GET['num2']);
        $abc =  is_same_num($num1, $num2);
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
                <td><input type="text" name="" id="" value="<?php echo $abc; ?>" disable></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="click"></td>
            </tr>
        </table>
   
   </form>
</body>
</html>
