<?php
require_once('config.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0050)http://www.aparnaconstructions.com/acl/Contact.php -->
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Contact Aparna Construction &amp; Property Developer Company Hyderabad </title>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<meta name="description" content=" Contact Aparna Real Estate, Residential Villas &amp; Property developer company for attractive flats, villas, residential homes for sale in Hyderabad. Creative interiors and architecture for healthy, luxury and happy life.">
<meta name="keywords" content=" Aparna construction company, Aparna real estate company, Aparna property developer, Aparna builder, Aparna realtor, Aparna flats for sale, Aparna construction company Hyderabad, Aparna Constructions, Aparna property builder, contact Aparna constructions.">

    <link rel="shortcut icon" href="http://www.aparnaconstructions.com/assets/ico/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mystylesc.css" rel="stylesheet">
	<link href="css/common_manchuri.css" rel="stylesheet">
  	<script src="js/jquery.min.js"></script>
  </head>

  <body>
		<script type="text/javascript">
	 
 

	 function callLocator()
	 {	
		alert('hai');
		return false;
		var type=$("#typeofp").val();
		var loc=$("#locationofp").val();
		//alert(loc);
		var project=$('#projectname').val();
		//alert(project);
		if(loc=='' && type!='' && project=='')
		 {
			alert('Please select Location');
			return false;
		 }
		 else 
		 if(loc!='' && type=='' && project=='')
		 {
			alert('Please select Type');
			return false;
		 }
		 else 
		if(loc!='' && type!='' && project=='')
		 {
			window.location="./Locator.php?type="+type+"&location="+loc;
			
		 }
		 else if(loc=='' && type=='' && project!='')
		 {
			window.location="./Locator.php?pid="+project;
		 }
		  else 
		 if(loc!='' && type=='' && project!='')
		 {
			window.location="./Locator.php?pid="+project;
		 }
		 else 
		 if(loc!='' && type=='' && project!='')
		 {
			window.location="./Locator.php?pid="+project;
		 }
		  else if(loc!='' && type!='' && project!='')
		 {
			window.location="./Locator.php?type="+type+"&location="+loc;
		 }
		 else if(loc=='' && type=='' && project=='')
		 {
			alert('Please select Project Or Browse by your Choice');
			return false;
		 }
	 }
	 
	 function validateemail()
	{	
		var x=$("#email").val();
		if(x=='')
		{
		return 'false';
		}else{
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			  {
			  //alert("Not a valid e-mail address");
			  return 'false';
			  }
		}
	}
	 
	 function storedtls()
	 {	

		var name=$("#name").val();
		var email=$("#email").val();
		var project=$("#projectname").val();
		var country=$("#country").val();
		var city=$("#city").val();
		var mobile1=$("#mct1").val();
		var mobile2=$("#mct2").val();
		var toi="";
		var dtls=$("#dtls").val();
		var hearing=$("#hearing").val();
		var timeframe=$("#timeframe").val();

		var emailvalid='true';
		var mobilevalid='true';
		emailvalid=validateemail();
		//alert(email+'-'+name+'-'+dtls+'-'+project+'-'+country+"-"+city+"-"+mobile1+mobile2+"-"+hearing+"-"+timeframe+""+toi);
/*
		if(mobile1.length>5)
		{
			mobilevalid='false';
		}
		if(mobile2.length!=10)
		{
			mobilevalid='false';
		}
		if((mobile1+mobile2).length>14)
		{
			mobilevalid='false';
		}
		if(isNaN(mobile2))
		{
			mobilevalid='false';
		}

			//alert(dtls.length)
			if(name=='')
			{
				$("#errordiv").html('<B style="color:red;">Please enter your Name</B>');
				$("#name").focus();
				return false;
			}
			else if(project=='')
			{
				$("#errordiv").html('<B style="color:red;">Please select project Name</B>');
				$("#projectname").focus();
				return false;
			}
			else if(city=='')
			{
				$("#errordiv").html('<B style="color:red;">Please enter City Name</B>');
				$("#city").focus();
				return false;
			}
			else if(mobile1=='')
			{
				$("#errordiv").html('<B style="color:red;">Please Enter Phone Number</B>');
				$("#mct1").focus();
				return false;
			}else if(mobile2=='')
			{
				$("#errordiv").html('<B style="color:red;">Please Enter Phone Number</B>');
				$("#mct2").focus();
				return false;
			}else if(mobilevalid=='false')
			{
				$("#errordiv").html('<B style="color:red;">Phone Number Not Valid</B>');
				$("#mct1").focus();
				return false;
			}
			else if(email=='')
			{
				$("#errordiv").html('<B style="color:red;">Please enter email address</B>');
				$("#email").focus();
				return false;
			}
			else if(emailvalid=='false')
			{	
				
				$("#errordiv").html('<B style="color:red;">Email address is not valid</B>');
				$("#email").focus();
				return false;
			}
			else
		 	{
				$("#errordiv").html('<B style="color:green;">Please wait your query is submitting....</B>');
			}
*/
			
		$.ajax({
			type:"GET",
			datatype:"JSON",
			
			
            url:"storedtls.php?email="+email+"&name="+name+"&dtls="+dtls+"&project="+project+"&country="+country+"&city="+city+"&phone="+mobile1+mobile2+"&hearing="+hearing+"&timeframe="+timeframe+"&toi="+toi,
           
				success:function(data)
				{
					alert(data);
					
					document.getElementById('email').value='';
					document.getElementById('name').value='';
					document.getElementById('dtls').value='';
					document.getElementById('projectname').value='';
					document.getElementById('city').value='';
					document.getElementById('mct2').value='';
					
					$("#errordiv").html('<div style="color:green; font-weight:bold;">Your details successfully submitted. We will get back to you soon!</div>');
					
				
				},
				error:function(xhr)
			{
				alert(xhr.response);
				}
			
			});
			
	 
	 }
	 
	 
        $(document).ready(function () {
          
		  $("#foo3").carouFredSel({
			responsive	: true,
			scroll		: 1,
			items		: {
				visible		: 5,
				width		: 200
			}
		});

			$('#dtls').keydown(function(){
			descCount();
			});
		
		  $('#dtls').keyup(function(){
			descCount();
			});
		descCount();

		function descCount()
			{
				var limit = parseInt($('#dtls').attr('maxlength'));  
				var text = $('#dtls').val();
				var chars = text.length;  
				$("#descCount").text(chars +" of "+limit +" characters");
			}
            $("#fsLogoImg123").click(function ()
			 {
               $("#mappopover").slideToggle("slow");
			   $("#hide_row_on_map").slideToggle("slow");
			   $("#fdiv").slideToggle("slow");
            });
			 $("#fs1").click(function () { 
               $("#mappopover").slideToggle();
			   $('.spane').jScrollPane({
				   showArrows:false,
				   animateScroll: true,
				   animateDuration : 100
				 });
			   $("#hide_row_on_map").slideToggle("slow");
			   $("#fdiv").slideToggle("slow");
			   if($('#popstatus').val()=='0')
			   {
				//$('#popstatus').val()=1;
				 //alert($('#popstatus').val());
				//$("#mappopover").slideUp("slow");
				
			   }
			   else if($('#popstatus').val()=='1')
			   {
				//$('#popstatus').val()=0;
				$("#mappopover").slideDown("slow");
				$("#fdiv").slideToggle("slow");
				
			   }
            });
			
			$("#closediv").click(function () { 
			//	$('#popstatus').val()=0;
			$("#hide_row_on_map").slideToggle("slow");
               $("#mappopover").slideToggle("slow");
			   $("#fdiv").slideToggle("slow");
            });
            
         $(".social-plugins").mouseover(function () {
		 $(".fb").hide();
		$(".tw1").hide();
		$(".yt1").hide();
		$(".ml1").hide();
        $(".social-plugins").show();
            });
		$(".social-plugins").mouseout(function () {
        $(".social-plugins").hide();
		$(".fb").show();
		$(".tw1").show();
		$(".yt1").show();
		$(".ml1").show();
            });
		
		$(".smb-list-like").mouseover(function () { 
		$(".fb").hide();
		$(".tw1").hide();
		$(".yt1").hide();
		$(".ml1").hide();
        $(".social-plugins").show();
            });
		$(".smb-list-like").mouseout(function () {
        $(".social-plugins").hide();
		$(".fb").show();
		$(".tw1").show();
		$(".yt1").show();
		$(".ml1").show();
            });
		
			
			
			 $(".social-plugins1").mouseover(function () {
        $(".social-plugins1").show();
            });
		$(".social-plugins1").mouseout(function () {
        $(".social-plugins1").hide();
            });
		
		$(".smb-list-like1").mouseover(function () { 
        $(".social-plugins1").show();
            });
		$(".smb-list-like1").mouseout(function () {
        $(".social-plugins1").hide();
            });
			
        });

var countries = new Array();
countries['Afghanistan']='93';
countries['Albania']='355';
countries['Algeria']='213';
countries['American Samoa']='1684';
countries['Andorra']='376';
countries['Angola']='244';
countries['Anguilla']='1264';
countries['Norfolk Island']='672';
countries['Antigua and Barbuda']='1268';
countries['Argentina']='54';
countries['Armenia']='374';
countries['Aruba']='297';
countries['Cocos (Keeling) Islands']='61';
countries['Austria']='43';
countries['Azerbaijan']='994';
countries['Bahamas']='1242';
countries['Bahrain']='973';
countries['Bangladesh']='880';
countries['Barbados']='1246';
countries['Belarus']='375';
countries['Belgium']='32';
countries['Belize']='501';
countries['Benin']='229';
countries['Bermuda']='1441';
countries['Bhutan']='975';
countries['Bolivia']='591';
countries['Bosnia and Herzegovina']='387';
countries['Botswana']='267';
countries['Brazil']='55';
countries['British Indian Ocean Territory']='246';
countries['British Virgin Islands']='1284';
countries['Brunei']='673';
countries['Bulgaria']='359';
countries['Burkina Faso']='226';
countries['Burma (Myanmar)']='95';
countries['Burundi']='257';
countries['Cambodia']='855';
countries['Cameroon']='237';
countries['United States']='1';
countries['Cape Verde']='238';
countries['Cayman Islands']='1345';
countries['Central African Republic']='236';
countries['Chad']='235';
countries['Chile']='56';
countries['China']='86';
countries['Colombia']='57';
countries['Comoros']='269';
countries['Cook Islands']='682';
countries['Costa Rica']='506';
countries['Croatia']='385';
countries['Cuba']='53';
countries['Cyprus']='357';
countries['Czech Republic']='420';
countries['Democratic Republic of the Congo']='243';
countries['Denmark']='45';
countries['Djibouti']='253';
countries['Dominica']='1767';
countries['Dominican Republic']='1809';
countries['Ecuador']='593';
countries['Egypt']='20';
countries['El Salvador']='503';
countries['Equatorial Guinea']='240';
countries['Eritrea']='291';
countries['Estonia']='372';
countries['Ethiopia']='251';
countries['Falkland Islands']='500';
countries['Faroe Islands']='298';
countries['Fiji']='679';
countries['Finland']='358';
countries['France']='33';
countries['French Polynesia']='689';
countries['Gabon']='241';
countries['Gambia']='220';
countries['West Bank']='970';
countries['Georgia']='995';
countries['Germany']='49';
countries['Ghana']='233';
countries['Gibraltar']='350';
countries['Greece']='30';
countries['Greenland']='299';
countries['Grenada']='1473';
countries['Guam']='1671';
countries['Guatemala']='502';
countries['Guinea']='224';
countries['Guinea-Bissau']='245';
countries['Guyana']='592';
countries['Haiti']='509';
countries['Italy']='39';
countries['Honduras']='504';
countries['Hong Kong']='852';
countries['Hungary']='36';
countries['Iceland']='354';
countries['India']='91';
countries['Indonesia']='62';
countries['Iran']='98';
countries['Iraq']='964';
countries['Ireland']='353';
countries['United Kingdom']='44';
countries['Israel']='972';
countries['Ivory Coast']='225';
countries['Jamaica']='1876';
countries['Japan']='81';
countries['Jordan']='962';
countries['Russia']='7';
countries['Kenya']='254';
countries['Kiribati']='686';
countries['Serbia']='381';
countries['Kuwait']='965';
countries['Kyrgyzstan']='996';
countries['Laos']='856';
countries['Latvia']='371';
countries['Lebanon']='961';
countries['Lesotho']='266';
countries['Liberia']='231';
countries['Libya']='218';
countries['Liechtenstein']='423';
countries['Lithuania']='370';
countries['Luxembourg']='352';
countries['Macau']='853';
countries['Macedonia']='389';
countries['Madagascar']='261';
countries['Malawi']='265';
countries['Malaysia']='60';
countries['Maldives']='960';
countries['Mali']='223';
countries['Malta']='356';
countries['Marshall Islands']='692';
countries['Mauritania']='222';
countries['Mauritius']='230';
countries['Mayotte']='262';
countries['Mexico']='52';
countries['Micronesia']='691';
countries['Moldova']='373';
countries['Monaco']='377';
countries['Mongolia']='976';
countries['Montenegro']='382';
countries['Montserrat']='1664';
countries['Western Sahara']='212';
countries['Mozambique']='258';
countries['Namibia']='264';
countries['Nauru']='674';
countries['Nepal']='977';
countries['Netherlands']='31';
countries['Netherlands Antilles']='599';
countries['New Caledonia']='687';
countries['New Zealand']='64';
countries['Nicaragua']='505';
countries['Niger']='227';
countries['Nigeria']='234';
countries['Niue']='683';
countries['North Korea']='850';
countries['Northern Mariana Islands']='1670';
countries['Svalbard']='47';
countries['Oman']='968';
countries['Pakistan']='92';
countries['Palau']='680';
countries['Panama']='507';
countries['Papua New Guinea']='675';
countries['Paraguay']='595';
countries['Peru']='51';
countries['Philippines']='63';
countries['Pitcairn Islands']='870';
countries['Poland']='48';
countries['Portugal']='351';
countries['Qatar']='974';
countries['Republic of the Congo']='242';
countries['Romania']='40';
countries['Rwanda']='250';
countries['Saint Barthelemy']='590';
countries['Saint Helena']='290';
countries['Saint Kitts and Nevis']='1869';
countries['Saint Lucia']='1758';
countries['Saint Martin']='1599';
countries['Saint Pierre and Miquelon']='508';
countries['Saint Vincent and the Grenadines']='1784';
countries['Samoa']='685';
countries['San Marino']='378';
countries['Sao Tome and Principe']='239';
countries['Saudi Arabia']='966';
countries['Senegal']='221';
countries['Seychelles']='248';
countries['Sierra Leone']='232';
countries['Singapore']='65';
countries['Slovakia']='421';
countries['Slovenia']='386';
countries['Solomon Islands']='677';
countries['Somalia']='252';
countries['South Africa']='27';
countries['South Korea']='82';
countries['Spain']='34';
countries['Sri Lanka']='94';
countries['Sudan']='249';
countries['Suriname']='597';
countries['Swaziland']='268';
countries['Sweden']='46';
countries['Switzerland']='41';
countries['Syria']='963';
countries['Taiwan']='886';
countries['Tajikistan']='992';
countries['Tanzania']='255';
countries['Thailand']='66';
countries['Timor-Leste']='670';
countries['Togo']='228';
countries['Tokelau']='690';
countries['Tonga']='676';
countries['Trinidad and Tobago']='1868';
countries['Tunisia']='216';
countries['Turkey']='90';
countries['Turkmenistan']='993';
countries['Turks and Caicos Islands']='1649';
countries['Tuvalu']='688';
countries['Uganda']='256';
countries['Ukraine']='380';
countries['United Arab Emirates']='971';
countries['Uruguay']='598';
countries['US Virgin Islands']='1340';
countries['Uzbekistan']='998';
countries['Vanuatu']='678';
countries['Venezuela']='58';
countries['Vietnam']='84';
countries['Wallis and Futuna']='681';
countries['Yemen']='967';
countries['Zambia']='260';
countries['Zimbabwe']='263';
function countryCode(id,cid)
{
	document.getElementById(id).value='+'+countries[document.getElementById(cid).value];
}


		 
		</script>
   

      <!-- Main component for a primary marketing message or call to action -->
<div>
<link rel="shortcut icon" href="http://www.aparnaconstructions.com/acl/images/favicon.png">
<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31867223-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">

function openproject(path)
		{	
			window.open(path,"_blank");
		
		}
</script>
	<?php require_once('header.php'); ?>
	  <div class="row removepadding">
	  <div class="col-xs-12 col-sm-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-12 removepadding ov">
	  <div style="width:100%;height:208px;">
	  <img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" src="images/aboutImage.jpg" style="width:100%;height:208px;">
	  <div class="row"><div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 " style="top:150px;position:absolute;  font-family: Gotham Book,regular;
    font-size: 42px;color:#FFFFFF;">
	  CONTACT	  </div></div>
	  </div>
	  <div style="width:100%;height:278px;display:none;" id="fdiv">
	  </div>
		</div>
		
		
      </div>
	  
	
	  
	  
	 

  <div id="mappopover">
<div class="col-md-11 col-xs-11 col-sm-11 col-lg-11 col-xs-offset-1 col-sm-offset-1 col-md-offse-1 col-lg-offset-1 removepadding" style="position:relative;">

<input type="hidden" value="0" id="popstatus">
<section id="mapWrap">
<div class="row" id="mappopover1" style="width:100%;">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="projinhyd">
<div style="height:80px;text-align:left;margin-top:40px;color:#ffffff;font-size:12px !important;margin-right:10px !important;">
<table>
<tbody><tr><td width="120px"><b>Projects in<b></b></b></td></tr>
<tr><td width="120px" style="font-size:18px !important;">
<div style="width:128px;margin-right:50px;  height:25px !important; overflow:hidden; font-size:18px;">
<!-- <select  onchange="citymap()" class="dropdown_home" id="city"> -->
HYDERABAD<!-- </select> -->

</div>
</td></tr>
<tr>
	<td style="border-bottom:1px solid #9EB5C2;border-top:1px solid #9EB5C2; height:30px; width:150px;">
		<b>Completed</b>
	</td>
	<td style="border-bottom:1px solid #9EB5C2;border-top:1px solid #9EB5C2; height:30px; width:150px;margin-left:-30px;">
		<b>Now On Sale</b>
	</td>
</tr>
</tbody></table>

</div>
<div id="drop_list" class="spane" style="height:350px;text-align:left;margin-top:5px;color:#ffffff;font-size:12px !important;overflow:hidden !important;">
<ul id="completed" class="mapList">
<li class="plist" id="l_17" onclick="openproject(&#39;projectcompleted.php?pid=17&#39;)">Aparna HillPark Boulevard<div id="s_17" class="mapBox">
	
	<table>
		<tbody><tr>
			<td style="padding:8px;width:100%;">
				<img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" src="./2230307781_fullscreen_image_resized.jpg" width="110px" height="70px">
			</td><td>
		</td></tr>
		<tr>
			<td style="padding:5px;text-align:left !important;padding-left:10px !important;">
				<a href="javascript:void(0)" style="color:#000000 !important;text-align:left !important;color:#465366;">Aparna HillPark Boulevard<br>Chandanagar</a>
			</td>
		</tr>
		<tr>
			<td style="padding:5px;text-align:left !important;padding-left:10px ! important;">4 BHK</td>
		</tr>
	</tbody></table>
	</div></li>
	</ul>


	<ul class="mapList" id="ongoing" style="float:left; width:161px; position:absolute; left:174px;">
		<li class="plist" id="l_18" onclick="openproject(&#39;project.php?pid=18&#39;) ">Aparna CyberZon<div id="s_18" class="mapBox">
		<table>
			<tbody>
				<tr><td style="padding:8px;width:100%;"><img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" src="./1506635830humanview.jpg" width="110px" height="70px"></td><td></td></tr>
				<tr><td style="padding:5px;text-align:left !important;padding-left:10px !important;"><a href="javascript:void(0)" style="color:#000000 !important;text-align:left !important;color:#465366;" target="_blank">Aparna CyberZon<br>Nallagandla / Gachibowli</a></td></tr>
				<tr><td style="padding:5px;text-align:left !important;padding-left:10px ! important;">2 BHK/3 BHK</td></tr>
			</tbody>
		</table>
	</div></li>
</ul>

</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="height:480px;position:relative;margin-top:-10px;">
<div><!-- <img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" class="point-img" src="./pointers1.png" style="position:absolute;top:10px;width:250px;height:50px;z-index:100000;"> --></div>
<a style="width:576px;position:relative;float:right;" id="popmap">
<img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" src="./images/map4.png" height="475px" style="float:right;margin-top:14px;"></a>
</div></div>
<div id="closediv"><p id="closeMap" class="tk tk2">Close</p></div>
</section>


<!--div id="markerActive" style="display: none; top: 259px; left: 1123.5px;"></div-->

</div>
	<script type="text/javascript" src="./jquery.mousewheel.js"></script>
    <script type="text/javascript" src="./jquery.jscrollpane.js"></script>	
</div>	  </div>
	
<div class="row" id="hide_row_on_map">	
	
	<div class="row" id="aboutContainer">
		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1" id="aboutContainerNav">
			<ol class="breadcrumb" style="background:#fff;padding:0px;font-size:14px;font-family:Gotham Book, regular;">
			  <li><a href="http://www.aparnaconstructions.com/acl/" style="color:#000000;text-decoration:none;">HOME</a></li>
			  <li style="color:#8c8c8c;">CONTACT US</li>
			</ol>
		</div>
		<!--div class="col-md-1" style="height:68px;border-bottom:1px solid #ccc"></div-->
		 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5  removepadding" style="background:#fff;height:68px;border-bottom:1px solid #ccc;">
	   <div class="select-dest2 vam" style="float:right;">
			
						
			
			
	   </div>
	   
	   </div>	<!--<div class="col-md-4" style="border-bottom:1px #CCCCCC solid;height:68px"></div>-->
	</div>
	<div class="row">
	<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
		<div class="row">


					<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">

				<span style="border-right:#e5e5e5 1px solid; border-left:1px solid #e5e5e5; padding:10px 30px; line-height:2.6; border-bottom:#fff solid 1px; z-index:9999; position:relative; margin-left: -50px;"><b>Write to Us</b></span><br>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border:solid 1px #e5e5e5;margin-top:0px;margin-left:-98px;margin-bottom:20px;">
				<div style="float:right; font-size:11px; line-height: 26px;">

				<span style="color:#ff0000">*</span> Required &nbsp;&nbsp;
				</div>
				<div class="col-mod-12">
				<!--p style="margin-left:70px;margin-top:20px;border-top:1px solid #8c8c8c;"><span style="color:#c35a17;padding-left:200px;padding-top:50px;">*</span> Required</p-->
				<p style="padding-left:20px;margin-top:26px;border-top:1px solid #e5e5e5;border-bottom:1px solid #e5e5e5;padding-top:10px;padding-bottom:10px;">How can we assist you?</p><div id="errordiv" style="margin:5px;"></div>
				<div id="namediv">	
			<p style="padding-left:20px;margin:20px 0px 0px -13px;"><span style="color:#ff0000;">* </span>Name:
				<br><input type="text" name="name" id="name" style="border:solid 1px #E6E6E6; height:30px; width:90%; margin-left:5px;">
			</p></div>	<p></p>

			<div id="type">	
			<p style="padding-left:20px;margin:20px 0px 0px -13px;"><span style="color:#ff0000;">* </span>Select&nbsp;Project
				<select id="projectname" style="width:90%; margin:0px;" class="dropdown_locator">
				<option value="">Select Project</option>
				<option value="18">Aparna CyberZon</option><option value="17">Aparna HillPark Boulevard</option><option value="16">Kanopy Jasmine</option><option value="15"> Aparna HillPark Gardenia</option><option value="19">Aparna Aura</option><option value="56">Aparna Sarovar Grande</option><option value="74">Aparna Sarovar</option><option value="75">Aparna County</option><option value="76">Aparna Shangri-la</option><option value="77">Aparna Cyber County</option><option value="78">Aparna Towers</option><option value="79">Aparna Kanopy Tulip</option><option value="80">Aparna Palm Meadows</option><option value="81">Aparna Hights</option><option value="83">Chandradeep</option><option value="84">Senor Valley</option><option value="111">Aparna HillPark LakeBreeze</option><option value="113">Aparna HillPark Avenues</option><option value="114">Aparna Kanopy Lotus</option><option value="115">Aparna CyberLife</option><option value="116">Aparna Elixir</option><option value="117">Oosmans Everest</option><option value="118">Aparna Elina</option><option value="119">Aparna Western Meadows</option>				</select>
			</p></div>	<p></p>
			<div id="type">	
			<p style="padding-left:20px;margin:20px 0px 0px -13px;"><span style="color:#ff0000;">* </span>Select&nbsp;Country
			<select name="dropdownlist" class="dropdown_locator" id="country" style="width:90%; margin:0px;" onchange="countryCode(&#39;mct1&#39;,&#39;country&#39;);">
						<option value="Afghanistan">Afghanistan</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="American Samoa">American Samoa</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Norfolk Island">Norfolk Island</option>
						<option value="Antigua and Barbuda">Antigua and Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Brazil">Brazil</option>
						<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
						<option value="British Virgin Islands">British Virgin Islands</option>
						<option value="Brunei">Brunei</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burma (Myanmar)">Burma (Myanmar)</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="United States">United States</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Cayman Islands">Cayman Islands</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Cook Islands">Cook Islands</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Falkland Islands">Falkland Islands</option>
						<option value="Faroe Islands">Faroe Islands</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="French Polynesia">French Polynesia</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="West Bank">West Bank</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Greece">Greece</option>
						<option value="Greenland">Greenland</option>
						<option value="Grenada">Grenada</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-Bissau">Guinea-Bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Italy">Italy</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India" selected="selected">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="Israel">Israel</option>
						<option value="Ivory Coast">Ivory Coast</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Russia">Russia</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="Serbia">Serbia</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Laos">Laos</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libya">Libya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macau">Macau</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mayotte">Mayotte</option>
						<option value="Mexico">Mexico</option>
						<option value="Micronesia">Micronesia</option>
						<option value="Moldova">Moldova</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Western Sahara">Western Sahara</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Namibia">Namibia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Netherlands Antilles">Netherlands Antilles</option>
						<option value="New Caledonia">New Caledonia</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Niue">Niue</option>
						<option value="North Korea">North Korea</option>
						<option value="Northern Mariana Islands">Northern Mariana Islands</option>
						<option value="Svalbard">Svalbard</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau">Palau</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Pitcairn Islands">Pitcairn Islands</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Qatar">Qatar</option>
						<option value="Republic of the Congo">Republic of the Congo</option>
						<option value="Romania">Romania</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Saint Barthelemy">Saint Barthelemy</option>
						<option value="Saint Helena">Saint Helena</option>
						<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
						<option value="Saint Lucia">Saint Lucia</option>
						<option value="Saint Martin">Saint Martin</option>
						<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
						<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome and Principe">Sao Tome and Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="South Korea">South Korea</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syria">Syria</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Timor-Leste">Timor-Leste</option>
						<option value="Togo">Togo</option>
						<option value="Tokelau">Tokelau</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad and Tobago">Trinidad and Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="Uruguay">Uruguay</option>
						<option value="US Virgin Islands">US Virgin Islands</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Wallis and Futuna">Wallis and Futuna</option>
						<option value="Yemen">Yemen</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
						</select></p></div>

			<div id="citydiv">	
					<p style="margin-left:-13px;padding-left:20px;margin-top:20px;"><span style="color:#ff0000;">*</span> City<br><input type="text" name="city" id="city" style="border:solid 1px #E6E6E6; height:30px; width:90%; margin-left:5px;"><br></p>
				</div>
			<div id="phone">
			<p style="margin-left:-13px;padding-left:20px;margin-top:20px;"><span style="color:#ff0000;">*</span>Phone Number<br>
			</p><div id="type" style="margin-left:10px;"><input type="text" id="mct1" style="width:20%;height:30px;" value="+91"> 
		<input type="text" id="mct2" style="width:65%;;margin-left:5%;height:30px;"></div> <p></p>
			</div>
			
			<div id="mail">	
					
				<p style="margin-left:-13px;padding-left:20px;margin-top:20px;"><span style="color:#ff0000;">*</span> Email ID<br><input type="text" name="email" id="email" style="border:solid 1px #E6E6E6; height:30px; width:90%; margin-left:5px;"><br></p>
				
			</div>
			
			
			<!--div  id="drop" >	
				<p style="padding-left:20px;margin:20px 0px 0px -13px;"><span style="color:#ff0000;"> </span>Topic&nbsp;of&nbsp;Interest
				<div id="type" style="margin-left:10px;"><select style="width:90%; margin:0px;" id="toi" class="dropdown_locator">
					<option value="Buying a property">Buying a property</option>
					<option value="NRI services">NRI services</option>
					<option value="Call back service">Call back service</option>
					<option value="Website suggestions">Website suggestions</option>
					<option value="Others">Others</option>
				</select>	
</div>				</p>
			</div-->

			<div id="drop">	
				<p style="padding-left:20px;margin:20px 0px 0px -13px;"><span style="color:#ff0000;"> </span>TIme Frame For Purchase
				</p><div id="type" style="margin-left:10px;"><select style="width:90%; margin:0px;" id="timeframe" class="dropdown_locator">
					<option value="Immediately">Immediately</option>
					<option value="3 Months">3 Months</option>
					<option value="6 Months">6 Months</option>
					<option value="1 Year">1 Year</option>
					<option value="Just Researching">Just Researching</option>
				</select>	
			</div>				
			<p></p>
			</div>

			<div id="drop">	
				<p style="padding-left:20px;margin:20px 0px 0px -13px;"><span style="color:#ff0000;">* </span>How did you hear about us
				</p><div id="type" style="margin-left:10px;"><select style="width:90%; margin:0px;" id="hearing" class="dropdown_locator">
					<option value="Newspaper Ad">Newspaper Ad</option>
					<option value="Hoarding">Hoarding</option>
					<option value="Internet Search Engine">Internet Search Engine</option>
					<option value="Internet Ad">Internet Ad</option>
					<option value="Facebook/G+ Like">Facebook/G+ Like</option>
					<option value="Property Show">Property Show</option>
					<option value="Family or Friend">Family or Friend</option>
					<option value="Radio Ad">Radio Ad</option>
					<option value="Tv Ad">Tv Ad</option>
					<option value="Magazine Ad">Magazine Ad</option>
					<option value="Email">Email</option>
					<option value="Other">Other</option>
				</select>	
			</div>				
			<p></p>
			</div>
			
			
			<div id="text">	
			
				<p style="margin-left:-13px;padding-left:20px;margin-top:20px;"><span style="color:#ff0000;"></span> How can we help &nbsp;<span id="descCount" style="color:#ff0000;font-size:12px;">0 of 500 characters</span><br><textarea style="width:92%; max-width:92%; height:100px; max-height:387px; resize:none;" id="dtls" maxlength="500"></textarea><br></p>
				
				<input type="button" onclick="storedtls()" value="SUBMIT" style="margin-left:5px;width:120px;height:30px;background-color:#808080;border:none;color:#ffffff;font-weight: bold;margin-bottom:20px;">
				<!--p style="margin-left:-13px;padding-left:20px;margin-top:25px; font-size:11px; line-height:15px;">If you require immediate assistance.<br>please call the appropriate telephone number on the right</p-->
			
			</div>

		<!--<div class="col-md-4" style="border-bottom:1px #CCCCCC solid;height:68px"></div>-->
		</div>	
	</div>


			<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="margin-right:88px" id="contactsm">
				
				<p style="height:40px;line-height:40px" class="p_class p_class_new"><strong>Other useful contacts</strong></p>
				<p style="margin-top:35px;" class="p_class2 p_class_new">Marketing/Sales:<br><a href="mailto:sales@manchuri.com">sales@manchuri.com</a></p>
				<p style="margin-top:35px;" class="p_class2 p_class_new">Vendor/Procurement:<br><a href="mailto:purchase@manchuri.com">purchase@manchuri.com</a></p>
							
			
			<div class="clfx">
				
				<p style="padding:15px;margin-top:15px;font-size:14px;" class="p_class p_class_new">
				All contractors,material suppliers and <br>external consultants,please contact<br>
				<a href="mailto:purchase@manchuri.com">purchase@manchuri.com </a>
				<br>or call 040 2335 2068. </p>
				
				<p style="margin-top:15px;" class="p_class2 p_class_new">Careers:<br>
				<a href="mailto:jobs@manchuri.com" target="_top">careers@manchuri.com</a></p>
				<!--p style="margin-top:35px;"  class="p_class2 p_class_new">Legal:<br><a href="mailto:legal@manchuri.com">legal@manchuri.com</a></p-->
				
			</div>
			</div>
					
	
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 clfx" style="border:solid 1px #e5e5e5;margin-top:0px;margin-bottom:30px" id="contactsm">

				<p style="color:#000000;width:250px;height:30px;margin-left:25px;padding-top:6px;margin-top:15px;"><strong>MANCHURI CONSTRUCTIONS.</strong></p>
				<p style="margin-top:30px;padding-left:25px;border-bottom:1px #e5e5e5 solid;padding-bottom:10px;">Address Goes here</p>
					<span style="margin-bottom:180px">
				<a href="https://goo.gl/maps/DHbUl" target="_blank"><img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" class="contact_point" src="./images/pointer.png" style="position:absolute; bottom:590px; right:35px"></a>
			</span>	
					
				<p class="faxfont" style="margin-top:15px;padding-left:25px;border-bottom:1px #e5e5e5 solid;padding-bottom:10px;">Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
							
							+91-40-2335 2708&nbsp;&nbsp;&nbsp;
														
				</p>	
				
				<p style="margin-top:15px;margin-left:25px">Sales:<br><a href="mailto:sales@manchuri.com">sales@manchuri.com</a></p>
				
				<p style="margin-top:15px;margin-left:25px">Call Us:<br>040-23353335</p>
				
				<p style="margin-top:10px;margin-left:25px">Enquiries:<br><a href="mailto:info@manchuri.com">info@manchuri.com</a></p>
				
				<div id="map">
					<p style="background-color:#e5e4e2;color:#000000;height:30px;padding-top:6px;padding-left:25px;margin-top:15px;"><strong>Project Locator</strong></p>
				</div>
				<div style="margin-left:10%;font-weight:bold;padding:10px;">
				Browse By
				</div>
				<select id="typeofp" class="dropdown_locator">
				<option value="">Select type</option>
				<option value="1">1 BHK</option><option value="2">2 BHK</option><option value="3">3 BHK</option><option value="10">4 BHK</option>				</select>
				<div id="drop1" style="margin-top:15px;margin-bottom:35px;">
				<div id="location">				
						
				</div>
				
				<p style="margin-left:-13px;padding-left:20px;"></p>
			<div id="type">	
				<select id="locationofp" class="dropdown_locator">
				<option value="">Select Location</option>
				<option value="5">Kondapur-Hyderabad</option><option value="25">Nallagandla / Gachibowli-Hyderabad</option><option value="23">Chandanagar-Hyderabad</option><option value="24">Kompally-Hyderabad</option><option value="26">Jubilee Hills-Hyderabad</option><option value="27">Madhapur-Hyderabad</option><option value="28">Hafeezpet-Hyderabad</option><option value="29">Gopanapally-Hyderabad</option><option value="30">Kothaguda-Hyderabad</option><option value="31">Banjara Hills-Hyderabad</option><option value="33">Puppalaguda-hyderabad</option><option value="34">Mettuguda-hyderabad</option><option value="35">Yeswanthpur-Bangalore</option><option value="36">Kondakal-hyderabad</option>				</select>
			</div>	
			<div class="ordiv">
			Or
			</div>
			<div id="type">	
				<select id="projectname" class="dropdown_locator">
				<option value="">Select Project</option>
				<option value="18">Aparna CyberZon</option><option value="17">Aparna HillPark Boulevard</option><option value="16">Kanopy Jasmine</option><option value="15"> Aparna HillPark Gardenia</option><option value="19">Aparna Aura</option><option value="56">Aparna Sarovar Grande</option><option value="74">Aparna Sarovar</option><option value="75">Aparna County</option><option value="76">Aparna Shangri-la</option><option value="77">Aparna Cyber County</option><option value="78">Aparna Towers</option><option value="79">Aparna Kanopy Tulip</option><option value="80">Aparna Palm Meadows</option><option value="81">Aparna Hights</option><option value="83">Chandradeep</option><option value="84">Senor Valley</option><option value="111">Aparna HillPark LakeBreeze</option><option value="113">Aparna HillPark Avenues</option><option value="114">Aparna Kanopy Lotus</option><option value="115">Aparna CyberLife</option><option value="116">Aparna Elixir</option><option value="117">Oosmans Everest</option><option value="118">Aparna Elina</option><option value="119">Aparna Western Meadows</option>				</select>
			</div>	
			<!--span style="margin-bottom:180px">
				<img alt="Aparna Constructions, Real Estate Company, Hyderabad, India"  class="contact_point" src="images/pointer.png" style="position:absolute; bottom:110px; right:35px">
			</span-->	
				<!--div align="center"><input type="button" value="GO" style="margin-left:210px;width:50px;height:30px;background-color:#808080;border:none;color:#ffffff;font-weight: bold; margin-top:10px;" onclick="callLocator();"></div-->
				
				<div align="center"><input type="button" value="GO" style="margin-left:210px;width:50px;height:30px;background-color:#808080;border:none;color:#ffffff;font-weight: bold; margin-left:0px; margin-top:10px;" onclick="callLocator()"></div><br><br>
				
				</div>
			</div>
		</div>		
	</div>	
	
</div>		
	</div>		
</div>	

	
	<div>
	<style>
.extra-links a:hover {
color:#000000 !important;
#font-weight:bold;

}
.aparna_list_class li a:hover{
color:#FFF !important;
}
.aparna_list_class a:hover{
color:#FFF !important;
}
.aparna_list_class a{
color:#838282 ! important;
}
#___plusone_0 {  width:70px !important; }

@media screen and (min-width: 1024px) and (max-width:768px) {
     .flogoap {
		margin-left:50px !important;	
		padding-left:50px !important;
	 }
}
</style>
	  
	    <div class="row" style="height:80px;">
      
	   <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1">
	  <div class="row">
	  
	   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  removepadding">
	   
	   <table width="100%" class="removepadding">
			<tbody><tr>
				<td class="bordertop-" width="100%">&nbsp;</td>
			</tr>
	   </tbody></table>
	   </div>
	   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	   <div class="row">
	    <div class="col-md-7 removepadding vam">
		 <!--a href="about_aparna.php" style="text-decoration:none;outline:none;">
		                        ABOUT APARNA
		                    </a-->	
		<a href="javascript:void(0)" style="cursor:default;">&nbsp;</a>					
	    <ul class="extra-links">
		    		
				
						
						<li>
		                    <a href="http://www.aparnaconstructions.com/acl/about-aparna.php" style="text-decoration:none;outline:none;">
		                        ABOUT APARNA
		                    </a>

		                </li>
						<li>
		                    <a href="http://www.aparnaconstructions.com/acl/media.php" style="text-decoration:none;outline:none;">
		                        MEDIA
		                    </a>

		                </li>
						<li>
		                    <a href="http://www.aparnaanswer.org/" target="_blank" style="text-decoration:none;outline:none;">
		                        CSR
		                    </a>

		                </li>
						<li>
		                    <a href="http://www.aparnaconstructions.com/acl/Careers.php" style="text-decoration:none;outline:none;">
		                        CAREERS
		                    </a>

		                </li>
						<li>
		                    <a href="http://www.aparnaconstructions.com/acl/Property_Management.php" style="text-decoration:none;outline:none;">
		                        PROPERTY MANAGEMENT
		                    </a>

		                </li>
						<li>
		                    <a href="./contactus.php" style="text-decoration:none;outline:none;">
		                        CONTACT US
		                    </a>

		                </li>
						<!-- <li>
		                    <a href="legalnotice.php" style="text-decoration:none;outline:none;">
		                        LEGAL NOTICE
		                    </a>

		                </li>
						<li>
		                    <a href="privacy.php" style="text-decoration:none;outline:none;">
		                        PRIVACY POLICY
		                    </a>

		                </li> -->
							<li>
		                    <a href="http://www.aparnaconstructions.com/acl/disclaimer.php" style="text-decoration:none;outline:none;">
		                        DISCLAIMER
		                    </a>

		                </li>
						<li class="norbdr">
		                    <a href="http://www.aparnaconstructions.com/acl/sitemap.php" style="text-decoration:none;outline:none;">
		                        SITE MAP
		                    </a>

		                </li>
						
				
						


		 </ul>
      </div>
	  <div class="col-md-5 removepadding" style="">
		 <span class="copyright-list legals" style="text-align:right;float:right;">
		       Copyright © 2014. Aparna Constructions And Estates Pvt. Ltd. All rights reserved.</span>
		<!--table style="width:100%;"><tbody><tr><td></td><td class="leftradious  bgimage" style=""></td><td class="tblbgclr rightborder windows" style=""></td><td class="tblbgclr rightborder android" style=""></td><td class="tblbgclr rightborder apple" style=""></td><td class="rightradious tblbgclr blackberry" style=""></td></tr></tbody></table-->
	  </div>
	  </div>	  <div class="row"><div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-md-offset-7 removepadding" style="text-align:right;float:right;">
	  <!--span class="copyright-list legals">
		       Copyright &copy; 2014. Aparna Constructions And Estates Pvt. Ltd. All rights reserved.</span-->
	  </div></div>
	  </div>
	  
	  </div></div>
	  </div>	
	</div>	  

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="../../assets/js/jquery.js"></script-->
    <!--script src="../../dist/js/bootstrap.min.js"></script-->
	<!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script src="./bootstrap.min.js"></script>
    <!--script src="js/modern-business.js"></script-->

	<!--style>
	#location select {
		background: -webkit-linear-gradient(#fbfbfb, #e9e9e9); /* For Safari */
background: -o-linear-gradient(#fbfbfb, #e9e9e9); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(#fbfbfb, #e9e9e9); /* For Firefox 3.6 to 15 */
background: linear-gradient(#fbfbfb, #e9e9e9); /* Standard syntax (must be last) */	
	z-index:-999 !important;
border:solid 1px #efefef;
	}
	.locationofp {
	z-index:999999 !important;
	}
	</style-->
  
<iframe name="oauth2relay484824883" id="oauth2relay484824883" src="./postmessageRelay.html" tabindex="-1" style="width: 1px; height: 1px; position: absolute; top: -100px;"></iframe></body></html>