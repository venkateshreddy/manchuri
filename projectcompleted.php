<!DOCTYPE html>
<html lang="en" ng-app="AparnaConstructions">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,user-scalable=0" >
    <title>Manchiri HillPark Boulevard| Houses in Hyderabad</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.carousel.fullscreen.css" />
	<link rel="stylesheet" href="css/completed.css" type="text/css" />	
    <link rel="stylesheet" href="css/fonts.css" type="text/css" />	
    <link href="css/animate.css" rel="stylesheet">
	 <link rel="shortcut icon" href="images/favicon.png">
	<!--fancy box css-->
	<link data-require="fancybox@2.1.4" data-semver="2.1.4" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.css" />
    <link data-require="fancybox@2.1.4" data-semver="2.1.4" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/helpers/jquery.fancybox-thumbs.css" />
    <link data-require="fancybox@2.1.4" data-semver="2.1.4" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/helpers/jquery.fancybox-buttons.css" />
	<!--font awesome-->
	<link href="css/font-awesome.css" rel="stylesheet">
  <style>
	.locationmap{
	width:50% !important;
	height:100% !important;
	left:25% !important;
	right:25% !important;
	}
	.fancybox-overlay
	{
		z-index:999999 !important;
	}
	.caretnone
	{
		display:none !important;
	}
	.caretblock
	{
		display:inline-block !important;
	}
	@media all and (min-width:200px) and (max-width: 767px) {
		.navbar-toggle {
		background-color: rgba(0, 0, 0, 0);    
		border: 1px solid rgba(0, 0, 0, 0);
		border-radius: 4px;
		float: right;				
		position: absolute !important;
		z-index: 999999;
		margin:0 !important;
		}		
		.navbar-toggle {
		float: left;
		#margin-left: 30px;
		}
		.carousel-inner {
		position:absolute !important;
		left:0 !important;
		}
		.canvas-slid .active {
		margin:0 !important;
		padding:0 !important;
		}
		.nospace {				
		left:0 !important;
		}
		.carousel-fade .item {
		-webkit-transition: opacity 5s; 
		-moz-transition: opacity 5s; 
		-ms-transition: opacity 5s; 
		-o-transition: opacity 5s; 
		transition: opacity 5s;
		}
		.carousel-fade .active.left {
		left:0;
		opacity:0;
		z-index:2;
		}
		.carousel-fade .next {
		left:0;
		opacity:1;
		z-index:1;
		}
		.navbar-default .navbar-toggle {
		border:none !important;
		}
		.navbar-default .navbar-toggle:hover,
		.navbar-default .navbar-toggle:focus {
		background:none !important;
		}
		.navmenu-brand {
		display: block;
		font-size: 18px;
		line-height: 20px;
		margin:0 auto;
		padding:0;	
		width:50px;
		}
		.dropdown-menu > li > a {
		padding: 14px 20px;
		text-align:left;
		}
		.navbar-default .navbar-toggle {
		border:none !important;
		position:absolute;
		right:0;
		}
		.com-logo {		
		height: 60px;		
		position: absolute;		
		width: 80%;
		z-index: 3 !important;
		transition:2s ease-in-out;
		}
		.com-logo img {
		width:40%;
		max-width:120px;
		}
		.menu-light {
		z-index:99999999 !important;
		}
		#landingPopUp {
			
		}
		#contactform {
			top:0px;
			left:0%;
			right:0%;
			}
