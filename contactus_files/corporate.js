

$(document).ready(function () {


 $(".social-plugins").mouseover(function () {
		$(".fb3").hide();
		$(".tw3").hide();
		$(".yt3").hide();
		$(".ml3").hide();
        $(".social-plugins").show();
            });
		$(".social-plugins").mouseout(function () {
        $(".social-plugins").hide();
		$(".fb3").show();
		$(".tw3").show();
		$(".yt3").show();
		$(".ml3").show();
            });
		
		$(".smb-list-like").mouseover(function () { 
		$(".fb3").hide();
		$(".tw3").hide();
		$(".yt3").hide();
		$(".ml3").hide();
        $(".social-plugins").show();
            });
		$(".smb-list-like").mouseout(function () {
        $(".social-plugins").hide();
		$(".fb3").show();
		$(".tw3").show();
		$(".yt3").show();
		$(".ml3").show();
            });
		
			
			
			
			   $(".social-plugins1").mouseover(function () {
        $(".social-plugins1").show();
		$(".fb2").hide();
		$(".tw2").hide();
		$(".yt2").hide();
		$(".ml2").hide();
            });
		$(".social-plugins1").mouseout(function () {
        $(".social-plugins1").hide();
		$(".fb2").show();
		$(".tw2").show();
		$(".yt2").show();
		$(".ml2").show();
            });
		
		$(".smb-list-like1").mouseover(function () { 
        $(".social-plugins1").show();
		$(".fb2").hide();
		$(".tw2").hide();
		$(".yt2").hide();
		$(".ml2").hide();
            });
		$(".smb-list-like1").mouseout(function () {
        $(".social-plugins1").hide();
		$(".fb2").show();
		$(".tw2").show();
		$(".yt2").show();
		$(".ml2").show();
            });


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
	 		  
		  });
		  
		  
		   function ScrollToTop() {
       $('html,body').animate({scrollTop: 0}, 2000);
	   } 
	   
	   
	   
	   
	   function citymap()
		{
		
			city1 =document.getElementById('city').value;
							
			$.ajax({
			type:"POST",
			datatype:"JSON",
            url:"http://202.174.123.96/aparnaCMS/index.php?r=json/getcMapInfo&city="+city1,
           
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
							pclist=pclist+'<li class="plist" id="l_'+projects[i].pid+'" style="cursor:pointer;text-align:left;height:20px;width:100%;">'+projects[i].projectname+'<div id="s_'+projects[i].pid+'" class="box2" style="width:145px; z-index:1000002; " onclick="'+
	(projects[i].completestatus==0 ?  'document.location.href=\'project.php?pid=': 'document.location.href=\'projectcompleted.php?pid=')+projects[i].pid+'\' "><table style="background-color:#ffffff;font-size:10px !important;line-height:12px;width:145px;margin-left:40;position:fixed !important;z-index:9999999 !important;"><tr><td style="padding:8px;width:100%;"><img src="'+projects[i].photo+'" width="110px" height="70px"/><td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px !important;"><a href="projectcompleted.php?pid='+projects[i].pid+'" style="color:#0000FF !important;text-align:left !important;color:#465366;">'+projects[i].projectname+'<br>'+projects[i].locationname+'</a></td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px ! important;">'+projects[i].aptname+'</td></tr></table></div></li>';
							}
	
					}
						
					for (var i=0;i<projects.length;i++)
					{	
						
						if(projects[i].completestatus==0)
							{	
								polist=polist+'<li class="plist" id="l_'+projects[i].pid+'" style="cursor:pointer;text-align:left;height:20px;width:100%;">'+projects[i].projectname+'<div id="s_'+projects[i].pid+'" class="box2" style="width:145px; z-index:1000002; " onclick="'+
	(projects[i].completestatus==0 ?  'document.location.href=\'project.php?pid=': 'document.location.href=\'projectcompleted.php?pid=')+projects[i].pid+'\' " ><table style="background-color:#ffffff;font-size:10px !important;line-height:12px;width:145px;margin-left:40;position:fixed !important;z-index:9999999 !important;"><tr><td style="padding:8px;width:100%;"><img src="'+projects[i].photo+'" width="110px" height="70px"/><td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px !important;"><a href="project.php?pid='+projects[i].pid+'" style="color:#0000FF !important;text-align:left !important;color:#465366;">'+projects[i].projectname+'<br>'+projects[i].locationname+'</a></td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px ! important;">'+projects[i].aptname+'</td></tr></table></div></li>';
							}
					}
					
					for (var i=0;i<projects.length;i++)
					{
						markerlist=markerlist+'<li class="mar" style="display: block; top:'+projects[i].yposition+'px; right: '+projects[i].xposition+'px;" id="m_'+projects[i].pid+'"><span id="si_'+projects[i].pid+'" class="box2" width="145px;" onclick="'+
	(projects[i].completestatus==0 ?  'document.location.href=\'project.php?pid=': 'document.location.href=\'projectcompleted.php?pid=')+projects[i].pid+'\' "><table style="background-color:#ffffff;font-size:10px !important;line-height:12px;width:20px;margin-left:-50px;z-index:10000;width:145px;"><tr><td style="padding:8px;width:100%;"><img src="'+projects[i].photo+'" width="110px" height="70px"/><td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px !important;"><a href="'+(projects[i].completestatus==0 ?  'project.php?pid=': 'projectcompleted.php?pid=')+projects[i].pid+'" style="color:#0000FF !important;text-align:left !important;color:#465366;">'+projects[i].projectname+'<br>'+projects[i].locationname+'</a></td></tr><tr><td style="padding:5px;text-align:left !important;padding-left:10px ! important;">'+projects[i].aptname+'</td></tr></table></span></li>';
					}
					var mapstr='<img src="'+map+'" height="475px" style="float:right;margin-top:14px;">';
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
		  
		