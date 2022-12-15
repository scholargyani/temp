<?php
$adh=$_GET['name'];
$con=mysqli_connect("localhost","root","","scholargyani");
$q1="select * from `schinfo` where schname='$adh'";
$re2=mysqli_query($con,$q1);
$kk=mysqli_fetch_array($re2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholar Gyani</title>
    <style>
        *{
            box-sizing: border-box;
        }
        .container{
            border: 1px solid black;
            height: 100%;
            width: 95%;
            border-radius: 10px;
            padding: 0px 10px 10px 10px;
            margin: 30px;
            text-align: left; 
            background: linear-gradient(to right, #1c7dbe,#f1740e);
        }
        h2{
            text-align: center;
            text-shadow: 1px 1px 1px white;
            color: black;
        }
        h4{
            text-align: left;
            font-size: larger;
        }
        .heading{
            margin: 0;
        }
        button{
            background-color: black;
            color: white;
            opacity: 0.8;
            border-radius: 20px;
            padding: 3px;
            box-shadow: 2px 2px 2px white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
        <h2><?php $kk['schname']; ?></h2></div>
        <ul>
        <h1>Details</h1>
        <div class="eligiblity">
            <ul>
                <p><?php echo $kk['info']; ?></p>
                
            </ul>
        </div>
        
        </ul>
       <center> <button value="apply"><a href="<?php echo $kk['link'];?>">Apply Now!!</a></button></center>
    </div>
</body>
</html>