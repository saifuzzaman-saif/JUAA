
<!DOCTYPE html>
<html>
<head>
  <title>Events</title>
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
.input-container{
          padding-bottom: 30px;
          width: 100%;
          }

         .input-field {
            width:76%;
            padding: 10px;
            background:#EEEAE9;
            outline: none;
            border: 1px transparent; 
            }
         
         .input-field:focus {
           border: 1px grey;
           }
           .spt{
            border: 1px solid black;
            margin-left: 950px;
            margin-right: 165px;
            margin-top: -70px;
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
    

</div>

<br><br><br><br><br>

<div>
<?php
$id = $_POST['id'];

		$conn = mysqli_connect('localhost', 'root', '', 'project');

		if(!$conn){
			die("Connection Failed.");
		}
		else{
			//echo "Connect successfully <br>";
			$sql = "SELECT * FROM events WHERE id='".$id."' ORDER BY date ASC";
			$res = mysqli_query($conn, $sql);
			$numrows = mysqli_num_rows($res);

			if($numrows==0){
				echo "<h2 style='text-align:center'>There Is No Event!! </h2> <br>";
			}
			else{
				$i = 0;
				while($row = mysqli_fetch_assoc($res)){
				/*	echo "<p><h2>Event No: ". ++$i . "</h2>", "Host session :", "<b>".$row["host_session"]."</b>", "   Host regNo: ","<b>".$row["host_reg"]."</b><br>",  "Event Date: ", "<b>" . $row["date"] . "</b>", "     Event Time: ", "<b>". $row["time"]. "</b><br>", "  Event Title : ". $row["title"] ."<br>", "  Event Description: <br><br>". $row["des"]. "<br></p>"; */

          $id = $row["id"];
          $dept = $row["dept"];
          $batch = $row["batch"];
          $reg_close = $row["reg_close"];
          $sql2 = "SELECT * FROM eventregistrants WHERE event_id='".$id."' ";
          $res2 = mysqli_query($conn, $sql2);
          $numrows2 = mysqli_num_rows($res2);
          $cnt="";
          if($numrows2>0){
            $cnt .= 'x';
            $cnt.=$numrows2;
          }

          $tmp="Register";
          $sql3 = "SELECT * FROM members WHERE status='yes' ";
          $res3 = mysqli_query($conn, $sql3);
          $numrows3 = mysqli_num_rows($res3);
          if($numrows3==1){
            $row3 = mysqli_fetch_assoc($res3);
            $active = $row3["uname"];

            $sql4 = "SELECT * FROM eventregistrants WHERE event_id='".$id."' AND uname='".$active."' ";
            $res4 = mysqli_query($conn, $sql4);
            $numrows4 = mysqli_num_rows($res4);
            if($numrows4==1) $tmp="Registered";
          }

          $ses2 = $row["host_session"];
          $reg  = $row["host_reg"];
          $sqlt = "SELECT * FROM members where session='".$ses2."' AND regnum='".$reg."' ";
          $rest = mysqli_query($conn, $sqlt);
          $rowt = mysqli_fetch_assoc($rest);
          $name=""; $name .= $rowt["fname"]; $name .= ' '; $name .= $rowt["lname"];
					
          $output = '';
					$output .= '<style>
						table, th, td {
  						border: 1px solid black;
  						border-collapse: collapse;
						}
						th, td {
  							padding: 20px;
 						    
						}

						.tmp{
							text-align: left; 
						}

						table.center {
 						 margin-left: auto; 
 						 margin-right: auto;
						}
						</style> <table border="1px solid black" width=70% class="center">
					<tr>
					<th colspan=2>

    <pre>Event ID : '. $id .'                                                                   <button><a href="remind.php?param1='.$id.'" class="tmp">Invite</a></button> <button><a href="eventRegistration0.php?param1='.$id.' " style="text-decoration: none; color: red;">'.$tmp.'</a></button> <a href="showRegistrants.php?param1='.$id.' ">'.$cnt.'</a>
          </pre>
					</th>
					</tr>
					<tr>
					<td>Title : '.$row["title"].'<br></td>
					<th><b>Description</b></th>
					</tr>
					<tr>
					<td class="tmp">
          Host Name : '.$name.'<br>
					Host Session : '.$row["host_session"].'<br>
					Event Date : '.$row["date"].'<br>
					Event Time : '.$row["time"].'<br>
          Specific Dept: '.$dept.'<br>
          Specific Batch: '.$batch.'<br>
          <h4 style="color: red">Registration closing date: '.$reg_close.'<br>
					</td>
					<td class="tmp">
  					'.$row["des"].'<br>
  					</td>
  					</tr>
  					</table>';

					echo $output; echo "<br>";
				}
			}
		}

	?>

  </div>
</body>
</html>