#mapsscroll{
width:96% !important;
}
.maps-wrapper{
top:8%;
height:370px !important;
}
#minimize_box{
left:30%;
}
	.fancybox-overlay
	{
	position:relative;
	top:0;
	left:0;
	overflow:hidden;
	display:none;
	background:url('fancybox_overlay.png');
	}

	}

	@media all and (min-width:200px) and (max-width: 767px) {
		.navbar-toggle {
		background-color: rgba(0, 0, 0, 0);    
		border: 1px solid rgba(0, 0, 0, 0);
		border-radius: 4px;
		float: right;				
		position: absolute !important;
		z-index: 999999;
		margin:0 !important;
		}		
		.navbar-toggle {
		float: left;
		#margin-left: 30px;
		}
		.carousel-inner {
		position:absolute !important;
		left:0 !important;
		}
		.canvas-slid .active {
		margin:0 !important;
		padding:0 !important;
		}
		.nospace {				
		left:0 !important;
		}
		.carousel-fade .item {
		-webkit-transition: opacity 5s; 
		-moz-transition: opacity 5s; 
		-ms-transition: opacity 5s; 
		-o-transition: opacity 5s; 
		transition: opacity 5s;
		}
		.carousel-fade .active.left {
		left:0;
		opacity:0;
		z-index:2;
		}
		.carousel-fade .next {
		left:0;
		opacity:1;
		z-index:1;
		}
		.navbar-default .navbar-toggle {
		border:none !important;
		}
		.navbar-default .navbar-toggle:hover,
		.navbar-default .navbar-toggle:focus {
		background:none !important;
		}
		.navmenu-brand {
		display: block;
		font-size: 18px;
		line-height: 20px;
		margin:0 auto;
		padding:0;	
		width:50px;
		}
		.dropdown-menu > li > a {
		padding: 14px 20px;
		text-align:left;
		}
		.navbar-default .navbar-toggle {
		border:none !important;
		position:absolute;
		right:0;
		}
		.com-logo {		
		height: 60px;		
		position: absolute;		
		width: 80%;
		z-index: 3 !important;
		transition:2s ease-in-out;
		}
		.com-logo img {
		width:40%;
		max-width:120px;
		}
		.menu-light {
		z-index:99999999 !important;
		}
		#landingPopUp {
		top:16% !important;
		left:16% !important;
		right:16% !important;		
		}
		#contactform {
			top:0px;
			left:0%;
			right:0%;
			}
	
	.google-maps-wrap{
	font-size:8px !important;
	}
	.fancybox-overlay
	{
	position:relative;
	top:0;
	left:0;
	overflow:hidden;
	display:none;
	background:url('fancybox_overlay.png');
	}
	}

	@media all and (min-width: 768px) and (max-width:992px) {
		.navbar-toggle {
		background-color: rgba(0, 0, 0, 0);    
		border: 1px solid rgba(0, 0, 0, 0);
		border-radius: 4px;
		float: right;
		margin:0 !important;    
		padding: 9px 10px;
		position: absolute !important;
		z-index: 999999;
		}
		.navbar-toggle {
		float: left;
		margin-left:0 !important;
		}
		.carousel-inner {
		position:absolute !important;
		left:0 !important;
		}
		.canvas-slid .active {
		margin:0 !important;
		padding:0 !important;
		}
		.nospace {				
		left:0 !important;
		}
		.carousel-fade .item {
		-webkit-transition: opacity 5s; 
		-moz-transition: opacity 5s; 
		-ms-transition: opacity 5s; 
		-o-transition: opacity 5s; 
		transition: opacity 5s;
		}
		.carousel-fade .active.left {
		left:0;
		opacity:0;
		z-index:2;
		}
		.carousel-fade .next {
		left:0;
		opacity:1;
		z-index:1;
		}
		.navbar-default .navbar-toggle {
		border:none !important;
		position:absolute;
		right:0;
		}
		.navbar-default .navbar-toggle:hover,
		.navbar-default .navbar-toggle:focus {
		background:none !important;
		}
		.navmenu-brand {
		display: block;
		font-size: 18px;
		line-height: 20px;
		margin:0 auto;
		padding:0;	
		width:50px;
		}
		.dropdown-menu > li > a {
		padding: 14px 20px;
		text-align:left;
		}
		.com-logo {		
		height: 60px;		
		position: absolute;		
		width: 80%;
		z-index: 333333 !important;
		transition:2s ease-in-out;
		}
		.com-logo img {
		width:40%;
		max-width:120px;
		}
		.menu-light {
		z-index:99999999 !important;
		}		
		#landingPopUp {
		top:25% !important;
		left:30% !important;		
		}
		#contactform {
			top:0px;
			left:0%;
			right:0%;
			}
			nav > li > a{
			width:120px;
			padding:7px 2px;
			}
			.fancybox-overlay
	{
	position:relative;
	top:0;
	left:0;
	overflow:hidden;
	display:none;
	background:url('fancybox_overlay.png');
	}
	}

	@media all and (min-width: 993px) and (max-width:1049px) {
		.topnavi {
		height: 100px;
		position: absolute;
		top: 0;
		width: 100%;
		z-index: 999999 !important;
		background:none;
		}	
		.nav > li > a {
		color: rgb(230, 227, 222);
		display: block;
		text-align:center;
		width:114px;
		padding: 8px 1px;
		}	
		.social-widget1-sub{
		width:20% !important;
		}
		.footer{
		height:80px !important;
		}
		#minimize_box, #minimize_boxa, #minimize_boxd, #minimize_boxbt, #minimize_boxtc, #minimize_box_plans{
		bottom:90px !important;
		}
		.modal-dialog{
		bottom:70px !important;
		}
		#stat-box {
		bottom:45px !important;
		}
		.social-widget1-sub
		{
			top:21% !important;
			right:7% !important;
		}
		.social-widget2-sub
		{
			top:27% !important;
			right:7% !important;
		}
		.fancybox-overlay
	{
	position:relative;
	top:0;
	left:0;
	overflow:hidden;
	display:none;
	background:url('fancybox_overlay.png');
	}
	}
	
	@media all and (min-width: 1050px) and (max-width:1099px) {
		.topnavi {
		height: 100px;
		position: absolute;
		top: 0;
		width: 100%;
		z-index: 999999 !important;
		background:none;
		}	
		.nav > li > a {
		color: rgb(230, 227, 222);
		display: block;
		width:120px;
		padding:10px 2px;
		text-align:center;
		
		}
		.social-widget1-sub{
		width:18% !important;
		}
		.fancybox-overlay
	{
	position:relative;
	top:0;
	left:0;
	overflow:hidden;
	display:none;
	background:url('fancybox_overlay.png');
	}
	}
	
	@media all and (min-width: 1100px) and (max-width:1199px) {
		.topnavi {
		height: 100px;
		position: absolute;
		top: 0;
		width: 100%;
		z-index: 999999 !important;
		background:none;
		}	
		.nav > li > a {
		color: rgb(230, 227, 222);
		display: block;
		width:126px;
		padding:10px 5px;
		text-align:center;
		}
		.social-widget1-sub{
		width:18% !important;
		}
		.fancybox-overlay
		{
		position:relative;
		top:0;
		left:0;
		overflow:hidden;
		display:none;
		background:url('fancybox_overlay.png');
		}
	}

	@media (min-width: 1200px) and (max-width:1299px) {
		.topnavi {
		height: 100px;		
		width: 100%;
		z-index: 999999 !important;
		background:none;		
		position:relative;
		top:5px;
		}		
		.nav > li > a {
		color: rgb(230, 227, 222);
		display: block;
		width:128px;
		padding:10px 12px;
		text-align:center;
		}	
.social-widget1-sub{
		width:17% !important;
		}		
	}
	@media (min-width: 1300px) and (max-width:1399px) {
		.topnavi {
		height: 100px;		
		width: 100%;
		z-index: 999999 !important;
		background:none;		
		position:relative;
		top:5px;
		}
		.nav > li > a {
		color: rgb(230, 227, 222);
		display: block;
		
		text-align:center;
		width:139px;
		}
		.social-widget1-sub{
		width:16% !important;
		}
	}
	@media (min-width: 1400px) and (max-width:1599px) {
		.topnavi {
		height: 100px;		
		width: 100%;
		z-index: 999999 !important;
		background:none;		
		position:relative;
		top:5px;
		}
		.nav > li > a {
		color: rgb(230, 227, 222);
		display: block;
		
		text-align:center;
		width:150px;
		}
		.social-widget1-sub{
		width:14% !important;
		}
	}
	@media (min-width: 1600px) {
		.topnavi {
		height: 100px;		
		width: 100%;
		z-index: 999999 !important;
		background:none;		
		position:relative;
		top:5px;
		}
		.nav > li > a {
		color: rgb(230, 227, 222);
		display: block;
		padding: 8px 31px;
		text-align:center;
		width:171px;
		}
		.dropdown-menu > li > a {    
		padding: 14px 30px;
		text-align: left;   
		}
		#landingPopUp{
		top:28% !important;
		left:42% !important;
		
		
		}
	}
	.navbar-inverse .navbar-nav > li > a:hover,
	.navbar-inverse .navbar-nav > li > a:focus {
	color: #000 !important;
	background:#ccc;
	}
	.nav > li > a {
	color:#ccc !important;
	}
	.navbar-inverse .navbar-nav > li.open > a {
    background: none repeat scroll 0 0 #fff !important;
    color: #000 !important;
	}
	
	<!-- .nav > li > a {
	color:#ccc !important;
	} -->
	.carousel-fade .item {
	-webkit-transition: opacity; 
	-moz-transition: opacity ; 
	-ms-transition: opacity; 
	-o-transition: opacity ; 
	transition-property: opacity ;
	transition-duration:3s;
}
.carousel-fade .active.left {
	left:0;
	opacity:0;
	z-index:2;
}
.carousel-fade .next {
	left:0;
	opacity:1;
	z-index:1;
}
.displaycls{
display:none !important;
}
.fill {
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    width: 100%;	
}
/* modal dialog */
.modal-dialog {
width:60%;
margin-left:20%;
margin-right:20%;
}
.modal-header .close {
	opacity:1;
	margin-top:-1px;
	margin-right:-1px;
}
.modal-content {
border-radius:0;
padding:0px 0px 10px 0px;

}
/* .modal-body {
text-align:justify;
padding:0 20px 0 13px;
height:200px;
overflow:auto;
} */
.modal-header {
padding:0;
border:none;
}
.modal-header h4 {
font-size:24px;
text-align:center;
line-height:30px;
padding-top:5px;
padding-bottom:5px;
margin:0;
color: rgb(49, 49, 45); 

}
.modal-dialog {
    bottom: 50px;
    margin-left: 20%;
    margin-right: 20%;
    position: absolute;
    width: 60%;
    transition:3s ease-in-out;
}
#minimize_box,#minimize_box_plans{

