<?php

//access the global array called $_POST to get the values from the text fields
$q1 = $_POST["q1"];
$a1 = "9";
$q2 = $_POST["q2"];
$a2 = "Topeka";
$q3 = $_POST["q3"];
$a3 = "Kentucky";
$q4 = $_POST["q4"];
$a4 = "Addams Family";
$q5 = $_POST["q5"];
$a5 = "The Little Mermaid";
$score = 0;
$total = 5;
$percentage = 0;

if($q1 == $a1){
  $score += 1;
}
if($q2 == $a2){
  $score += 1;
}
if($q3 == $a3){
  $score += 1;
}
if($q4 == $a4){
  $score += 1;
}
if($q5 == $a5){
  $score += 1;
}

$percentage = ($score/$total)*100;
echo "<h1>$percentage%</h1><h2>$score out of $total</h2>";

echo "<br><b>Question 1:</b> What is the next number in the squence? 1,3,5,7..<br>";
echo "Your Answer: $q1<br>";
echo "Correct Answer: $a1<br>";

echo "<br><b>Question 2:</b> What is the state capitol of Kansas?<br>";
echo "Your Answer: $q2<br>";
echo "Correct Answer: $a2<br>";

echo "<br><b>Question 3:</b> Which state comes after Kansas alphabetically?<br>";
echo "Your Answer: $q3<br>";
echo "Correct Answer: $a3<br>";

echo "<br><b>Question 4:</b> On TV, who did the character Lurch work for?<br>";
echo "Your Answer: $q4<br>";
echo "Correct Answer: $a4<br>";

echo "<br><b>Question 5:</b> What disney movie was the first to star a red head?<br>";
echo "Your Answer: $q5<br>";
echo "Correct Answer: $a5<br>";

?>
