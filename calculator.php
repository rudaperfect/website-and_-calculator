<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>MY CALCULATOR</title>
</head>
<body>
<form>
    <input type="text"name="num1"placeholder="Number1"></input>
    <br>
    <input type="text"name="num2"placeholder="Number2"></input>
    <br>
 <select name="operator">  
        <option>None</option>
        <option>Addition</option>
        <option>Multiply</option>
        <option>Devide</option>
        <option>Subtract</option>
</select>
<br>
<button type ="submit"name="submit" value="submit">Calculate</button>
</form>
<p>Your answer is :</p>
<?php
if(isset($_GET['submit'])){
$result1 = $_GET['num1'];
$result2= $_GET['num2'];
$operator = $_GET['operator'];
switch ($operator){
case "None": 
   echo "select a method!";
break;
case "Addition": 
   echo $result1 + $result2;
break;
case "Multiply": 
    echo $result1 * $result2;
break;
case "Devide": 
    echo $result1 / $result2;
break;
case "Subtract": 
    echo $result1 - $result2;
break;
}
    }  
?>
</body>
</html>