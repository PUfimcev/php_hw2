<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_HW2</title>
</head>
<body>
    <?php 
    
/*1. Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'.Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.*/
echo "<hr>";
echo "<p><b>Task 1</b></p>";
function getVar($a){
    echo (empty($a)) ? "True " : "False ";
}

getVar(1);
getVar(3);
getVar(-3);
getVar(0);
getVar(null);
getVar(true);
getVar('');
getVar('0');


echo "<hr>";

/*2. Дано трехзначное число. Поменяйте среднюю цифру на ноль. */
echo "<p><b>Task 2</b></p>";

function swapNum($num = null){
    if(!isset($num) || !is_int($num) || (strlen((string)$num) !== 3)) {
        return "Enter a three-digit number!";
    } else {
        // $num = (string)$num;
        $num = $num."";
        if($num[1] !== 0) $num[1] = 0;
        // $num = (int)$num;
        $num = +$num;
        return $num;
    }
}

echo swapNum(979);
echo "<hr>";

/*3. Если переменная $a равна или меньше 1, а переменная $b больше или 
равна 3, то выведите сумму этих переменных, иначе выведите их разность 
(результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0и 6, 3 и 5.*/
echo "<p><b>Task 3</b></p>";

function varComparison($a = null, $b = null){
    if(!isset($a) || !isset($b) || !is_int($a) || !is_int($b)) {
        return "Enter numbers a and b!";
    } else {
        // if($a <= 1 && $b >= 3) {
        //     return $a + $b;
        // } else {
        //     return $a - $b;
        // }

        return ($a <= 1 && $b >= 3) ? $a + $b : $a - $b;
    }
}

echo varComparison(3, 6);
echo "<hr>";

/*4. Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'. Если это так - выведите 'да', в противном случае выведите 'нет'.*/
echo "<p><b>Task 4</b></p>";
function checkStr($str = null){
    if(!isset($str) || !is_string($str) || is_numeric($str) || strlen($str) === 0) {
        return "Enter string!";
    } else {
        return $str[0] === 'a' ? "Yes" : "No";
    }
}

echo checkStr('abcde');
echo "<hr>";

/*5. Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном случае выведите 'нет'.*/
echo "<p><b>Task 5</b></p>";
function sunEqual($num = null){
    if(!isset($num) || !is_int($num) || (strlen((string)$num) !== 6)) {
        return "Enter a six-digit number!";
    } else {
        $num = $num."";
        $sum1 = null;
        $sum2 = null;
        // $sum1 = $num[0] + $num[1] + $num[2];
        // $sum2 = $num[3] + $num[4] + $num[5];

        for($i = 0; $i < strlen($num); $i++){
            if($i >= 0 && $i < 3){
                $sum1 += $num[$i]; 
            } else {
                $sum2 += $num[$i]; 
            }
        }
        return $sum1 === $sum2 ? "Yes" : "No";
    }
}
echo sunEqual(666668);
echo "<hr>";

/*6. Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.*/
echo "<p><b>Task 6</b></p>";

echo '<form action="/PHP_HW2/" method="POST">
     <p>Enter number from 0 till 360:</p>
     <input type="number" name="Number" placeholder="Enter number"></br></br>
     <button>Enter</button>
     </form>';
echo "</br>";

function getHour($num = null){
    $num = $num["Number"];
    if(empty($num) || ($num < 0 || $num > 360)) {
        return "Enter a requested number!";
    } else {
        $passHour = floor($num / 30);

        return "It's passed $passHour hours.";
}
}

echo getHour($_POST);
echo "<hr>";

/*7. Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел.*/
echo "<p><b>Task 7</b></p>";

function getSum(){
    $arr = range(20, 45);
    $sum = null;
    foreach($arr as $value){
        if($value % 5 === 0){
            $sum += $value;
        }
    }
    return $sum;
}

echo  getSum();

echo "<hr>";

/*8. Дано пятизначное число. Цифры на четных позициях «занулить». 
Например, из 12345 получается число 10305. */
echo "<p><b>Task 8</b></p>";

function swapNums($num = null){
    if(!isset($num) || !is_numeric($num)) return "Enter a number!";
    if(is_int($num)) $num = $num."";
    for($i = 0; $i < strlen($num); $i++){
        if($i % 2) $num[$i] = 0;
    }

    return +$num;
    
}

echo swapNums(123456789);

echo "<hr>";

/*9. Дано число $num=1000. Делите его на 2 столько раз, пока результат 
деления не станет меньше 50. Какое число получится? Посчитайте 
количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.*/
echo "<p><b>Task 9</b></p>";
function divNum(){
    $num = 1000;
    $count = 0;
    for($i = 0;; $i++){
        
        $num /=2;
        $count++;
        if($num < 50) break;
    }

    return "Numver is $num, $count iterations.";
}

echo "<p><b>Task 9</b></p>";
function divNum2(){
    $num = 1000;
    $count = 0;
    $i = 0;
    while(true){
        
        $num /=2;
        $count++;
        $i++;
        if($num < 50) break;
    }

    return "Numver is $num, $count iterations.";
}

echo divNum();
echo "</br>";
echo divNum2();

echo "<hr>";

/*10. Вывести на экран фигуру из звездочек:
*******
*******
*******
*******
(квадрат из n строк, в каждой строке n звездочек)*/

echo "<p><b>Task 10</b></p>";
function getSquare($n = null){
    if(!isset($n) || !is_numeric($n) || $n <= 0) return "Enter a number more than 0!";
    for($i = 0; $i < $n; $i++){
        for($j = 0; $j <$n; $j++){
            $sign = "";
            $sign .= " *";
            echo $sign;
        }
        echo "</br>";
    }
}

getSquare(4);
echo "<hr>";   
?>

</body>
</html>