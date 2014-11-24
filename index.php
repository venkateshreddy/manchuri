<?php
require_once('config.php');
$projects = $manchuri -> getActiveProjects(1);
?>
<!DOCTYPE html>
<!-- saved from url=(0039)http://www.aparnaconstructions.com/acl/ -->
<html lang="en">
	<head>
		<title>Manchuri Builders | Leading Real Estate Company</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.jscrollpane.css" rel="stylesheet">
		<link href="css/mystyles.css" rel="stylesheet">
		<link href="css/common_manchuri.css" rel="stylesheet">
		<script type="text/javascript" async="" src="js/platform.js" gapi_processed="true"></script>
		<script id="facebook-jssdk" async="" src="js/all.js"></script>
		<script async="" src="js/analytics.js"></script>
		<script src="js/jquery.min.js"></script>

  	</head>
  	<body>
		<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./w9JKbyW340G.html" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./w9JKbyW340G(1).html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fc10cb028" frameborder="0" allowtransparency="true" scrolling="no" src="./ping.html" style="display: none;"></iframe></div></div>
	</div>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31867223-1', 'auto');
  ga('send', 'pageview');

</script>
	
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async = true;
  js.src = "connect.facebook.net/en_US/all.js#xfbml=1&appId=715977638414760";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
    
	 <script type="text/javascript">

		function openproject(path)
		{	
			window.open(path,"_blank");
		
		}

		function citymap()
		{
		
			city1 =document.getElementById('city').value;
					
			$.ajax({
			type:"POST",
			datatype:"JSON",
            url:"http://103.241.137.126:8080/aparnaCMS/index.php?r=json/getcMapInfo&city="+city1,
           
			success:function(data)
            {	
				var obj= $.parseJSON(data);
				
				var pclist='';
				var polist='';
				var citilist='';
				var markerlist='';
				var map='';
				
				var projects;
				var cities;
				var city;
				$.each(obj ,function()
                {
					
					projects= obj.projects;
					cities= obj.cities;
					city= obj.city;
					
				
				});
							
				
					for (var i=0;i<cities.length;i++)
					{		
						if(cities[i].cityname == city){
						
						citilist=citilist+'<option value="'+cities[i].cityname+'" selected="selected">'+cities[i].cityname+'</option>';
						map=cities[i].citymap;
						
						}else{
							
							citilist=citilist+'<option value="'+cities[i].cityname+'">'+cities[i].cityname+'</option>';
							
						}

					}	
					
				
					for (var i=0;i<projects.length;i++)
					{		
						
						
							if(projects[i].completestatus == 1)
							{	
							pclist=pclist+'<li class="plist" id="l_'+projects[i].pid+'" style="cursor:pointer;text-align:left;height:20px;width:100%;">'+projects[i].projectname+'<span id="s_'+projects[i].pid+'" class="box2" width:145px;onclick="'+
	(projects[i].completestatus==0 ?  'document.location.href=\'project.php?pid=': 'document.location.href=\'projectcompleted.php?pid=')+projects[i].pid+'\' "><table style="background-color:#ffffff;font-size:10px !important;line-height:12px;width:145px;margin-left:40;position:fixed !important;z-index:9999999 !important;"><tr><td style="padding:8px;width:100%;"><img alt="Aparna Constructions, Real Estate Company, Hyderabad, India"  src="'+projects[i].photo+'" width="110px" height="70px"/><td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px !important;"><a href="projectcompleted.php?pid='+projects[i].pid+'" style="color:#0000FF !important;text-align:left !important;color:#465366;">'+projects[i].projectname+'<br>'+projects[i].locationname+'</a></td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px ! important;">'+projects[i].aptname+'</td></tr></table></span></li>';
							}
	
					}
						
					for (var i=0;i<projects.length;i++)
					{	
						
						if(projects[i].completestatus==0)
							{	
								polist=polist+'<li class="plist" id="l_'+projects[i].pid+'" style="cursor:pointer;text-align:left;height:20px;width:100%;">'+projects[i].projectname+'<div id="s_'+projects[i].pid+'" class="box2" style="width:145px; z-index:1000002; " onclick="'+
	(projects[i].completestatus==0 ?  'document.location.href=\'project.php?pid=': 'document.location.href=\'projectcompleted.php?pid=')+projects[i].pid+'\' " ><table style="background-color:#ffffff;font-size:10px !important;line-height:12px;width:145px;margin-left:40;position:fixed !important;z-index:9999999 !important;"><tr><td style="padding:8px;width:100%;"><img alt="Aparna Constructions, Real Estate Company, Hyderabad, India"  src="'+projects[i].photo+'" width="110px" height="70px"/><td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px !important;"><a href="project.php?pid='+projects[i].pid+'" style="color:#0000FF !important;text-align:left !important;color:#465366;">'+projects[i].projectname+'<br>'+projects[i].locationname+'</a></td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px ! important;">'+projects[i].aptname+'</td></tr></table></div></li>';
							}
					}
					
					for (var i=0;i<projects.length;i++)
					{
						markerlist=markerlist+'<li class="mar" style="display: block; top:'+projects[i].yposition+'px; right: '+projects[i].xposition+'px;" id="m_'+projects[i].pid+'"><div id="si_'+projects[i].pid+'" class="box2" style="width:145px; z-index:1000002; " onclick="'+
	(projects[i].completestatus==0 ?  'document.location.href=\'project.php?pid=': 'document.location.href=\'projectcompleted.php?pid=')+projects[i].pid+'\' " ><table style="background-color:#ffffff;font-size:10px !important;line-height:12px;width:20px;margin-left:-50px;position:fixed !important;z-index:9999999 !important;width:145px;"><tr><td style="padding:8px;width:100%;"><img alt="Aparna Constructions, Real Estate Company, Hyderabad, India"  src="'+projects[i].photo+'" width="110px" height="70px"/><td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px !important;"><a href="'+(projects[i].completestatus==0 ?  'project.php?pid=': 'projectcompleted.php?pid=')+projects[i].pid+'" style="color:#0000FF !important;text-align:left !important;color:#465366;">'+projects[i].projectname+'<br>'+projects[i].locationname+'</a></td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px ! important;">'+projects[i].aptname+'</td></tr></table></div></li>';
					}
					
					var mapstr='<img alt="Aparna Constructions, Real Estate Company, Hyderabad, India"  src="'+map+'" height="475px" style="float:right;margin-top:14px;">';
					
					$("#completed").html(pclist); 
					$("#ongoing").html(polist); 
					$("#city").html(citilist); 
					$(".maps").html(markerlist); 
					$(".popmap").html(mapstr); 
					
					
					setTimeout(function(){afterajax()},2000);	
							 
			}
		});
			
			
		
		}
	 
	 
	 
	 function afterajax()
	 {
	 
	  $(".mar").mouseover(function () { 
	 //alert('test');
			var id =($(this).attr('id')).replace("m_","");
			//alert(id);
			//$("#s_"+id).show();
			$("#si_"+id).show();
			$("#l_"+id).addClass('listbg');
			if ($("#m_"+id).hasClass('mar')) {
		$("#m_"+id).removeClass('mar');
		$("#m_"+id).addClass('mara');
		
		div_distance =$(".spane").offset().top;
		div_height = $(".spane").height()+$(".spane").offset().top;
	    ul_height =$(".spane").height();
		api = $(".spane").data('jsp');
		selected_li_height= $("li#l_"+id).offset().top;

				if(selected_li_height > div_height)
				{	
					var height =$(".spane").height()+$('#completed').filter('l_'+id).scrollTop();
					api.scrollToY(parseInt(height));
				}
				else if(selected_li_height > ul_height && selected_li_height < div_height)
				{	
					api.scrollToY(selected_li_height-div_distance);
				}
		
	}
			
		  });
		  
		  $(".mar").mouseout(function () { 
			var id =($(this).attr('id')).replace("m_","");
			
			//$("#s_"+id).hide();
			$("#si_"+id).hide();
			$("#l_"+id).removeClass('listbg');
			if ($("#m_"+id).hasClass('mara')) {
		$("#m_"+id).removeClass('mara');
		$("#m_"+id).addClass('mar');
	}
			
		  });
		
          $(".plist").mouseover(function () {
			var id =($(this).attr('id')).replace("l_","");
			//alert(id);
			$("#s_"+id).show();
			$("#l_"+id).addClass('listbg');
			if ($("#m_"+id).hasClass('mar')) {
		$("#m_"+id).removeClass('mar');
		$("#m_"+id).addClass('mara');
	}
			
		  });
			
			$(".plist").mouseout(function () {
			var id =($(this).attr('id')).replace("l_","");
			//alert(id);
			$("#s_"+id).hide();
			$("#l_"+id).removeClass('listbg');
			if ($("#m_"+id).hasClass('mara')) {
		$("#m_"+id).removeClass('mara');
		$("#m_"+id).addClass('mar');
	}
			
		  });
	 
	 }
	   function ScrollToTop() {
       $('html,body').animate({scrollTop: 0}, 2000);
	   }
        $(document).ready(function () {
	 $(".mar").mouseover(function () { 
	 //alert('test');
			var id =($(this).attr('id')).replace("m_","");
			//alert(id);
			//$("#s_"+id).show();
			$("#si_"+id).show();
			$("#l_"+id).addClass('listbg');
			if ($("#m_"+id).hasClass('mar')) {
		$("#m_"+id).removeClass('mar');
		$("#m_"+id).addClass('mara');
		
		div_distance =$(".spane").offset().top;
		div_height = $(".spane").height()+$(".spane").offset().top;
	    ul_height =$(".spane").height();
		api = $(".spane").data('jsp');
		selected_li_height= $("li#l_"+id).offset().top;
		/*div_distance =$("#drop_list").offset().top;
		div_height = $("#drop_list").height()+$("#drop_list").offset().top;
	    ul_height =$("#drop_list").height();
		selected_li_height= $("li#l_"+id).offset().top;*/
					//alert(div_distance);
					//alert(div_height);
					//alert(ul_height);
					//alert(selected_li_height);
					//alert(div_distance);$("#drop_list ul")[0].scrollHeight;
					//alert(ul_height);
		
				if(selected_li_height > div_height)
				{	
					var height =$(".spane").height()+$('#completed').filter('l_'+id).scrollTop();
					api.scrollToY(parseInt(height));
				}
				else if(selected_li_height > ul_height && selected_li_height < div_height)
				{	
					api.scrollToY(selected_li_height-div_distance);
				}
		
	}
			
		  });
		  
		  $(".mar").mouseout(function () { 
	 
			var id =($(this).attr('id')).replace("m_","");
			
			//$("#s_"+id).hide();
			$("#si_"+id).hide();
			$("#l_"+id).removeClass('listbg');
			if ($("#m_"+id).hasClass('mara')) {
		$("#m_"+id).removeClass('mara');
		$("#m_"+id).addClass('mar');
	}
			
		  });
		
          $(".plist").mouseover(function () {
			var id =($(this).attr('id')).replace("l_","");
			//alert(id);
			$("#s_"+id).show();
			$("#l_"+id).addClass('listbg');
			if ($("#m_"+id).hasClass('mar')) {
		$("#m_"+id).removeClass('mar');
		$("#m_"+id).addClass('mara');
	}
			
		  });
			
			$(".plist").mouseout(function () {
			var id =($(this).attr('id')).replace("l_","");
			//alert(id);
			$("#s_"+id).hide();
			$("#l_"+id).removeClass('listbg');
			if ($("#m_"+id).hasClass('mara')) {
		$("#m_"+id).removeClass('mara');
		$("#m_"+id).addClass('mar');
	}
			
		  });
			
		  
			
            $("#fsLogoImg1").click(function () {
               $("#mappopover").slideToggle("slow");
            });
						
			 $("#fs1").click(function () { 
               $("#mappopover").slideToggle();
			   $('.spane').jScrollPane({
				   showArrows:false,
				   animateScroll: true,
				   animateDuration : 100
				 });
			  
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
				
			   }
			   
			   
			   ScrollToTop();
			   
            });
			
			$("#closediv").click(function () { 
			//	$('#popstatus').val()=0;
               $("#mappopover").slideToggle("slow");
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
		
			
		$('.carousel').carousel({interval: 4000, pause: "false"});
			
        });
		
		$(function(){	
				init();
			 $(window).on('resize', function(){
			 var bottom= window.innerHeight-575;
			  var bottom1= window.innerHeight-750;
			  $('#mappopover').css('bottom', bottom+'px'); //set  height
			 // $('#mappopover1').css('bottom', bottom1+'px'); //set  height
			 }).resize()
			 });
		
		
		function init()
	{
		if (document.addEventListener)
		{
			document.addEventListener("keypress",keypress,false);
		}
		 else if (document.attachEvent)
		{
			document.attachEvent("onkeypress", keypress);	
		}
		else
		{
			document.onkeypress= keypress;
		}
	}
	function keypress(e)
	{	
		if(e.keyCode==37 || e.which==37 || e.charCode==37)
		{
			$("#myCarousel").carousel("prev");
		}
		if(e.keyCode==39 || e.which==39 || e.charCode==39)
		{
			$("#myCarousel").carousel("next");
		}
	}

		</script>
       <?php require_once('header.php'); ?>
	
	  <div class="row removepadding">
	   <div class="col-md-12 removepadding ov">
       <div id="myCarousel" class="carousel slide carousel-fade">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
			<?php
			$status = "active";
			foreach($projects as $key => $project){
			?>
			<div class="item <?=$status?>" style="cursor:pointer;" onclick="openproject(&#39;http://www.aparnaconstructions.com/acl/project.php?pid=79&#39;)">
				<div class="fill" style="background-image:url(<?=$main_images_path.$project['cover_image']?>);"></div>
				<div class="row removepadding">
					<div class="carousel-caption col-md-10 col-md-offset-1 removepadding" style="cursor:pointer;background:url(images/blk_transperent.png) !important; width:100%;">
              			<table width="83%" cellpadding="5" border="0" align="center">
              				<tbody>
              					<tr>
              						<td style="width:80%; text-align:left;" class="removepadding">
			  							<span class="propertyName"><?=$project['project_name']?></span>
              							<span class="propertySecondaryName"><?=$project['area_name']?></span>
			  						</td>
			  						<td nowrap="nowrap" style="width:20%; text-align:right;" class="removepadding propertyPrice" align="right">
										 2&amp;3 BHK/Rs.2349 SFT
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
           			</div>
           		</div>
          </div>
          <?php $status = ""; } ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" style="opacity:1;">
          <span class="icon-prev2" href="#myCarousel" data-slide="prev" style="cursor:pointer;"><img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" src="./scrollL.png"></span>
        </a>
        <a class="right carousel-control" style="opacity:1;">
          <span class="icon-next2" href="#myCarousel" data-slide="next" style="cursor:pointer;"><img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" src="./scrollR.png"></span>
        </a>
    </div>
		</div>
		
		
      </div>
	  
	
	  
	  
	 <div class="row" style="height:44px;" id="divider1">
		  <div class="col-sm-10 col-xs-10 col-md-10 col-lg-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-offset-1">
	  <div class="row">
	 
       <div class="col-md-1  removepadding">
			
				<div id="f1" class="select-dest removepadding">
				<div class="red-div removepadding" id="fs1" style="padding-top:8px;cursor:pointer;">
				<span>ALL PROJECTS &nbsp;&nbsp;&nbsp;<img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" src="./all_properties_arrow_up.png" style="padding-left:5px; width:23px; height:23px; padding-bottom:4px;"> </span>
				</div>
				
				</div>
	   </div>
	   <div class="col-md-8 col-md-offset-3 removepadding">
	   <div class="select-dest1 vam" style="float:right;">
			
			<table border="0">
			<tbody><tr>
				<td>
					<div class="social-plugins" style="padding-top: 3px; padding-left: 0px; margin-right: -2px; display: none;">
					<!-- DEV NOTE: FB set to 80 pixels wide -->
					<div class="fb-wrapper" style="float:left;" data-href="http://www.aparnaconstructions.com/acl/project.php?pid=" data-layout="standard" data-action="like" data-show-faces="true" data-share="true">

								<iframe src="./like.html" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowtransparency="true"></iframe>
			</div>

							
						<!-- DEV NOTE: begin google-plus-wrapper -->
						<!-- Place this tag where you want the +1 button to render -->
						
						<div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1413800865070" name="I0_1413800865070" src="./fastbutton.html" data-gapiattached="true" title="+1"></iframe></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
  
 

</script>

					</div>
			<ul class="smb-list vam">
			<li class="fb" style="display: block;"><a href="https://www.facebook.com/AparnaGroup" target="_blank" class="no_outline"></a></li>
			<li class="tw1" style="display: block;"><a href="https://twitter.com/AparnaGroup" target="_blank" class="no_outline"></a></li>
			<li class="yt1" style="display: block;"><a href="http://www.youtube.com/aparnaconstructions/" class="no_outline" target="_blank"></a></li>
			<li class="rightradious ml1" style="display: block;"><a href="mailto:sales@aparnaconstructions.com" class="no_outline" target="_top"></a></li>
			
			
			
			<!--li class="smb-list-like"></li-->
			</ul>
			</td>
				<td><ul class="smb-list vam"><li class="smb-list-like"><a href="http://www.aparnaconstructions.com/acl/#" class="like-drk no_outline"></a></li></ul></td>
			</tr>
			</tbody></table>	
			
			
	   </div>
	   
	   </div>
	   
	   </div></div>
	 </div>

  <div id="mappopover" style="bottom: 62px;">
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
<img alt="Aparna Constructions, Real Estate Company, Hyderabad, India" src="./map4.png" height="475px" style="float:right;margin-top:14px;"></a>
</div></div>
<div id="closediv"><p id="closeMap" class="tk tk2">Close</p></div>
</section>

<!--div id="markerActive" style="display: none; top: 259px; left: 1123.5px;"></div-->

</div>

</div>
	  
	  
	  <div class="row">
	  <div class="col-sm-10 col-xs-10 col-md-10 col-lg-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-offset-1">
	  <div class="row">
	  <div class="col-md-8" style="padding-top:15px;">
	  
	    <p><span class="maincontentfirst">Welcome</span><br>
		<br>
		<span class="maincontent" style="font-size:14px;">Description Goes Here</span><br><br></p>
	  </div>
	  
	  </div></div>
	  </div>
	<?php require_once('footer.php'); ?>  

	<script src="js/bootstrap.min.js"></script>
    <!--script src="js/modern-business.js"></script-->
	<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script src="js/jquerylazyload.min.js" type="text/javascript"></script>
	<script src="js/retina.min.js"></script>
  

<iframe name="oauth2relay790436878" id="oauth2relay790436878" src="./postmessageRelay.html" tabindex="-1" style="width: 1px; height: 1px; position: absolute; top: -100px;"></iframe></body></html>