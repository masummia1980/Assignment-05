<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Calculator</title>
</head>
<?php 
/* Matrix input function Start */
    $firstResult='';
    $secondResult='';
    $thirdResult='';
    $fourthResult='';
    if(isset($_POST["operator"])){
        $firstNumber=$_POST['firstNumber'];
        $secondNumber=$_POST['secondNumber'];
        $thirdNumber=$_POST['thirdNumber'];
        $fourthNumber=$_POST['fourthNumber'];
        $fifthnumber=$_POST['fifthnumber'];
        $sixthNumber=$_POST['sixthNumber'];
        $seventhNumber=$_POST['seventhNumber'];
        $eighthNumber=$_POST['eighthNumber'];
        $operator=$_POST['operator'];
        if(is_numeric($firstNumber) && is_numeric($secondNumber)){
          /* Martix Sum/Addition Function */  
              $arr1 = array(
                array($firstNumber, $secondNumber),
                array($thirdNumber, $fourthNumber)
                );
                $arr2 = array(
                array($fifthnumber,$sixthNumber),
                array($seventhNumber,$eighthNumber)
                );
                  /*if(is_numeric($firstNumber) && is_numeric($secondNumber) &&  is_numeric($thirdNumber) && is_numeric($fourthNumber) && is_numeric($fifthnumber) && is_numeric($sixthNumber) && is_numeric($seventhNumber) && is_numeric($eighthNumber)){*/
                
                if(is_numeric($arr1[0][0]) && is_numeric($arr2[0][0]) &&  is_numeric($arr1[0][1]) && is_numeric($arr2[0][1]) && is_numeric($arr1[1][0])
                   && is_numeric($arr2[1][0]) && is_numeric($arr1[1][1]) && is_numeric($arr2[1][1])){            
                    /* Martix Sum/Addition Function */  
                  if($operator=="Addition"){                      
                      $firstResult=$arr1[0][0] + $arr2[0][0];
                      $secondResult=$arr1[0][1] + $arr2[0][1];
                      $thirdResult=$arr1[1][0] + $arr2[1][0];
                      $fourthResult=$arr1[1][1] + $arr2[1][1];
                    }
                    /* Martix Subtraction Function */
                  elseif($operator=="Subtraction"){
                    $firstResult=$arr1[0][0] - $arr2[0][0];
                      $secondResult=$arr1[0][1] - $arr2[0][1];
                      $thirdResult=$arr1[1][0] - $arr2[1][0];
                      $fourthResult=$arr1[1][1] - $arr2[1][1];
                    }
                    /* Martix Multiply Function */
                  elseif($operator=="Multiply"){
                    $firstResult=$arr1[0][0] * $arr2[0][0];
                      $secondResult=$arr1[0][1] * $arr2[0][1];
                      $thirdResult=$arr1[1][0] * $arr2[1][0];
                      $fourthResult=$arr1[1][1] * $arr2[1][1];
                    } 
            }                
            
        }
        
        
    }

/* Matrix input function End */
?>
<body>
<form method="POST">
    <div style="text-align: center;">
        <label><h1> Number Input</h1></label>
        <label>First Number</label>
        <input type="number" name="firstNumber" value="firstNumber">
        <label>Second Number</label>
        <input type="number" name="secondNumber" value="secondNumber">
        <label>Third Number</label>
        <input type="number" name="thirdNumber" value="thirdNumber"> 
        <label>Fourth Number</label>
        <input type="number" name="fourthNumber" value="fourthNumber">
        <br>
        <br>
        <label>Fifth Number</label>
        <input type="number" name="fifthnumber" value="fifthnumber">
        <label>Sixth Number</label>
        <input type="number" name="sixthNumber" value="sixthNumber">
        <label>Seventh Number</label>
        <input type="number" name="seventhNumber" value="seventhNumber"> 
        <label>Eighth Number</label>
        <input type="number" name="eighthNumber" value="eighthNumber">
        <br>
        <br>
        <label><h1>Show Input Result</h1></label>
        <label>First Result</label>
        <input type="number" name="firstResult" value="<?php echo $firstResult;?>">
        <label>Second Result</label>
        <input type="number" name="secondResult" value="<?php echo $secondResult;?>">
        <label>Third Result</label>
        <input type="number" name="thirdResult" value="<?php echo $thirdResult;?>"> 
        <label>Fourth Result</label>
        <input type="number" name="fourthResult" value="<?php echo $fourthResult;?>">
        <br>
        <br>
  </div>
  <div style="text-align: center;">
    <input type="submit" value="Addition" name="operator" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Subtraction" name="operator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Multiply" name="operator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
  </div>
</form>
</body>
</html>
