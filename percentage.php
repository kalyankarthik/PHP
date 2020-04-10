

<h1> Student marks Percentage Calculator</h1>
<form action="StudentPercentageCalculator.php" method="post">
Registration Number: <input type="Number" name="reg" required/><br><br>
Open Source Technologies: <input type="Number" name="OST" required/><br><br>
Digital Electronics: <input type="Number" name="DE" required/><br><br>
Physics: <input type="Number" name="Physics" required/><br><br>
Mechanics : <input type="Number" name="Mechanics" required/><br><br>
java : <input type="Number" name="java" required/><br><br>

<button type="GetPercentage" onclick="myfun()" >GetPercentage</button>
</form>
<html>
<head>
<script type="text/javascript">
   function myfun(){
      alert("Submitted Successfully");
   }
</script>
</head>
<body>
<?php

$con = mysqli_connect('localhost','root','','percentage');

$reg = $_POST['reg'];
$OST = $_POST['OST'];
$DE = $_POST['DE'];
$Physics= $_POST['Physics'];
$Mechanics = $_POST['Mechanics'];
$java = $_POST['java'];
$result = $OST + $DE + $Physics + $Mechanics + $java;
$percentage = ($result/600)*100;
$s = "INSERT INTO student(Registration_Number,Open_Source_Technologies,Digital_Electronics,Physics,Mechanics,java,Percentage) VALUES ('$reg','$OST','$DE','$Physics','$Mechanics','$java','$percentage')";

$result = mysqli_query($con,$s);

echo "Percentage for $reg is $percentage";

?>

</body>
</html>
