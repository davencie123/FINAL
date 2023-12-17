<?php
  include 'database.php';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Da Vencie D. Opaon</title>
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
    <style>
      body {
    text-align: center;
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 0;
    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;

}


.top-container {
    background-color: #EAF6F6;
    position: relative;
    padding: 100px;

}


.middle-container {
    margin-bottom: 20px;

}

.bottom-container {
   background-color: #66BFBF;
   padding: 10px;


}

h1 {
    font-family: 'Montserrat', sans-serif;
    color: #66BFBF;
    position: relative;
    margin-top: 50px;
    font-size: 4rem;

}

h2 {
    font-family: 'Josefin Sans', sans-serif;
    color: #66BFBF;
    font-size: 3em;
}

h3  {
    font-family: 'Josefin Sans', sans-serif;
    color: #11999E;
    font-size: 2rem;
    
}

hr {
    border-top: dotted 10px;
    border-bottom: none;
    width: 5%;
    border-color: #EAF6F6;
}

p {
    font-family: 'Pacifico', cursive;
    font-size: 1.2rem;
    color: #2F4F4F;
}

.cloud1 {
    position: absolute;
    right: 250px;
    top: 50px;

}

.cloud2  {
    position: absolute;
    left: 250px;
    bottom: 350px;

}

.skill-row {
    width: 50%;
    margin: 100px auto;
    text-align: left;
    

}

.profile {
    width: 60%;
    margin: auto;
}

.coding {
    width: 25%;
    float: left;
    margin-right: 30px;


}

.assistant  {
    width: 25%;
    float: right;
    margin-left: 30px;

}

.btn {
    background: #11cdd4;
    background-image: -webkit-linear-gradient(top, #11cdd4, #11999e);
    background-image: -moz-linear-gradient(top, #11cdd4, #11999e);
    background-image: -ms-linear-gradient(top, #11cdd4, #11999e);
    background-image: -o-linear-gradient(top, #11cdd4, #11999e);
    background-image: linear-gradient(to bottom, #11cdd4, #11999e);
    -webkit-border-radius: 8;
    -moz-border-radius: 8;
    border-radius: 8px;
    font-family: Arial;
    color: #ffffff;
    font-size: 20px;
    padding: 10px 20px 10px 20px;
    text-decoration: none;
  }
  
  .btn:hover {
    background: #30e3cb;
    background-image: -webkit-linear-gradient(top, #30e3cb, #2bc4ad);
    background-image: -moz-linear-gradient(top, #30e3cb, #2bc4ad);
    background-image: -ms-linear-gradient(top, #30e3cb, #2bc4ad);
    background-image: -o-linear-gradient(top, #30e3cb, #2bc4ad);
    background-image: linear-gradient(to bottom, #30e3cb, #2bc4ad);
    text-decoration: none;
  }

  .reymond-footer {
    margin: 10 0 0 0;
    color: #EAF6F6;
  }

  a  {
    color: #11999E;
    text-decoration: none;
    margin: 20px 20px;
  }

a:hover {
    color: #EAF6F6;
}

header{
    position:fixed;
    top: 0;
    right: 0;
    width: 100%;
    z-index:1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px 170px;
    background: var(--bg-color);
}

.navbar{
    display: flex;
}
.navbar a{
    color: var(--text-color);
    font-size: 1.1rem;
    padding: 10px 20px;
    font-weight: 500;
}

ul li{
    list-style: none;
}

ul li a{
    border-style: groove;
    border-radius: 5px;
}
ul li a:hover {
    background: #11999E;
}
.back:hover {
    color: orange;
}
    </style>

  </head>
<body>

    <header>
        <a href="#" class="logo">Foods</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        </ul>
    </header>

    <div class="top-container">
        <img src="./img/cloud.png" class="cloud1" alt="cloud-img">
        <h1>I'm Da Vencie.</h1>
        <a href="dashboard.php" class="back">Click here to go back</a>
        <p> an IT Student.</p>
        <img src="./img/cloud.png" class="cloud2" alt="cloud-img">
        <img src="./img/mountain.png" class="mountain1" alt="mountain-img">
        
    </div>

    <div class="middle-container">
        <div class="profile">
          <img src="" alt="">
          <h2>Hello.</h2>
          <p>I am Da Vencie, an IT student immersed in the dynamic realm of technology, currently pursuing a BSIT at University of Cebu Lapu Lapu & Mandaue. My academic journey has equipped me with a robust understanding of key IT concepts, programming languages, and system architectures. My hands-on experience through internships and personal projects, coupled with a passion for staying abreast of the latest advancements, sets me apart. I thrive in collaborative environments, possess a knack for translating technical jargon to non-technical stakeholders, and am eager to contribute my skills and innovative mindset to a dynamic IT team. Thank you for considering my application—I look forward to bringing my enthusiasm and technical acumen to your organization.</p>
        </div>
        <hr>
        <div class="skills">
          <h2>My Hobbies.</h2>
          <div class="skill-row">
            <img class="coding" src="./img/Skills.png" alt="coding-img">
            <h3>Video Gaming</h3>
            <p>I'm Da Vencie, an IT student with a passion for video gaming. When I'm not delving into the complexities of technology, I find joy in exploring virtual worlds, mastering gameplay, and connecting with a global gaming community. Beyond the thrill of competition, gaming serves as a creative outlet, influencing my perspective on storytelling and problem-solving. It's more than a hobby—it's a dynamic and integral part of who I am.</p>
          </div>
          <div class="skill-row">
            <img class="assistant" src="./img/assistant.png" alt="assistant-img">
            <h3>Virtual Assistant</h3>
            <p>As a virtual assistant, I possess a versatile set of skills to enhance your productivity and efficiency. I am proficient in managing calendars and scheduling appointments, ensuring that you stay organized and never miss important deadlines. With my strong research abilities, I can gather valuable information on a wide range of topics, enabling you to make informed decisions. I excel in handling email and correspondence, ensuring prompt and professional communication. Additionally, I have expertise in data entry and organization, streamlining your administrative tasks. Equipped with excellent problem-solving skills, I am adept at finding innovative solutions to challenges that may arise. With my dedication, adaptability, and commitment to providing exceptional support, I am ready to assist you in achieving your goals effectively.</p>
          </div>
        </div>
        <hr>
        <div class="contact-me">
          <h2>Get In Touch</h2>
          <h3>When clients work with me, they see:</h3>
          <p>✅Increase Business revenue</p>
          <p>✅Generates new Business</p>
          <p>✅Comfortable working with me</p>
          <a class="btn" href="mailto:davencieopaon@email.com">CONTACT ME</a>
        </div>
      </div>
      
      
      <div class="bottom-container">
        <a class="footer-link" href="https://www.instagram.com/davencie123/">Instagram</a>
        <a class="footer-link" href="https://www.facebook.com/davencie.opaon">Facebook</a>
        <p class="reymond-footer">© Da Vencie Opaon.</p>
      </div>
      
    
</body>
</html>