height:32px !important;
}
<!-- #landingPopUp {
   
    left: 25%;
	right:25%;
   max-height:400px;
   max-width:336px;
    opacity: 0.8;
    overflow: hidden;
    position: absolute;
    text-align: center;
    top: 50%;

	z-index:99999999 !important;
} -->

#landingPopUp {


max-height:400px;
max-width:336px;
}
.fancybox-opened {
    z-index: 999999;
}

.dropdown:hover .dropdown-menu {
    display: block;
 }


/* scroll css */
#content_1 {
    overflow: auto;
    width: 100% !important;
    min-height: 70px !important;
	max-height:200px !important;
    padding: 0 5px;    
}

.track3 {
    width: 10px;
    background: rgba(0, 0, 0, 0);
    margin-right: 2px;
    border-radius: 10px;
    -webkit-transition: background 250ms linear;
    transition: background 250ms linear;
}

.track3:hover,
.track3.dragging {
    background: #d9d9d9; 
    background: rgba(0, 0, 0, 0.15);
}

.handle3 {
    width: 7px;
    right: 0;
    background: #999;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 7px;
    -webkit-transition: width 250ms;
    transition: width 250ms;
}

.track3:hover .handle3,
.track3.dragging .handle3 {
    width: 10px;
}
.google-maps-wrap {
background:#1F2022;
 font-weight:normal;
 font-size:12px; 
 margin:0; 
 color:#fff;

 overflow:hidden;
 line-height:28px;
 padding-left:15px;
 position:absolute;
 top:100px;
 right:60px;
 z-index:9999999 !important;
}

 .googlemap {
 float:left;
 margin-right:12px;
 text-align:center;
 margin:0 auto;

 }
 .gmclick {
 float:right;
 background:#E5CE72;
 padding:0 22px;
 margin:0;
 color:#1F2022;
 }
 .gmclick:hover {
 color:#1F2022;
 text-decoration:none;
 }

 /* socialwidget*/
  #social-widget-id1,#social-widget-id2
 {
	display:none;
 }
 	.social-widget1 {
	position:absolute;
	top:20%;
	right:2%;
	z-index:9 !important;
	background:#1D1D18;
	border-radius:5px;
	padding:8px 12px;
	margin-left:10px;
	z-index:888888 !important;
	}
	.social-widget2 {
	position:absolute;
	top:26%;
	right:2%;
	z-index:9 !important;
	background:#1D1D18;
	border-radius:5px;
	padding:8px 12px;
	z-index:888888 !important;
	}
	.social-widget1 .fa-thumbs-up, .social-widget2 .fa-share-alt {	
	color:rgb(102, 102, 102);
	font-size:20px;
	font-weight:normal;
	}	
	.fa-thumbs-up:hover, .fa-share-alt:hover {
	color:#ccc;
	}
	.social-widget1-sub {
	background:#1D1D18;
	padding:4px 6px;	
	position:fixed;
	top:20%;
	
	right:4.9%;
	border-radius:5px;
	z-index:888888 !important;
	}
	.social-widget2-sub {
	background:#1D1D18;
	padding:7px 12px;	
	position:fixed;
	top:26%;
	right:4.6%;
	border-radius:5px;
	font-size:14px;
	z-index:888888 !important;
	}
	.social-widget2-sub a {
	color:rgb(102, 102, 102);
	}
	.social-widget2-sub a:hover {
	color:#ccc;
	}
	<!-- tabs css -->

