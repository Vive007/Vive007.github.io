<html>
    <h4 style="color:green;">calculator</h4>
<form  action='get.php' method='GET'>
    <input type='text' name='num1' value=''>
    <p title="pls enter +,-,*,/">enter operators
    <input  type='text' name='operator' value=''></p>
    <input type='text' name='num2' value=''>
    <br>
    <input type='submit' value='submit'>
</form>


</html>




<?php
$num1= $_GET['num1'];
$num3= $_GET['operator'];
$num2= $_GET['num2'];

// $name =$_GET['viv'];
// if($name)
// echo "hey .$name";
function cal($num1,$num2,$ope)
{
switch($ope)
{
    case "+":
        $total= $num1+$num2;
        return $total;
        break;
        case "-":
            $total= $num1-$num2;
            return $total;
            break;
            case "*":
                 $total=$num1*$num2;
                 return $total;
                break;
                case "/":
                    $total= $num1/$num2;
                    return $total;
                    break;
                    default:
                        echo "pls enter correct operator";
}

}
echo cal($num1,$num2,$num3);
?>
