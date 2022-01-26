<!DOCTYPE html>
<html>
<head>
  <title>sendMail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <link rel="stylesheet" type="text/css" href="style.css">

  <style type="text/css">




form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

.title
{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.title p{
  text-align: center;
  font-family: cursive;
  color: white;
  
  font-size: 40px;

}
.logo1{
  width: 80px;
  margin-left:300px;
}
.card{

  background-color: white;
  padding: 30px;
  padding-bottom: 50px; 
}

.card h3{
  margin-top: -80px;
  font-size: 30px;
  text-align: center;
}


.chair{
  width: 250px;
  margin-left: 50px;
}
.message h2{
  text-align: center;
  padding-top: 20px;

}
.message p{
  text-align: left;
  font-size: 18px;
  margin-left: 320px;
  margin-right: 100px;
  margin-top: -170px;
}

.card1{
  background-color:  white;
  padding: 30px; 
  margin-top: 100px;

}
.card1 img{

  margin-left: 100px;
  margin-top: 60px;
  max-width: 270px;
}
.card1 h2{
  margin-top: 50px;
text-align: center;
margin-bottom: 50px;
}
.card1 h4{
  text-align: center;
  margin-top: 10px;
  color: #30741F;
  font-size: 20px;
}
.card1 p{
  text-align: left;
  margin-top: -120px;
  padding-bottom: 100px;
  margin-left: 500px;
  margin-right: 50px;
}


.event{
  text-align: center;
  padding-bottom: 50px;
  padding-top: 50px;

}

.btn {
  font-size: 28px;
  border:1px white;
  
  color: #30741F;
  transition:0.6s ease;
}
.btn:hover{
  background-color: #34552C;
  color:white;
}
.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.mySlides {display:none;}
  .column {
  float: left;
  width: 30%;
  padding: 5px 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 50px;
  }
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  margin-left: 100px;
  text-align: left;
}
.nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    margin-left: 100px;
    list-style: none;
    color: white;
}
.nav-link {
  background-color: gray;
  text-decoration: none;
  padding: 20px;
  color: white;

}
a{
  text-decoration: none;
}
</style>
</head>

<body>

 <div class="topnav">


  <a class="active" href="home.php">Home</a>
<div class="dropdown">
    <button class="dropbtn"><a href="#"> About Us </a>
    </button>
    <div class="dropdown-content">
      <a href="about1.php">Our Mission</a>
      <a href="committee.php">Committee</a>
    </div>
  </div> 

  <a href="activity.php">Activities</a>
  <a href="involve.php">Get Involved</a>
  <div class="dropdown">
    <button class="dropbtn">  <a  href="#">Membership</a>

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
    

</div><br><br><br><br><br><br><br><br><br>

<?php

	$uname = $_GET['param1'];
  $id = $_GET['param2'];
//	echo $uname;

	$conn = mysqli_connect('localhost', 'root', '', 'project');
	if($conn){

		//echo "<h2 style='text-align:center;'>Connecttion successful</h2>";
		$sts = "yes";
		$sql = "SELECT * from members WHERE status='".$sts."' ";
		$res = mysqli_query($conn, $sql);
		if(mysqli_num_rows($res)==0){
			//echo "<h2 style='text-align:center;'>Please Log In Your Account First!</h2>";
			//header('location: http://localhost/SWE%20Project/SWE%20Project/home.php');
      $out=""; $out.='
        <script type="text/javascript">
        alert("Please LogIn Your Account First!");
        </script>
      ';
      echo $out;
		}
		else{

			$sql1 = "SELECT * FROM members WHERE uname ='".$uname."' ";
					$res1 = mysqli_query($conn, $sql1);
					$row1 = mysqli_fetch_assoc($res1);
			$session = $row1["session"];
			$regnum = $row1["regnum"];
			$fname = $row1["fname"];
			$lname = $row1["lname"];
			$name = $fname; $name .= ' '; $name .= $lname;

			$sql2 = "SELECT * from images WHERE session='".$session."' AND regnum='".$regnum."' ";
			$res2 = mysqli_query($conn, $sql2);
			$row2 = mysqli_fetch_assoc($res2);


			$output = "";
			$output .= '

				<style>
						table, th, td {
  						border: 1px solid lightgrey;
  						border-collapse: collapse;
						}
						th, td {
  							padding: 20px;
 						    
						}

						.tmp{
							text-align: right; 
						}
						.tmp2{
							text-align: left; 
						}

						table.center {
 						 margin-left: auto; 
 						 margin-right: auto;
						}
				</style>

				<table class="center">
				<tr>
				<td>
					 Mail To <br><br>
					 <img src="photo/'.$row2["img"].'" style = "height: 110px; width: 110px;"  class="img-thumbnail" /><br>

					 '.$name.'
				</td>
				<td>
				<textarea rows="10" cols="50" name="msg" form="usrform" placeholder="Enter text here..." required>
				</textarea>
				<form action="sendMail2.php?param1='.$uname.' &param2='.$id.'" id="usrform" method="post">
  				<h6 style="text-align:center"><input type="submit" value="Send" style="color:green"></h6>
				</form>
				</td>
				</tr>

			';

			echo $output; return;

		}

	}
	else{
		echo "<h2 style='text-align:center;'>Connecttion failed</h2>"; return;
	}

?>

<meta http-equiv="refresh" content='0; URL="login2.php?param1=<?php echo $uname ?>'/> 

</body>
</html>