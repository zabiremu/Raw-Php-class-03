<?php
$alpha = "alex";
// echo ctype_alpha($alpha);
var_dump(ctype_alpha($alpha),"<br><br>");
// statment 
$num = 50.50;
// echo is_numeric($num)
var_dump(is_numeric($num),"<br><br>");

$a = 10;
$b = 20;
echo $a > $b ? "a is greater then b" : "b is greater then a";
echo "<br><br>";
if(ctype_alpha($alpha) == true){
    echo "$alpha is alphabet";
}else{
    echo "It is not";
}
echo "<br><br>";
if(is_numeric($num) == true){
    echo "$num is numeric value";
}else{
    echo "It's not";
}
echo "<br><br>";
function Login($email, $pass){
    $email = $email;
    $pass = $pass;
    if($email == "zabirraihan570@gmail.com"){
        if($pass == 12345){
            echo "Login";
        }else{
            echo "please enter the correct password";
        }
    }else{
        echo "Please enter the correct mail";
    }
}
Login("zabirraihan570@gmail.com",12345);
echo "<br><br>";
function Access($userName, $userPass){
    $mail = $userName;
    $password = $userPass;
    if($mail == "zabirraihan@gmail.com"){
        if($password == 123456 && is_numeric($password) == true){
            echo"Login";
        }else{
            echo "enter the correct password and use numeric number";
        }
    }else{
        echo "enter the correct mail and use alphabet";
    }
}
Access("zabirraihan@gmail.com",123456);
echo "<br><br>";
$alphab = "a";
switch($alphab){
    case ctype_alpha($alphab):
      echo $alphab . " is it alphabet number";
    break;
    case is_numeric($alphab):
        echo is_numeric($alphab) . "is it numeric number";
    break;
    default:
    echo "It's ok";    
}
echo "<br><br>";
function Check($check){
    $alphab = $check;
switch($alphab){
    case ctype_alpha($alphab):
      echo $alphab . " is it alphabet number";
    break;
    case is_numeric($alphab):
        echo is_numeric($alphab) . "is it numeric number";
    break;
    default:
    echo "It's ok";    
}
}
Check("acv");
echo "<br><br>";
function loan($ammount = 0, $months = 1, $interest = 10){
    $ammount = $ammount;
    $months = $months;
    $perMonth = $ammount / $months;
    $interest =  $interest;
    $totalInterest =  $perMonth / 100 * $interest;
    $totalAmmount = $perMonth + $totalInterest;
    return $totalAmmount;
}
function possible($earn, $expensess,$poss){
    $earn = $earn;
    $expensess = $expensess;
    if($earn - $expensess >= 25000){
        echo "I can do it";
    }else{
        echo "I can't";
    }
}
possible(60000, 20000, loan(50000, 2));
echo "<br><br>";

function checkInRange($num1){
    $num1 = $num1;
    if($num1 >= 1 && $num1 <= 10){
        echo "between the range";
    }else{
        echo "outside the range";
    }  
}
checkInRange(5);
echo "<br><br>";
function LeapYear($leapyear){
    $leapyear = $leapyear;
    if($leapyear%4 == 0 && $leapyear%100 != 0 || $leapyear%400 == 0){
        echo "its leap year";
    }else{
        echo "it's not leap year";
    }
}
LeapYear(2016)
?>