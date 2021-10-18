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
      $result=array();
      $result[0][0]="";
      $result[0][1]="";
      $result[1][0]="";
      $result[1][1]="";
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

                for($row=0;$row<count($arr1);$row++)
                    {
                      $size_of_col=count($arr1[$row]);
                      for($col=0;$col<$size_of_col;$col++)
                      {   
                         /* Martix Sum/Addition Function */ 
                        if($operator=="Addition")
                        {
                          $result[$row][$col]=$arr1[$row][$col]+$arr2[$row][$col];
                        } 
                        /* Martix Subtraction Function */
                        else if($operator=="Subtraction")
                        {
                          $result[$row][$col]=$arr1[$row][$col]-$arr2[$row][$col];
                        } 
                         /* Martix Multiply Function */
                        else
                        {
                            $result[0][0]= $arr1[0][0]*$arr2[0][0]+ $arr1[0][1]*$arr2[1][0];
                            $result[0][1]= $arr1[0][0]*$arr2[0][1]+ $arr1[0][1]*$arr2[1][1];
                            $result[1][0]= $arr1[1][0]*$arr2[0][0]+ $arr1[1][1]*$arr2[1][0];
                            $result[1][1]= $arr1[1][0]*$arr2[0][1]+ $arr1[1][1]*$arr2[1][1];
                        }        
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
        <input type="number" name="firstNumber" value="firstNumber" step="0.01">
        <label>Second Number</label>
        <input type="number" name="secondNumber" value="secondNumber" step="0.01">
        <label>Third Number</label>
        <input type="number" name="thirdNumber" value="thirdNumber" step="0.01"> 
        <label>Fourth Number</label>
        <input type="number" name="fourthNumber" value="fourthNumber" step="0.01">
        <br>
        <br>
        <label>Fifth Number</label>
        <input type="number" name="fifthnumber" value="fifthnumber" step="0.01">
        <label>Sixth Number</label>
        <input type="number" name="sixthNumber" value="sixthNumber" step="0.01">
        <label>Seventh Number</label>
        <input type="number" name="seventhNumber" value="seventhNumber" step="0.01"> 
        <label>Eighth Number</label>
        <input type="number" name="eighthNumber" value="eighthNumber" step="0.01">
        <br>
        <br>
        <label><h1>Show Input Result</h1></label>
        <label>First Result</label>
        <input type="number" name="firstResult" value="<?php print_r($result[0][0]);?>">
        <label>Second Result</label>
        <input type="number" name="secondResult" value="<?php print_r($result[0][1]);?>">
        <label>Third Result</label>
        <input type="number" name="thirdResult" value="<?php print_r($result[1][0]);?>"> 
        <label>Fourth Result</label>
        <input type="number" name="fourthResult" value="<?php print_r($result[1][1]);?>">
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

