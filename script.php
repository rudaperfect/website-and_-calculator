<!DOCTYPE hml>
<html>
<head>
    <title>PHP Demo</title>
</head>
<body>
      <?php

$studentName= $_POST['studentName'];
$grade = $_POST['grade'];
$section = $_POST['section'];
$teacher = $_POST['TeacherName'];

echo"<h1> Student information </h1>";

echo 'Student Name is ' . $studentName;
echo 'He is in grade: ' . $grade;
echo 'He studies in section '.$section;
echo  'He is taught by ' .$teacher;
      ?>
</body>
</html>