.nav > li {
border-right:solid 1px red !important;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
background:#3d3d3d;
color:#fff;
border:none;
}
.nav-tabs > li > a {
  margin-right: 0px !important;
  border:none !important;
  border-radius:0;
}
.nav-tabs > li > a:hover {
  border:solid 1px red;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #858585;
}
.nav-tabs > li.active > a {
background:red !impo
}
#content_1 .nav > li {
background:#696969;
}

/*plans css*/


.maps-wrapper {
height:550px;
width:60%;
background:#fff;
bottom:10%;
position:absolute !important;
margin-left:20%;
margin-right:20%;
}
.maps-left {
float:left;
height:430px;
width:94%;
margin:10px 0 10px 0px;
}
.maps-right {
height:470px;
#overflow-y:scroll;
width:134%;
float:right;
margin:10px 0;
margin-top:29px;
}
.maps-right {
margin-top:0 !important;
padding-top:0 !important;
}
.maps-right-inner {
background:#3d3d3d;
height:38%;
width:100%;
float:right;
margin-bottom:0;
}
.maps-whole-div {
width:100% !important;
height:100% !important;
}
.maps-wrapper p, h2, h4 {
margin:0;
padding:0;
font-family:arial;
}
.maps-desc {
position:absolute;
bottom:15px;
width:82%;
margin:0 auto;
left:15px;
font-size:10px;
}
#maps-desc p {
padding-left:10px;
}
.closebtn {
position:absolute;
top:-3px !important;
right:0 !important;
}
#mapsscroll {    
    height: 78%;    
	position:absolute;
	top:63px;
	right:0;
	width:34%;	
	padding-top:0 !important;
	padding:0 15px !important;
	
}
 .modal{
z-index;17876 !important;
}



#home,#finance,#nrifaqs
{
	overflow: auto;
    width: 100% !important;
    height: 115px !important;
    padding: 0 5px;    
}

