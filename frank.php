<?php
$name1 = "num";
$value1 = "";
$name2 = "op";
$value2 = "";

if (isset($_POST['num'])){
    $num = $_POST['input'].$_POST['num'];
}else{
    $num="";
}


if (isset($_POST['op'])){
    $value1 = $_POST['input'];
    setcookie($name1, $value1, time()+(86400*30), "/");

    $value2 = $_POST['op'];
    setcookie($name2, $value2, time()+(86400*30), "/");
    $num = "";
}


if (isset($_POST['equal'])){
    $num = $_POST['input'];
    switch($_COOKIE['op'])
    {
        case "+":
            $result=$_COOKIE['num']+$num;
            break;
            case "-":
                $result=$_COOKIE['num']-$num;
                break;
                case "*":
                    $result=$_COOKIE['num']*$num;
                    break;
                    case "/":
                        if($_COOKIE['num'] != 0){
                            $result=$_COOKIE['num']/$num;
                        }else{
                            $result = NAN;
                        }
                        break;
    }
    $num = $result;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <input type="text" class="mainInput" name="input" value="<?php echo $num?>"><br>
            <input type="submit" class="numBtn" name="num" value="7">
            <input type="submit" class="numBtn" name="num" value="8">
            <input type="submit" class="numBtn" name="num" value="9">
            <input type="submit" class="calBtn" name="op" value="+"><br>
            
            <input type="submit" class="numBtn" name="num"value="4">
            <input type="submit" class="numBtn" name="num"value="5">
            <input type="submit" class="numBtn" name="num"value="6">
            <input type="submit" class="calBtn" name="op"value="-"><br>

            <input type="submit" class="numBtn" name="num"value="1">
            <input type="submit" class="numBtn" name="num"value="2">
            <input type="submit" class="numBtn" name="num"value="3">
            <input type="submit" class="calBtn" name="op"value="*"><br>

            <input type="submit" class="numBtn" name="c"value="C">
            <input type="submit" class="numBtn" name="num"value="0">
            <input type="submit" class="numBtn" name="op"value="/">
            <input type="submit" class="numBtn" name="equal"value="=">

        </form>
    </div>
</body>
</html>