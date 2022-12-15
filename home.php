<?php
session_start();
if(!isset($_SESSION['name'])){
  header('location:home1.html');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="home1.css" />
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">     -->
    <title>HOME</title>
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
    <main>
      <div class="banner">
        <img name="slide" height="100%" width="100%" />
      </div>
      <div class="container">
              <div class="contain small">
                          <div class="update">
                                        <div class="text">
                                          <p>Latest Update</p>
                                        </div>
                                  <div class="info">
                                    <ol>
                                      <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo eos ratione itaque labore tenetur dolorem commodi quos culpa quam optio exercitationem quidem illum, voluptates nulla?</li>
                                      <br><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita tempora, optio sunt placeat amet at cum dolores maiores nulla excepturi, omnis necessitatibus tenetur veritatis voluptates?</li>
                                      <br><li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, molestias perferendis totam ullam ex ipsam deserunt tenetur dolore quis obcaecati natus nemo, repellendus nobis facere eius esse. Recusandae autem similique assumenda neque! Ipsa quae eaque fuga laborum amet! Porro, ex. Quod quibusdam ad laboriosam eos quo, nobis qui consectetur iusto.</li>                                    
                                    </ol>
                                  </div>
                          </div>
                   
            
            
          </div>
    
    
    <div class="contain large">
        <h3>We are Non-profit Organization</h3><br><br>
      <section class="sc">
        <h3><span>Scholargyani Gaining Steps</span></h3><br>
        <article class="Register">
          <h4>Register & create your profile</h4>
          <ul>
            <li>Sign UP with Gmail/Mobile number or email id</li>
            <li>Complete your profile i.e. income, gender and other required fields</li>
          </ul>
        </article><br>

        <article class="Eligibility">
          <h4>Check Your Eligibility</h4>
          <ul>
            <li>check eligibility by simply inputing basic details</li>
            <li>Easy overview of scholarships</li>
          </ul>

        </article>
          <br>
        <article class="Apply">
          <h4>Apply for scholarships</h4>
          <ul>
            <li>Apply directly to the official website</li>
            <li>Upload high-quality documents with all fields visible</li>
          </ul>
        </article>

      </section>
    </div>
    <div class="about-section">
  <h1>About Us</h1>
  <p>With 76.04% literacy rate and an increasing number of dropouts failing to enrol or complete any form of higher education, the situation is worrying. Financial constraints, lack of know-how about education funding schemes are some of the key contributors to this effect.</p>
  <p>ScholarGyani, since 2021, is endeavoring to bridge the gap between scholarship providers and scholarship seekers by providing a simpler, easier and faster way of searching scholarship. We provide easy access to scholarships with end-to-end application support to seekers and end-to-end management and monitoring of scholarship programs to providers</p>

<br><br>
 
</div>

<div class="about-section2">
  <!-- <h2>Our Aim</h2>
  <p>We have aim to guide the more & more people towards the scholarship benefits</p>
</div> -->


<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <!-- <img src="1.jpg" alt="Viraj" style="width:100%"> -->
      <div class="container1">
        <h2>Viraj Pataniya</h2><br>
        <p class="title">Team Leader</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>virajpataniya@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <!-- <img src="2.jpg" alt="Archi" style="width:100%"> -->
      <div class="container1">
        <h2>Archi Patel</h2><br>
        <p class="title">Web Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>patelarchi222002@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <!-- <img src="3.jpg" alt="Tulsi" style="width:100%"> -->
      <div class="container1">
        <h2>Tulsi Patel</h2><br>
        <p class="title">Web Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>tulsipatel5084@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <!-- <img src="3.jpg" alt="Dhariya" style="width:100%"> -->
      <div class="container1">
      <h2>Dhariya Patel</h2><br>
      <p class="title">Graphic Designer, Content Manager</p>
      <p>Some text that ipsum lorem.</p>
      <p>dhairyapatel602@gmail.com</p>
      <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>




    
    
    </main>
    <script>
      var i = 0;
      var images = [];
      var time = 3000;
      images[0] = "111.jpg";
      images[1] = "222.jpg";
      images[2] = "333.jpg";
      images[3] = "444.jpg";
      function changeImg() {
        document.slide.src = images[i];
        if (i < images.length - 1) {
          i++;
        } else {
          i = 0;
        }
        setTimeout("changeImg()", time);
      }
      window.onload = changeImg;
    </script>
  </body>
</html>