.myButton
{
	background-color: #ff5500;
    border: medium none;
    color: #ffffff;
    display: inline-block;
    font-family: Trebuchet MS;
    font-size: 14px;
    font-weight: bold;
    padding: 3px;
    text-decoration: none;
    width: 60px;
}
.top-download
{
border-bottom: 2px solid #bfbfbf;
margin-left: 6%;
margin-right: 2%;
}
.bottom-download
{
	margin-left:10%;
}
.bottom-download input
{
	margin-right:5%;
}
.download_links {
    color: #f25112;
    font-family: Garamond Bold;
    font-size: 12px;
	cursor:pointer;
}
#download_head, #download_head_bottom {
    border-top: 2px solid #bfbfbf;
    margin-left: 5%;
    margin-right: 3%;
}
#stat-box {
position:absolute;
bottom:32px;
background:#484434;
z-index:999 !important;
width:100%;
}
.equal {
font-size:4em;
font-weight:bold;
text-align:center;
}
#stat-box th {
color:#BCB5A9;
font-weight:bold;
}
#stat-box td {
font-size:14px;
}
#stat-box h3, #stat-box p, #stat-box td {
color:#BCB5A9;
margin:0;
padding:0;
}
.video-pic {
width:244px;
height:86px;
position:relative;
}
.play {
position:absolute;
top:5px;
}
#stat-box td {
padding-bottom:6px;
}
#stat-box h3 {
font-size:14px;
font-weight:bold;
text-align:center;
margin:8px 0;
}
.divider {
    border-right: 1px dashed rgb(153, 153, 153);
    float: left;
    height: 100%;    
    transform: rotate(20deg);
                height:60px;
}
#stat-box table, th, tr, td {
margin:0;
padding:0;
text-align:center;
}
.super {
font-size:2em;
}
.close {
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);    
    font-size: 13px;    
    padding: 3px;
   margin-right:6px;
   
}

#stat-box-sm {
position:absolute;
top:16%;
background:#484434;
z-index:9 !important;
width:100%;
}
#stat-box-sm p{
padding:10px;
color:#fff;
}

#loader
{
	width:100%;height:600px;
}
#loaderimage
{
	margin:auto;
	margin-top:20%;
}
#___plusone_0
{
	width:60px !important;
}
.carousel {
    position: relative !important;
    width: 100% !important;
}
.fa {
font-family: 'FontAwesome'
}
.modal-backdrop{
z-index:0 !important;
}
#stat-box .close{
width:22px;
}
a{
outline:none !important;
}
#center {
position: absolute;
top:0;
left:0;
right:0;
bottom:0;
margin: auto;
height: 100px;
width: 150px;
}
  </style>
<script >
function windowresizer(){
//alert("windowresizer");
//document.getElementByClass('canvas').trigger(click);
$("body").trigger("click");
//alert("windowresizer1")
}



</script>

 </head>

  <body id='#body' ng-controller="MainCtrl" data-ng-init="init()" onresize='windowresizer()'>
  <div id="center" style="" ng-show="loading" class=''>
	<img  class="img-responsive" src="images/Aparna-Loading_128x128.gif" />
  </div>
   <!-- social widget -->
<div class='clearfix'></div>
<div class="social-widget1 hidden-sm hidden-xs" ng-mouseleave="hidesociallike()" style='display:none;' id='social1'>
	<a href='javascript:void(0)' ng-mouseover="showsociallike()" ng-click='showsociallike_tab()'><i class="fa fa-thumbs-up fa-lg"></i></a>

	<div class="social-widget1-sub" ng-mouseleave="hidesociallike()" ng-show="socialgrouplike">		
		
	<iframe src="www.facebook.com/plugins/like.php?href=https%3A%2F%2F103.241.137.126:8080%2Facl%2Fproject.php&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=19&amp;appId=715977638414760" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:19px;width:90px;" allowTransparency="true"></iframe>

	<div class="g-plusone"  style="float:left; border:1px solid #FFF !important;width:60px !important; "  data-size="medium" ></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
  
</script>

	</div>
</div>
<div class='clearfix'></div>
<div class="social-widget2 hidden-sm hidden-xs" ng-mouseleave='hidesocial()'  style='display:none;' id='social2'>
	<a href='javascript:void(0)' ng-mouseover="showsocial()" ng-click='showsocial_tab()' id='shareicon'><i class="fa fa-share-alt fa-lg"></i></a>

	<div class="social-widget2-sub" ng-mouseleave='hidesocial()' ng-show='socialgroup'>
		<a target="_blank" href="https://www.facebook.com/AparnaGroup"><i class="fa fa-facebook fa-lg">&nbsp;&nbsp;</i></a>
		<a target="_blank" href="https://twitter.com/AparnaGroup"><i class="fa fa-twitter fa-lg">&nbsp;&nbsp;</i></a>
		<a target="_blank" href="http://www.youtube.com/aparnaconstructions/"><i class="fa fa-youtube fa-lg">&nbsp;&nbsp;</i></a>
		<a  target="_top" href="mailto:sales@aparnaconstructions.com"><i class="fa fa-envelope fa-lg"></i></a>
	</div>
</div>

<!-- social widget close -->
  
  
  
  
  
