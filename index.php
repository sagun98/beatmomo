<!DOCTYPE html>
<head>
	<title>MOMO and Curry</title>
	
	<link rel="stylesheet" href="css/demo.css" />
	
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600' rel='stylesheet' type='text/css'>
 

	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

	<script>
	function validateForm(x) {
		    var atpos = x.indexOf("@");
		    var dotpos = x.lastIndexOf(".");
		    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		       return false;
		    }
		    return true;
		}
		$(document).ready(function() {
			
			$("#nl-form").submit(function( event ) {
				
			  if($("#name").val() == "") {
			  	alert("Enter your name!!");
			 	event.preventDefault();
			  } else if ($("#email").val() == "") {
			  	alert("Enter your email!");
			 	event.preventDefault();
			  } else if (!validateForm($("#email").val())) {
			  	alert("Enter valid email!");
			 	event.preventDefault();

			  }else if($("#phone").val() == "") {
			  	alert("Enter your phone number!!");
			 	event.preventDefault();
			  }


			});
		}); 
		</script>
			
	
	
		
	<div class="timer">


	<!Timer>
	<style type="text/css">
.numbers {
    border-style: ridge;    /* options are none, dotted, dashed, solid, double, groove, ridge, inset, outset */
    border-width: 2px;
    border-color: #666666;  /* change the border color using the hexadecimal color codes for HTML */
    background: #222222;    /* change the background color using the hexadecimal color codes for HTML */
    padding: 2px 0px;
    width: 55px;
    text-align: center; 
    font-family: Arial; 
    font-size: 28px;
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    font-style: normal;   /* options are normal or italic */
    color: #FFFFFF;       /* change color using the hexadecimal color codes for HTML */
}
.title {    /* the styles below will affect the title under the numbers, i.e., “Days”, “Hours”, etc. */
    border: none;    
    padding: 0px;
    width: 55px;
    text-align: center; 
    font-family: Arial; 
    font-size: 10px; 
    font-weight: normal;  /* options are normal, bold, bolder, lighter */
    color: #DDDDDD;       /* change color using the hexadecimal color codes for HTML */
    background: transparent;    /* change the background color using the hexadecimal color codes for HTML */
}
#table {
    width: 400px;
    border: none;    /* options are none, dotted, dashed, solid, double, groove, ridge, inset, outset */
    margin: 0px auto;
    position: relative;    /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;        /* change to position the timer */
    left: 0px;        /* change to position the timer; delete this property and it's value to keep timer centered on page */
}
</style>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
on 10/20/2007 to a new format, and 1/10/2010 to include
time zone offset.
*/

var current="Registration timeout!";   //-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2016;    //-->Enter the count down target date YEAR
var month=8;      //-->Enter the count down target date MONTH
var day=21;       //-->Enter the count down target date DAY
var hour=18;      //-->Enter the count down target date HOUR (24 hour clock)
var minute=38;    //-->Enter the count down target date MINUTE
var tz=-5;        //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//    DO NOT CHANGE THE CODE BELOW!
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
    theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {todayy+=1900;}
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById('count2').innerHTML=current;
        document.getElementById('count2').style.display="block";
        document.getElementById('count2').style.width="390px";
        document.getElementById('dday').style.display="none";
        document.getElementById('dhour').style.display="none";
        document.getElementById('dmin').style.display="none";
        document.getElementById('dsec').style.display="none";
        document.getElementById('days').style.display="none";
        document.getElementById('hours').style.display="none";
        document.getElementById('minutes').style.display="none";
        document.getElementById('seconds').style.display="none";
        document.getElementById('spacer1').style.display="none";
        document.getElementById('spacer2').style.display="none";
        return;
    }
    else {
        document.getElementById('count2').style.display="none";
        document.getElementById('dday').innerHTML=dday;
        document.getElementById('dhour').innerHTML=dhour;
        document.getElementById('dmin').innerHTML=dmin;
        document.getElementById('dsec').innerHTML=dsec;
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}
</script>


</head>
<body onload="countdown(year,month,day,hour,minute)" style="
	background-image: url(cartoon.png);
    background-repeat: no-repeat;
    background-position: bottom right;
    z-index: -1;
    background-size: 674px 500px;
    background-color: #333">





<?php
	include ("security.php");
	include ("connect.php");


if (!empty($_POST)) {
	if (isset($_POST['name'],$_POST['email'],$_POST['phone'])){

		$name       = strtolower(trim($_POST['name']));
		$email      = strtolower(trim($_POST['email']));
		$phone = strtolower(trim($_POST['phone']));


	
			$insert= $db->prepare("INSERT INTO players(name,email,phone) VALUES (?,?,?)");
			$insert->bind_param ('sss', $name,$email,$phone);

			
			
			
		}
	}


?>

<table id="table" border="0">
    <tr>
        <td align="center" colspan="6"><div class="numbers" id="count2" style="padding: 10px; "></div></td>
    </tr>
    <tr id="spacer1">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="numbers" id="dday"></div></td>
        <td align="center" ><div class="numbers" id="dhour"></div></td>
        <td align="center" ><div class="numbers" id="dmin"></div></td>
        <td align="center" ><div class="numbers" id="dsec"></div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
    <tr id="spacer2">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="title" id="days">Days</div></td>
        <td align="center" ><div class="title" id="hours">Hours</div></td>
        <td align="center" ><div class="title" id="minutes">Minutes</div></td>
        <td align="center" ><div class="title" id="seconds">Seconds</div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
</table>

  </div>
<!timer>

	<div class="container">
		
			<header>
<div class="big">
	<div class="logo"><img src="img/momo.png" style="width:150px;height:135px;float: left;margin-left: 94px;">
		<div class="topic"><h1>MoMo and Curry</h1> </div> 	
			<div class="vs"><h1><span>Man Vs MoMO</span></h1></div>
				</div> 
					</div>
						</div>
				
				
				
			</header>
			<div class="main clearfix">
				<div class="box" >
					<form id="nl-form" class="nl-form" method="post" >
						
						<input type="text" name="name" id="name" placeholder="Name" data-subline="For example: <em>John Madison</em>"/>

						<br />

						<input type="text" id="email" name="email" placeholder="Email" data-subline="For example: <em>sagun_maharjan@hotmail.com</em> or <em>jack69@gmail.com</em>" class="required email"/>

		 				<br/>

		 				<input type="text" name="phone" id="phone" placeholder="Phone Number" data-subline="For example: <em>6172831234</em> "/>
						
						<div class="nl-submit-wrap">
							<button class="nl-submit" type="submit" id="submit">Submit</button>
							<?php if (!empty($_POST)): ?>
								<?php if ($insert->execute()): ?>
									<h3 class="sucess"> Sucessfully Registered !!</h3>
								<?php endif ?>
							<?php endif ?>
						 
						 
						</div>
						<div class="nl-overlay"></div>
					</form>


				</div>
				
				<div class="gap">
				</div>

				

			</div>
		</div>
	<!div class="cartoon">
<!img src="img/cartoon.png" style="height: 500px;width: 590px;">
<!/div>

	
	<div class="footer">
			<h3 class="info">More info @ momoncurry.com</h3>
	</div>


	<script src="js/nlform.js"></script>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
<a href="admin.php">Admin</a>
	</body>
	</html>