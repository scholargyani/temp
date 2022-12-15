<?php
session_start();
if(!isset($_SESSION['name'])){
  header('location:home1.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home1.css" />
<style>
body{
    background: linear-gradient(to right, #1c7dbe,#f1740e);

}
form{
    background-color: black;
    color: white;
    opacity: 0.6;
    padding: 2%;
    margin: 40px;
    border-radius: 10px;
}
legend{
    font-size: 100px;
    font-weight: bolder;
    font-style: italic;
    color: lightsalmon;
}
fieldset{
    border-color: lightcoral;
    border-width: 3px;
    border-radius: 10px;
    padding-left: 50px;
}
label{
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 50px;
}
input{
    height: 25px;
    border-radius: 15px;
}
input[type="submit"],input[type="reset"]{
    height: 50px;
    width: 100px;
    border-radius: 30px;
    font-weight: bolder;
    font-size: large;
    margin: 30px;
    float: right;
}
::placeholder{
    color: black;
}

</style>
</head>
<body>
<header>
      <p><img class="logo" src="logo1.png" /></p>
      <input type="checkbox" name="" class="btn" />
      <div class="nav">
        <ol>
          <li><a href="home.php">HOME</a></li>
          <!-- <li><a href="about.html">ABOUT</a></li> -->
          <li><a href="form.php">SCHOLARSHIPS</a></li>
    
          <li><a href="logout.php">Log Out</a></li>
          <li><p style="color: white"><?php echo "Hy,".$_SESSION['name']; ?></p></li>
        </ol>
      </div>
    </header>
    
<form action="getsch.php" method="POST" name="filterform">
<fieldset>
    <legend>Form</legend>
<label for="percentage">Qualification</label><br>
    10<sup>th</sup> Percentage : <input type="number" name="10th" placeholder="10th percentage" required>&nbsp;&nbsp;&nbsp;
    12<sup>th</sup> Percentage : <input type="number" name="12th" placeholder="12th percentage" required><br><br>
<label for="Gender">Gender : </label>
<br>
<input type="radio" name="gender" value="Female">Female 
<input type="radio" name="gender" value="Male">Male 
<input type="radio" name="gender" value="Other">Other<br><br>
<label for="caste">Category : </label>
<br>
<input type="radio" name="caste" value="general">General 
<input type="radio" name="caste" value="obc">OBC 
<input type="radio" name="caste" value="sc">SC
<input type="radio" name="caste" value="st">ST<br><br>

<label for="Income(Anual)">Annual Income</label><br>
<input type="number" name="income" required><br>
<input type="submit" onclick="valid()"> <input type="reset">
<br>

</fieldset>
</form>

    
</body>
</html>