<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array of Consecutive Numbers</title>
</head>
<body>
<?php
        function getSequence($n1, $n2){

            for($i=$n1 ; $i<=$n2; $i++){
                echo "[";

                for($i=$n1 ; $i<=$n2; $i++){
                    if($i==$n2){
                        echo "$i";
                    }else{
                        echo "$i,";
                    }  
                }
                
                echo "]"; 
                    
            } 
        
        }
        $num1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
        $num2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
        
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
                <td><input type="text" name="" id="" value="<?php $abc =  getSequence($num1, $num2); ?>" disabled></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" value="click"></td>
            </tr>
        </table>
   
   </form>
</body>
</html>
