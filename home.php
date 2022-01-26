<!DOCTYPE html>
<html>
<head>
  <title>home</title>
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
    

</div>

  <img class="mySlides" src="pic/ju7.jpg" style="width:100%" height="550px">
  <img class="mySlides" src="pic/ju9.jpg" style="width:100%" height="550px">
  <img class="mySlides" src="pic/ju10.jpg" style="width:100%" height="550px">


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

</div>

<div class="card">
  <img class="logo1" src="pic/logo.png">
  <h3>Jahangirnagar University Alumni Association</h3>
   
</div>
<div class="message">
  <h2>Message</h2>
  <img class="chair" src="pic/image.png">
  <p>I welcome you to the new website of Jahangirnagar University Alumni. If you are a graduate of JU who is yet to become a member of this organization, I earnestly invite you to become a member – it is easy and inexpensive. Membership enables you to enjoy being a part of the JU Alumni community and related fellowship in various forms. Take advantage of the opportunity that this organization offers to all Alumni of JU.  </p>
  <h4 style="margin-left: 630px;font-size: 18px;margin-top: 13px;">- Chairman Of JU Alumni</h4>
</div>

<div class="card1">
  <h2>Recently Occured Events</h2>
  <h4>MMH Hall Reunion-2020</h4>
  <img src="pic/mmh.jpg">
   <p>মীর‌ মশাররফ হোসেন হল পুনর্মিলনী উদযাপন পরিষদ ২০২০ কার্যকরী পরিষদের অতি গুরুত্বপূর্ণ জরুরী সভা আগামী ৮ ফেব্রুয়ারী ২০২০ শনিবার বিকাল ৪টায় আছাদগেট ফ্যামিলি ওয়ার্ল্ড এ অনুষ্ঠিত হবে।সভায় আহব্বায়ক কমিটির সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষ ভাবে অনুরোধ করা হলো।শেখ মনোয়ার হোসেন সদস্য সচিব প্রচারণায়, রিয়াজ-উস-সেলিম আহব্বায়ক, প্রচার উপ কমিটি।…

 <a href="News.php" style="text-decoration: none"> Read More</a> </p>

  <h4>Jahangirnagar Alumni Day</h4>
  <img src="pic/day.jpg">
  <p>গতকাল ২৭.১১.২০১৯ তারিখ বুধবার সন্ধ্যা ৫:৩০ টায় ঢাকার মিরপুর রোডে অবস্হিত ফ্যামিলি ওয়ার্ল্ড কনভেনশন সেন্টারে জাহাঙ্গীরনগর বিশ্ববিদ্যালয় এ্যালামনাই এসোসিয়েশনের কার্যনির্বাহী কমিটির জরুরি সভায় নিম্নরুপ সিদ্ধান্তসমূহ গ্রহণ করা হয়:
ক. জাহাঙ্গীরনগর বিশ্ববিদ্যালয় ক্যাম্পাসে বর্তমানে অস্বাভাবিক ও অস্হীতিশীল পরিস্হিতি বিরাজমান থাকায় ২৫ ডিসেম্বর ২০১৯ তারিখে অনুষ্ঠিতব্য এ্যালামনাইডে মিলনমেলা আপাতত: স্হগিত করা হলো।পরবর্তীতে সুবিধাজনক সময়ে মিলন মেলার আয়োজন করা হবে।... <a href="News.php">Read more</a> </p>


 
  
</div>

<div class="event">
  <h2>For UpComing Event Informations </h2><br>
  <button type="button" class="btn"><a href="ShowEvents.php"> Click Here!</a></button>  <br><br>
  <h2>For Catagory Wise Member Search </h2><br>
  <button type="button" class="btn"><a href="contact4.php"> Click Here!</a></button>  
</div>
</div>
<div class="card"><br><br>
  <div class="row">
  <div class="column">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
   <a class="nav-link active "  id="notice-tab" data-toggle="tab" href="News.php"  role="tab" aria-controls="notice" aria-selected="true"><i class="fa fa-newspaper-o" style="font-size:20px"></i> NEWS</a>
                    </li>
                </ul><br>
    <div class="card2">
      <p><i style="font-size:24px" class="fa">&#xf2b9;</i><small>May 14, 2020</small><br>
 <a href="covid.php" > Fund Raising for supporting current students due to corona issue</a><br><br>
<i style="font-size:24px" class="fa">&#xf2b9;</i><small>Sep 09, 2019</small><br>
 <a href="treat1.php"> Fund raising for Zahed(IIT 6th)</a><br><br>
 <i style="font-size:24px" class="fa">&#xf2b9;</i><small>May 29,2019</small><br>
 <a href="iftar.php"> Alumni Iftar Party-2019
</p>
    </div>
  </div>

  <div class="column">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
   <a class="nav-link active "  id="notice-tab" data-toggle="tab" href="News.php"   role="tab" aria-controls="notice" aria-selected="true"><i class="fa fa-envelope-open-o" style="font-size:20px" ></i> Event</a>
                    </li>
                </ul><br>
    <div class="card2" >
      
<br>
 <i style="font-size:24px" class="fa">&#xf2b9;</i><small>May 29,2020<br></small>
 <a href="treat2.php"> Treatment Fund for Tania's (IIT 05) Father</a><br><br>

<i style="font-size:24px" class="fa">&#xf2b9;</i><small>April 14, 2019</small><br>
 <a href="online.php"> Online Event Registration for 3rd Reunion of JU IIT ALUMNI Association</a><br><br>


<i style="font-size:24px" class="fa">&#xf2b9;</i><small>Sep 07, 2019</small><br>
 <a href="treat3.php"> Treatment Fund for Mahmud Sir</a></p>
    </div>
  </div>
  
  <div class="column">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
   <a class="nav-link active "  id="notice-tab" data-toggle="tab" href="News.php"  
    role="tab" aria-controls="notice" aria-selected="true"><i class="fa fa-calendar" style="font-size:20px" ></i> Notice</a>
                    </li>
                </ul><br>
    <div class="card2">
      <p><i style="font-size:24px" class="fa">&#xf2b9;</i><small>Jun 14, 2020</small><br>
<a href="annual.php"> Resolution of 3rd AGM 2019</a><br><br>


<i style="font-size:24px" class="fa">&#xf2b9;</i><small>Apr 09, 2018</small><br>
<a href="annual.php"> 4th General Meeting Summary</a>




</p>
    </div>
  </div>
</div></div>
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