<!-- nav start here -->	
<div ng-show="afterloading" id="afterloadingdiv" style="display:none;">
<div class="topnavi hidden-xs hidden-sm">
	<div class="col-xs-2 col-sm-2 col-md-3 col-lg-4">
		<a href='#'><img id="logo" ng-src="" alt="images/1139129917cyberzon.png" title=""  class="img-responsive"></a>
	</div>

	<div class="col-xs-12 col-sm-10 col-md-9 col-lg-8"><br style="margin-top:4px;">
		<nav class="navbar navbar-inverse" role="navigation">
				<div class="">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nowongoing"> 
							 <span class="sr-only">Toggle navigation</span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
						 </button> 						 						 
					</div>				
					<div class="collapse navbar-collapse" id="nowongoing" style='padding:0;margin:0;'>
					
					<ul class="nav navbar-nav">							
						<li class="dropdown pdngno" ng-repeat='menu in propages' >
						  <a class="dropdown-toggle pdngno" data-toggle="dropdown" ui-sref=""  ng-click='menuclick(menu)' ng-mouseover='menuclick()' style='cursor:pointer;'>Menu</a>									  
						  <ul class="dropdown-menu" role="menu">
						  <li ng-repeat='submenu in subpages'><a  ui-sref="" ng-init='setifMenuHvSub(menu,submenu)' ng-if='submenu.PageName==menu.PageName' ng-click='subpageclick()'>sub menu</a></li>
						  </ul>
							</li>
							
						</ul> 
							
					</div>
				</div>				
			</nav>
	</div>
</div>	
<!-- nav end here -->
  

  <!-- nav start here -->	
<div class="toplogo hidden-xs hidden-sm">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<img id="logo" ng-src="" alt="images/1139129917cyberzon.png" title="" ng-click="homepage()" class="img-responsive"></a>
	</div>

	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nowongoing"> 
							 <span class="sr-only">Toggle navigation</span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
						 </button> 						 						 
					</div>				
					<div class="collapse navbar-collapse" id="nowongoing">
						<ul class="nav navbar-nav" >							
						<li class="dropdown pdngno" ng-repeat='menu in propages' >
						  <a class="dropdown-toggle pdngno" data-toggle="dropdown" ng-mouseover='menumousehover(menu)' ui-sref="" ng-click='menuclick(menu)'></a>									  
						  <ul class="dropdown-menu" role="menu">
						  <li ng-repeat='submenu in subpages'><a ng-init='setifMenuHvSub(menu,submenu)' ui-sref="" ng-if='submenu.PageName==menu.PageName' ng-click='subpageclick(submenu)'></a></li>
						  </ul>
							</li>
							
						</ul> 				
					</div>
				</div>				
			</nav>
	</div>
</div>	

<div class="clearfix"></div>
<!-- nav end here -->
	
<div class="row visible-xs visible-sm">
    <div class="navmenu navmenu-inverse navmenu-fixed-left">
      <!--a class="navmenu-brand" href="#"><img src="images/cyberlife_BW.png" class="img-responsive" align="center" width="80"></a-->
     
		<ul class="nav navmenu-nav">							
	<li class="dropdown" ng-repeat='menu in propages' >
	  <a class="dropdown-toggle" data-toggle="dropdown" ng-mouseover='menumousehover(menu)' ng-click='showContact_XS_Menu(menu,"menu")' style='cursor:pointer;' ng-init='setifMenuHvSub_carot(menu,subpages)'>menu.PageName&nbsp; <span class="caret caretnone" id="iconcmenu.pageId" ></span></a>									  
	  <ul class="dropdown-menu navmenu-nav">
	  <li ng-repeat='submenu in subpages'><a ng-click='showContact_XS_subMenu(submenu,"submenu")' ng-init='setifMenuHvSub(menu,submenu)' ng-if='submenu.PageName==menu.PageName'  style='cursor:pointer;'>submenu.subpageName</a></li>
	  </ul>
		</li>
	</ul> 

    </div>
    </div>

    <div class="canvas">
      <div class="navbar navbar-default navbar-fixed-top">


<div class="visible-xs visible-sm">  
	<div class="com-logo">
		<a href="javascript:void(0)"><img id="logo" ng-src="projectData?(projectData.logo):null" alt="images/1139129917cyberzon.png" title="" ng-click="init()" class="img-responsive"></a>
	</div>
</div>

	  
		<button type="button" ng-click='hideModal()' class="navbar-toggle visible-xs visible-sm" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">
          <img class="menu-light" src="images/res-menu-light.png">
        </button>		
		
		<div ui-view="googlelink">

		</div>



<!-- PLANS POPUPS STARTS HERE -->

<!--div class="maps-wrapper animated fadeInUp" id='plans' style='z-index:99999999 !important;display:none;' ng-show="plans">
	<a href="" class="closebtn" ng-click='closeplans()'><img src="images/minimize.png"></a>
	
