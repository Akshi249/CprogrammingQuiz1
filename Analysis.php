<!DOCTYPE html>
<html>
<head>
<title>analysis of your test</title>
</head>
<body>
<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
//echo "<div style='color:white;background-color:blue;font-size:30px;font-style:bold'>YOUR SCORE: $_POST['fscr'] </div>"."<br>";
$scr=$_POST['fscr'];
$fqa=$_POST['1qans'];
$sqa=$_POST['2qans'];
$tqa=$_POST['3qans'];
$frtqa=$_POST['4qans'];
$fiftqa=$_POST['5qans'];
echo "<p style='font-style:bold;font-size:20px'>Question 1</p>";
echo "<p style='font-style:bold;font-size:20px'>Your answer:$fqa</p>";
echo "<p style='font-style:bold;font-size:20px'>Correct answer:2</p>";
echo "<p style='font-style:bold;font-size:20px'>Explanation:</p>";
echo "<div style='font-size:19px;font-style:bold'>
 <p>initially i value is 1, we are assigning the value to variable c by performing pre incrementation of i, which means that, before assignment of value in variable i to variable c, i value will be incremented</p>
 <p>hence variable c value becomes 2</p>
 </div>"."<br>";
if($fqa=="2"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else{ 
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";

echo "<p style='font-style:bold;font-size:20px'>Question 2</p>";
echo "<p style='font-style:bold;font-size:20px'>Your answer:$sqa</p>";
echo "<p style='font-style:bold;font-size:20px'>Correct answer:compilation error</p>";
echo "<p style='font-style:bold;font-size:20px'>Explanation:</p>";
echo "<div style='font-style:bold;font-size:19px'>
<p>variable a is declared as constant integer, hence if we try to modify constant variable it results in compilation error</p>
</div>"."<br>";
if($sqa=="compilation error"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else{
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";


echo "<p style='font-style:bold;font-size:20px'>Question 3</p>";
echo "<p style='font-style:bold;font-size:20px'>Your answer:$tqa</p>";
echo "<p style='font-style:bold;font-size:20px'>Correct answer:compilation error</p>";
echo "<p style='font-style:bold;font-size:20px'>Explanation:</p>";
echo "<div style='font-style:bold;font-size:19px'>
<p>In C programming language, we can use either character or integer data type with switch statement, but in the given question we have used float data typw with switch</p>
<p>statement, because of which it results in compilation error</p>
</div>"."<br>";
if($tqa=="compilation error"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else{ 
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";


echo "<p style='font-style:bold;font-size:20px'>Question 4</p>";
echo "<p style='font-style:bold;font-size:20px'>Your answer:$frtqa</p>";
echo "<p style='font-style:bold;font-size:20px'>Correct answer:&&</p>";
echo "<p style='font-style:bold;font-size:20px'>Explanation:</p>";
echo "<div style='font-style:bold;font-size:19px'>
<p>logical operators in C  programming language are &&, ||, !. &, |,!, these operators are called to be bitwise operators</p>
<p>hence answer to the given question becomes &&</p>
</div>"."<br>";
if($frtqa=="&&"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else {
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";


echo "<p>Question 5</p>";
echo "<p>Your answer:$fiftqa</p>";
echo "<p>Correct answer:free()</p>";
echo "<p>Explanation:</p>";
echo "<div style='font-size:19px;font-style:bold'>
<p>in C  programming language, free() malloc function is used to free,the dynamically allocated memory</p>
<p>hence, answer to the above question becomes free()</p>
</div>"."<br>";
if($fiftqa=="free()"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else{
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";

}
?>
</body>
</html>