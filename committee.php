<!DOCTYPE html>
<html>
<head>
	<title>Committee</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	
.card{

  background-color: white;
  padding: 30px;
  padding-bottom: 50px; 
  margin-top: 20px;
}
.card h2{
	text-align: center;
}
.card p{
margin-left: 80px;
margin-right: 80px;
font-size: 16px;
	
}

*, *:before, *:after {
  box-sizing: initial;
}

.row h2.head{
	font-size: 20px;
	text-align: center;
	font-weight: bold;

}
.row p.para{
	font-size: 30px;
	text-align: center;
	font-weight: bolder;
}

.column {

 float: left;
  width: 15%;
  margin-top: 50px;
  margin-left: 100px;
  margin-bottom: 20px;
  padding-left: 20px;
}

@media screen and (max-width: 400px) {
  .column {
    width:100%;
    display: block;
  }
}

.card1 {
  box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.2);
}
.column img{
	margin-left: 10px;
}
.container {
  padding: 0 5px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 20px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}



.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 1px 1px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ddd;
  min-width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: #ddd;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>
<div class="topnav">


  <a  href="home.php">Home</a>
<div class="dropdown">
    <button class="dropbtn">  <a class="active" href="#">About Us</a>

      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="about1.php">Our Mission</a>
      <a  href="committee.php">Committee</a>
    </div>
  </div> 

  <a href="activity.php">Activities</a>
  <a href="involve.php">Get Involved</a>
  <div class="dropdown">
    <button class="dropbtn">  <a  href="#">Membership</a>

      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="registration.php">Registration</a>
      <a href="temp1.php">Account Login</a>
    </div>
  </div> 

     <a href="gallery.php">Gallery</a>
  <a href="donate.php">Sponsors and Donors</a>
  <a href="News.php">News & Event</a>
  <a href="contact.php">Contact Us</a>
    <a href="https://juniv.edu/" target="_blank">JU</a>

</div>

<div class="card">
	<h2>Officers and Elections</h2>
	<p>The officers of the Association shall be classified into two categories: elected and appointed. The offices of the President and the Executive Secretary shall be filled by election and only degree/diploma holders of JU University shall qualify to be elected to these positions.</p>
</div>
<div class="card">
	<h2>Qualifications for the Office</h2>
	<p>The Executive Secretary, in order to ensure the expeditious and efficient functioning of the association and to foster close relationship and effective cooperation among the Association and the Administration, and the Student Body of JU-Jahangirnagar University, must be resident of Dhaka, Bangladesh. S/he shall hold regular office at the JU Alumni Office at the JU the official domicile of the Association.</p>
</div>
<div class="card">
	<h2>Board of Managers</h2>
	<p>The corporate powers and management of the Association shall be exercised, administered and controlled by a Board of Managers which shall consist of the following members: President, Executive Secretary, Finance Secretary, Auditing Secretary, Business Secretary, Press Secretary and representatives of colleges, campus or chapters.</p>
</div>
<div class="card">
	<h2>CONSTITUTION OF JU ALUMNI ASSOCIATION</h2>
	<p>The Executive Secretary, in order to ensure the expeditious and efficient functioning of the association and to foster close relationship and effective cooperation among the Association and the Administration, and the Student Body of JU- International University of Business Agriculture and Technology, must be resident of Dhaka, Bangladesh. S/he shall hold regular office at the JU Alumni Office at the JU the official domicile of the Association.</p>
</div>
<div class="row">
<h2 class="head"><br><br>Board Of Manageers</h2>
<br>
  <div class="column">
    <div class="card1">
      <img src="pic/image.png" alt="Jane" style="width:90%">
      <div class="container">
        <p><br><b>John Doe</b>|President</p>
        
        <h4>contact:doe@gmail.com</h4><br>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card1">
      <img src="pic/image.png" alt="Mike" style="width:90%">
      <div class="container">
        <p><br><b>Lizzie Aaron</b>|Vice President</p>
        
        <h4>contact:lizzie@gmail.com</h4><br>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card1">
      <img src="pic/image.png" alt="John" style="width:90%">
      <div class="container">
        <p><br><b>Aedan Bill</b>|General Manager</p>
        
        <h4>contact:aedan@gmail.com</h4><br>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card1">
      <img src="pic/image.png" alt="John" style="width:90%">
      <div class="container">
        <p><br><b>Nicole Kim</b>|Executive Secretary</p>
        
        <h4>contact:nicole@gmail.com</h4><br>
        
      </div>
    </div>
  </div>

  <div class="row">

<br>
  <div class="column">
    <div class="card1">
      <img src="pic/image.png" alt="Jane" style="width:90%">
      <div class="container">
        <p><br><b>John Doe</b>|President</p>
        
        <h4>contact:doe@gmail.com</h4><br>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card1">
      <img src="pic/image.png" alt="Mike" style="width:90%">
      <div class="container">
        <p><br><b>Lizzie Aaron</b>|Vice President</p>
        
        <h4>contact:lizzie@gmail.com</h4><br>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card1">
      <img src="pic/image.png" alt="John" style="width:90%">
      <div class="container">
        <p><br><b>Aedan Bill</b>|General Manager</p>
        
        <h4>contact:aedan@gmail.com</h4><br>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card1">
      <img src="pic/image.png" alt="John" style="width:90%">
      <div class="container">
        <p><br><b>Nicole Kim</b>|Executive Secretary</p>
        
        <h4>contact:nicole@gmail.com</h4><br>
        
      </div>
    </div>
  </div>
  </div>
</body>
<footer>
<div class="address">
  <h3>Jahangirnagar University Alumni Association</h3>
  <address>Register Building,Room No #131<br>Jahangirnagar University,Savar,Dhaka
       </address><br>
  <p>Contact Numbers:<br>(01876783515-520)</p>
<p >Gmail:alumni@juniv.edu</p> 
<p class="copyright " style="color: white" align="right" style="font-size: 2px">&copy;Copyright JUAA.2020:All rights reserved</p>

</footer>

</html>