<h2 align="center">Plans</h2>
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<h4>Aparna Hillpark Arena</h4>
		<div class="maps-left img-responsive hidden-xs" style="background:url(planDetails.planimage); background-size:100% 100%;" style="border:solid 1px red !important;">	
		
		
		</div>
		
	</div>
	<div class="maps-desc hidden-xs" id="maps-desc">	
		
		<div class="row col-md-3 col-lg-3" ng-repeat='icons in planDetails.planicons'>
			<div class="media" >
				<a class="media-left" href="#">
				<img align="left" src='icons.vcPlanIconImage' alt="...">
				
				</a>
				<div class="media-body">						
				<p>icons.vcPlanIconName</p>
				</div>
			</div>
		</div>			
	</div>

	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="mapsscroll">	
		<div class="maps-right">
			<div class="maps-right-inner img-responsive" ng-repeat='planimages in planPhotos' style="background:url(planimages.vcThumbImage); background-size:100% 97%; background-repeat:no-repeat;"></div>
		</div>
	</div>		
</div-->				
			

	<!--End of PLANS POPUPS STARTS HERE -->	



	<div  id='mapcanvas' ng-hide="showmap"  style="height:800px; width: 100%; z-index: 999999 ! important;  display:block;" ></div>
	
	
	
	
	
	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"  ng-hide="showcaurosal" >
		<div class="carousel-inner" style='height:100%;width:100%;display:block;' id='carouselinner' >
				 <div ng-class='{"item active nospace fill":$index==0,"item fill nospace":!($index==0)}' ng-repeat='image in photos'
				 style='background-image:url("photos?(image.path):null");'>  
				
				</div> 
				</div>
				
				<div ui-view>

				</div>
						  
				<!--stats-->
				
				<div id="stat-box" class="hidden-xs hidden-sm" ng-hide='hidestat'>	
			<table class="" width="100%" cellpadding="" cellspacing="" border="0" id="stat-box">
			  <tr align="center">
				<th align="center" width="15%"><h3>Location</h3></th>
				<th rowspan="3" width="1%" style="border-right:dashed 1px #BCB5A9"></th>
				<th width="15%"><h3>No of Flats</h3></th>
				<th rowspan="3" width="1%" style="border-right:dashed 1px #BCB5A9"></th>
				<th width="15%"><h3>Total Area</h3></th>
				<th rowspan="3" width="1%" style="border-right:dashed 1px #BCB5A9"></th>
				<th width="15%"><h3>Built Up Area</h3></th>
				<th width="5%" rowspan="3" class="equal">=</th>
				<th rowspan="3" width="15%" align="center"><span class="super">familynumtext</span><br/>familydatatext</th>
				<th rowspan="3" width=""><a href="../../ApnaAparna.php?pid=pid" target="_blank"><img class="video-pic" ng-src="videostatimage"></a></th>
				<th><a href="javascript:void(0)" class="close" width="2%" ng-click='closeStat()'><img class="img-responsive" src="images/close.png" ></a></th>
			  </tr>
			  <tr align="center">
				<td>locationnumtext</td>
				<td>villasnumtext</td>
				<td>areanumtext</td>
				<td>biludupareannumtext</td>    
				
				<td></td>
			  </tr>
			  <tr align="center">
				<td>locationdatatext</td>
				<td>villasdatatext</td>
				<td>areadatatext</td>
				<td>biludupareadatatext</td>				
				<td></td>
			  </tr>
			</table>								
			</div>
				
				
				<!--stats close-->
	
			
	
	
	
	
	
	
		<!-- footer start here -->	
		
		<div class="footer nospace">
			<div class="col-xs-9 col-sm-6 col-md-6 col-lg-6">					
				<a target="_blank" href="../../ApnaAparna.php?pid=pid"><img class="fltlft pdngfiv " src="images/aparnaLogoWhite1.png" alt="..."></a>
				<p class="fltlft hidden-xs hidden-sm"><a target="_blank" href="">Get to know about the<br>vibrant community of Aparna property owners</p>
				<p class="fltlft hidden-xs visible-sm"><a target="_blank" href="../../ApnaAparna.php?pid=pid">Get to know about the<br>vibrant community of Aparna</p>
			</div>
			<!-- <div  align="center" ng-repeat="image in proImages" ng-class='{"col-xs-4 col-sm-2 col-md-2 col-lg-2":$index==0,"displaycls col-xs-4 col-sm-2 col-md-2 col-lg-2":!($index==0)}'>
			
			<div ng-repeat="image in proImages" ng-class='{"col-md-12":$index==0,"displaycls":!($index==0)}'>
				<a   href="image.path"  rel="statusimages" alt="image.name" ng-click="show_dialog($event)" ><img class="prostat img-responsive" src="images/ps.png" alt=""></a>
				</div>
			
			</div> -->
			
			<div align="right" class="col-xs-3 col-sm-6 col-md-6 col-lg-6" id="footerlink">
				
				
					<a href="../../#/" class="footext hidden-xs" style="padding-right:12px;">Aparna Constructions</a>
				
				<a href="../../#/"><img align="right" class="prostat img-responsive aplogo" src="images/aparnaLogo1.png" alt=""></a>		
			</div>			
		</div>
		
		<!-- footer end here -->
				<div class="clearfix"></div>
	
		<!-- COntact us form-->
	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6" id="contactform" ng-show='contactUs' ng-controller="contactusCtrl" style="display:none;">
		<div class="cont-team-wrap">
			<img class="cont-our-team" src="images/contactOurTeam.png">
		</div>
	<div class="inner-form">
	<a href=""><img class="closeform" src="images/close_form.png" alt="" title="" ng-click='closeContactUs()'></a>
		<h3>Hi There</h3>
		<p>Please fill in the enquiry form and we shall revert to you shortly.&nbsp;&nbsp;&nbsp;&nbsp;<br/><span style="color:red;">*</span> Mandatory.</p>
		<hr>
		<form role="form" class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center;">
		<label for="errordisplaying"  class="error">validation_error</label>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="exampleInputEmail1">Name <span class="error">*</span></label>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" ng-model='name'>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="exampleInputPassword1">Email <span class="error">*</span></label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" ng-model='email'>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="exampleInputPassword1">Country</label>
				<select class="form-control" ng-model='scountry' ng-options="country.Name for country in countryArray track by country.ID" ng-change='getCountryCode(scountry)'>
				  <option value="">India</option>
				</select>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="exampleInputPassword1">City <span class="error">*</span></label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="City" ng-model='city'>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="exampleInputPassword1">Mobile Number <span class="error">*</span></label>
				<div class="form-group">
					<div class="col-lg-4 row">
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="+91" ng-model='phcode' ng-disabled=true;>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 phoneno ph-land nmnp hidden-sm hidden-md">
						<input type="text" class="form-control myland " id="exampleInputPassword1" placeholder="9865545645" ng-model='phone' maxlength="10">
					</div>
					
					<div class="col-md-8 row visible-sm visible-md">
						<input type="text" class="form-control row" id="exampleInputPassword1" placeholder="9865545645" ng-model='phone' maxlength="10">
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="exampleInputPassword1">Landline Number</label>
				<div class="form-group">
					<div class="col-lg-4 row">
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Code" ng-model='landcode'>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 landline ph-land nmnp hidden-md hidden-sm">
						<input type="text" class="form-control myland" id="exampleInputPassword1" placeholder="0123456789" ng-model='landno'>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 landline ph-land nmnp visible-md visible-sm row">
						<input type="text" class="form-control myland" id="exampleInputPassword1" placeholder="0123456789" ng-model='landno'>
					</div>
				</div>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="exampleInputPassword1">Time Frame For Purchase</label>
				<select class="form-control" ng-model='timeframe'>
				  <option>Immediately</option>
				  <option>3 Months</option>
				  <option>6 Months</option>
				  <option>1 Year</option>				  
				</select>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="exampleInputPassword1">How did you hear about us </label>
				<select class="form-control" ng-model='hearing'>
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
		</div>
		
	
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
				<label for="exampleInputPassword1">Comments <span class="error">*</span></label>
				<textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Please enter your comments" ng-model='comments' maxlength="200"></textarea>
			</div>
		</div>
		
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
			<h3 style="margin-top:10px !important;">Call Us : 040-23353335</h3>			
		</div>
		
		
		
		
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
			<div class="form-group">
				<button type="submit" class="btn btn-default btn-lg" ng-click="submit()">Submit</button>
			</div>
		</div>
		
		

		  
		</form>
	</div>
