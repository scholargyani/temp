<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Scholar Gyani
    </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--     Fonts and icons     -->
    

 <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
header{
    width: 100%;
    height: 50px;
    background: black;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.logo{
  padding: 100px;
  margin-top: 60px;
  width: 400px;
  height: 400px;
    border-radius: 50%;
    z-index: -1;
}
.nav{
    display: flex;
    align-items: center;
}
.nav ol{
    display: flex;
    list-style: none;
}
.nav ol li{
    margin: 1em;
}
.nav ol li a{
    text-decoration: none;
    padding: 0.2em 1.2em 0.9em 1.2em;
    border-radius: 10px 10px 0 0;
    color: whitesmoke;
    transition: all .4s;
    position: relative;
    z-index: 1;
}
.nav ol li a::before{
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 41px;
    border-radius: 10px 10px 0 0;
    background: #853333;
    transform-origin: bottom;
    background: linear-gradient(to right, #1c7dbe,#f1740e);
    transform: scaleY(0.05);
    z-index: -1;
    transition: all .4s;
}
.nav ol li a:hover::before{
    transform: scaleY(1.1);
}
.nav ol li a:hover{
    color: white;
}
.btn{
    position: relative;
    width: 25px;
    height: 25px;
    -webkit-appearance:none;
    appearance: none;
    cursor: pointer;
    display: none;
}
.btn::before{
    content: '\f0c9';
    position: absolute;
    top: 0;
    left: 0;
    font-family: 'Font Awesome 5 Free';
    font-weight: 700;
    font-size: 2em;
}
@media (max-width: 1200px){
    .btn{
        display: flex;
        z-index: 100;
    }
    
    header{
        justify-content: space-between;
        padding: 0 2em;
    }

    .nav{
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        background: #F8F8F8;
        transform: translateY(-110%);
        transition: all .4s;
    }

    input:checked ~ .nav{
        transform: translateY(0%);
    }

    input:checked::before{
        content: '\f00d';
    }



}
@media (max-width: 700px){
    .nav ol{
        flex-direction: column;
        text-align: center;
    }
}
body{
    background: linear-gradient(to right, #1c7dbe,#f1740e);
}

    </style>

</head>

<body class="">
        <div class="nav">
            <ol>
                <li><a href="home1.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="Scholarships1.html">SCHOLARSHIPS</a></li>
                <!-- <li><a href="loginpage.html">Login/Signup</a></li> -->
            </ol>
        </div>
    </header>  


<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Click Me
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    
    <a class="dropdown-item" href="form.html">Back</a>
    
  </div>
</div> 
            <table class="table">
    <thead>
        <tr>
            
            <th>Scholarships</th>
            
            <th>Apply</th>
        </tr>
    </thead>

    <tbody>
    <?php
     $sc=$_POST['10th'];
    $hc=$_POST['12th'];
     $gen=$_POST['gender'];
    $cas=$_POST['caste'];
    $in=$_POST['income'];
    $con=mysqli_connect("localhost","root","","scholargyani");
     $display="select * from `scholarships` WHERE ssc<='$sc' && hsc<='$hc' && (Gender='$gen' || Gender='Any') && (caste='$cas' || caste='any') && income<='$in';";
     $result=mysqli_query($con,$display);	
     while($sult=mysqli_fetch_array($result))
     {
        ?> 
            <tr>
            <td><?php echo $sult['schname'];?></td>
            
            <td class="td-actions text-right">
                    
                    <button type="button" value="Apply For Scholarship" style="border-radius:9px">
                    <a href="info.php?name=<?php echo $sult['schname'];?>">Details</a>
                    </button>
                
            </td>
            </tr>
            <?php
    }
?>
        
    </tbody>
</table>


<script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
</body>
</html>