</div>


<div class="clearfix"></div>
	  
    </div> <!-- canvas close -->
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- <script src="js/jquery-1.10.0.min.js"></script>	 -->
	<script data-require="jquery@1.8.2" data-semver="1.8.2" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	
	<script src="js/jasny-bootstrap.min.js"></script>
	<script src="js/jquery.carousel.fullscreen.js"></script>	
	  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<!--fancy box js-->
	 
    <script data-require="fancybox@2.1.4" data-semver="2.1.4" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.pack.js"></script>
    <script data-require="fancybox@2.1.4" data-semver="2.1.4" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.js"></script>
    <script data-require="fancybox@2.1.4" data-semver="2.1.4" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/helpers/jquery.fancybox-thumbs.js"></script>
    <script data-require="fancybox@2.1.4" data-semver="2.1.4" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/helpers/jquery.fancybox-media.js"></script>
    <script data-require="fancybox@2.1.4" data-semver="2.1.4" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/helpers/jquery.fancybox-buttons.js"></script>
	
	
	
	<!-- scorll js-->
	<script src="js/enscroll-0.6.0.min.js"></script>
	
	<!-- Angular JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.1/angular.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.1/angular-sanitize.js"></script>
  <script src="js/app.js"></script>
  <!-- Geolocation-->
  <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"> </script> -->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
  
  
  
  
  <script>
$(function(){

	$('#content_1,#home,#finance,#nrifaqs,#mapsscroll').enscroll({
		showOnHover: false,
		verticalTrackClass: 'track3',
		verticalHandleClass: 'handle3'
	});
});

</script>


  </body>
</html>