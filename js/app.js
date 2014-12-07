var routerApp = angular.module('AparnaConstructions', ['ui.router','ngSanitize']);

routerApp.config(function($stateProvider, $urlRouterProvider) {
    
   $urlRouterProvider.otherwise('/home');
    
    
       $stateProvider 
        // HOME STATES AND NESTED VIEWS ========================================
       .state('home', {
            url: '/home',
           // templateUrl: 'indexfinal.html',
        })
		.state('Overview', {
            url: '/overview/:pageid/:subpageid',
           templateUrl: 'overview.html',
			controller:'overviewCtrl'
        })
		.state('The Architecture', {
            url: '/architecture/:pageid/:subpageid',
           templateUrl: 'overview.html',
			controller:'overviewCtrl'
        })
		.state('The Interiors', {
            url: '/interiors/:pageid/:subpageid',
           templateUrl: 'overview.html',
			controller:'overviewCtrl'
        })
		.state('The Views', {
            url: '/views/:pageid/:subpageid',
           templateUrl: 'overview.html',
			controller:'overviewCtrl'
        })
		.state('Amenities', {
            url: '/amenities/:pageid/:subpageid',
           templateUrl: 'overview.html',
			controller:'overviewCtrl'
        })
		.state('Property Management', {
            url: '/property-management/:pageid/:subpageid',
           templateUrl: 'overview.html',
			controller:'overviewCtrl'
        })
		.state('Landscape', {
            url: '/landscape/:pageid',
           templateUrl: 'overview.html',
			controller:'overviewCtrl'
        })
		.state('Master Plan', {
			 url: '/master-plan/:pageid/:subpageid',
				templateUrl: 'overview.html',
				controller:'overviewCtrl'
        })
		.state('Floor Plan', {
			 url: '/floor-plan/:pageid/:subpageid',
				templateUrl: 'overview.html',
				controller:'overviewCtrl'
        })
        .state("Specifications", {
            url: '/specifications/:pageid/:subpageid',
           templateUrl: 'overview.html',
			controller:'overviewCtrl'
        })
		.state("Location Map", {
            url: '/locationmap/:pageid/:subpageid',
			views:{
				"googlelink":
				{
					 templateUrl: 'googlemap.html',
					controller:'overviewCtrl'
				}
			},
			controller:'overviewCtrl'
          
        })
});
routerApp.controller("overviewCtrl",function($scope,$rootScope,$sce,$timeout,$http,$stateParams,GetDbDetails,saveDetails,FancyboxService)
	{
	$('#content_1,#mapsscroll').enscroll({
		showOnHover: false,
		verticalTrackClass: 'track3',
		verticalHandleClass: 'handle3'
	});
	$scope.setmodalshow(true);
	$scope.setContactUs(false);
	$scope.sethidestat(true);
	$scope.setshowbutton(false);
	if($scope.getshowmap()==false)
	{
		$scope.setshowmap(true);
		$scope.setshowcaurosal(false);
	}	//alert($scope.getshowmap());
	$scope.pageid=$stateParams.pageid;
	$scope.subpageid=$stateParams.subpageid;
	if($scope.subpageid!=undefined)
	{
		 var projectContent=GetDbDetails.getData("getProjectdetails&pid="+$scope.getPID()+"&pageid="+$scope.pageid+"&subpageid="+$scope.subpageid);
		 projectContent.then(function(result)
		 {
			 //console.log('structuring subpage click'+JSON.stringify(result));
			 if(result.photos.length==1)
			{
				 $scope.ifone=$scope.getPhotos();
				 //console.log("getting images"+JSON.stringify($scope.ifone));
				$scope.ifone.push(result.photos['0']);
				$scope.setPhotos( $scope.ifone);
				/* $scope.photos.push(result.photos);
				  $scope.photos.push(result.photos);*/
				 //console.log("photos"+$scope.photos.length);
			 }
			 else
			 {
				$scope.setPhotos(result.photos);
			 }
			 
			 //console.log(""+result.generalfaq);

			  $scope.project_content=$sce.trustAsHtml(result.pagecontent);
			 
			 $scope.project_content_header=result.pagename;
			  if(result.pagename=="FAQ's"){
				$scope.Faq=true;
				$scope.general=true;
				$scope.finance=false;
				$scope.nri=false;
			 }                 
			 else{ 
				   $scope.Faq=false;
			  }			  
			 //alert($scope.project_content_header);
			 //console.log("subpageheader"+$scope.project_content_header);
			  $scope.setlandingpop(false);	  
			  setTimeout(function(){

			 if(result.pagename=='Location Map'){
			   $scope.project_content=('<div>'+result.pagecontent+'</div>');
				$scope.getMapInfo();
				$scope.locationMap=true;
			   FancyboxService.open($scope.project_content);
			   angular.element('#googlemap').css({display:'block'});
			  
			 }else{
			  angular.element('#myModal').removeClass('fade');
			  angular.element('#myModal').addClass('animated fadeInUp');
			  angular.element('#googlemap').css({display:'none'});
			  angular.element('#modelpopup').trigger('click');
			  angular.element('#myModal').css({display:'block'});
			 }
			  },300);
			  

		 });



	 $scope.getMapInfo=function(){
			 
			var directionsService = new google.maps.DirectionsService(),
			directionsDisplay = new google.maps.DirectionsRenderer(),
			createMap = function (start) {
			//console.log("start"+start.coords);
			var travel = {
						origin : (start.coords)? new google.maps.LatLng($scope.lat,$scope.lng) : start.address,
						destination : "Hitech City,Hyderabad,India",
						travelMode : google.maps.DirectionsTravelMode.DRIVING
						// Exchanging DRIVING to WALKING above can prove quite amusing :-)
					},
					mapOptions = {
						zoom: 10,
						center : new google.maps.LatLng($scope.lat,$scope.lat),
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
						map = new google.maps.Map(document.getElementById("mapcanvas"), mapOptions);
						directionsDisplay.setMap(map);
						directionsDisplay.setPanel(document.getElementById("map-directions"));
						directionsService.route(travel, function(result, status) {
							if (status === google.maps.DirectionsStatus.OK) {
								directionsDisplay.setDirections(result);
								
							}
						});
			};

			// Check for geolocation support              
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function (position) {
				late= position.coords.latitude;
				lone= position.coords.longitude;
				//console.log("latitude"+$scope.lat);
					// Success!
					createMap({
						coords : true,
						lat :late,
						lng : lone
					});
				}, 
				function ()
					{
					// Gelocation fallback: Defaults to Stockholm, Sweden
					createMap
						({
						coords : false,
						address : new google.maps.LatLng($scope.lat,$scope.lng)
						});
					}
				);
			}
			else {
				// No geolocation fallback: Defaults to Lisbon, Portugal
				createMap({
						coords : false,
						address : new google.maps.LatLng($scope.lat,$scope.lon)
				});
			}



		
		
		};

		$scope.showfinance=function(){
			$scope.general=false;
			//alert('hai');
			 angular.element('#finan').css({display:"block"});
			 angular.element('#nri').css({display:"none"});
			}
		$scope.showgeneral=function(){
			$scope.general=true;
			angular.element('#finan').css({display:"none"});
			 angular.element('#nri').css({display:"none"});
		}
		$scope.shownri=function(){
			$scope.general=false;
			angular.element('#finan').css({display:"none"});
			 angular.element('#nri').css({display:"block"});
		}
	}
	else
	{
		var projectContent=GetDbDetails.getData("getProjectdetails&pid="+$scope.getPID()+"&pageid="+$scope.pageid);
		projectContent.then(function(result)
		{
			if(result.photos.length==1)
			{
				 $scope.ifone=$scope.getPhotos();
				 //console.log("getting images"+JSON.stringify($scope.ifone));
				$scope.ifone.push(result.photos['0']);
				$scope.setPhotos($scope.ifone);
				// console.log("photos"+$scope.photos.length);
			 }
			 else
			 {
				$scope.setPhotos(result.photos);
			 }
			 
		 $scope.project_content_header=result.pagename;
		 //console.log("result"+result.pagecontent);

		 $scope.project_content=$sce.trustAsHtml(result.pagecontent);

		if(result.pagename=='Plans'){
			document.getElementById('plans').style.display = "block";
			$scope.planDetails=result;
			$scope.planPhotos=result.planphotos;
			//console.log("plan photo"+$scope.planPhotos[0].vcImage);
			$scope.mainPlanimg=result.planimage;
		 
		  // document.getElementById('landingPopUp').style.display = "none";
			$scope.setlandingpop(false);
			angular.element('#carousel').trigger('click');
			$scope.plans=true;
			$scope.hidelanding=true;
			//alert("plans"+$scope.plans);
			//console.log("plans"+$scope.plans);
		}
		else{
			 setTimeout(function(){
			  
				//angular.element('#landingPopUp').css({display:'none'});
				$scope.setlandingpop(false);
				angular.element('#myModal').removeClass('fade');
				angular.element('#myModal').addClass('animated fadeInUp');
				angular.element('#modelpopup').trigger('click');
				$scope.hidelanding=true;
				angular.element('#myModal').css({display:'block'});
				
			 },300);
		 }
						
		});
	}
	  $scope.minimize=function(){
		$scope.setshowbutton(true);
		$scope.setmodalshow(false);
	 };
	  $scope.closeplans=function(){
	angular.element('#plans').css({display:"none"});
	angular.element('#minimize_box_plans').css({display:"block"});

};
$scope.hide_MinimizeBox_plans=function(bool_minimize)
	{
	angular.element('#plans').css({display:"block"});
	
	angular.element('#minimize_box_plans').css({display:"none"});
}
$scope.hide_MinimizeBox=function(bool_minimize)
	{
	$scope.setshowbutton(false);
		$scope.setmodalshow(true);
}
$scope.goForMap=function()
{

	$scope.setshowmap(false);
	$scope.setshowcaurosal(true);

 angular.element('#maplink').css({display:'block'});
 angular.element('#googlemap').css({display:'none'});                 
 google.maps.event.addListenerOnce(map, 'mousemove', function(){
	google.maps.event.trigger(map, 'resize');
	map.setCenter(new google.maps.LatLng(17.462876, 78.311355));
	map.setZoom(14);
});

};
$scope.goForBack=function(event){
		$scope.setshowmap(true);
		$scope.setshowcaurosal(false);

 angular.element('#googlemap').css({display:'block'});
 angular.element('#maplink').css({display:'none'});

};

});
routerApp.controller("MainCtrl",function($scope,$rootScope,$http,$state,$stateParams,$sce,$timeout,GetDbDetails,FancyboxService,$interval)
                {
					$scope.loading=true;
					$scope.afterloading=false;
           
                $scope.init=function()
                {
								$scope.sethidestat(false);
								angular.element('#stat-box').css({display:'block'});
								$scope.socialgroup=false;
								$scope.socialgrouplike=false;
                                $scope.setContactUs(false);
								$scope.setmodalshow(false);
								$scope.termsdiv=false;
                               // console.log("init");
								$scope.setshowmap(true);
								$scope.setshowcaurosal(false);

                                $scope.bool_minimize=false;
                                $rootScope.projectData=[];
                                $scope.projectData.logo='';
                                $rootScope.MenuHvSubmenu=[];
                                $scope.setPID('17');
                                //GETTING PROJECT DETAILS
                                var myDataPromise=GetDbDetails.getData("getProjectdetails&pid="+$scope.getPID());
                                myDataPromise.then(function(result)
                                {
									//console.log("result"+result);
									$scope.projectData=result;
									$scope.lat=$scope.projectData.projectlatitude;
									$scope.lng=$scope.projectData.projectLongitude;
									$scope.setPhotos($scope.projectData.photos);
									//console.log("photos"+$scope.photos[0].path);
									$scope.propages=$scope.projectData.propages;
									$scope.subpages=$scope.projectData.subpages;
									//console.log("landing image"+$scope.landingimage);
                                                
                                });
                                var projectInfo=GetDbDetails.getData("ProjectStatusImages&pid="+$scope.getPID());
                                projectInfo.then(function(result)
                                {
									//console.log("result"+result);
									$scope.projectImages=result;   
									$scope.proImages=$scope.projectImages.Response;
									//console.log($scope.proImages);
									$scope.loading=false;
									$scope.afterloading=true;
												
                                });
					document.getElementById('afterloadingdiv').style.display = "block";
                 //http://103.241.137.126:8080/aparnaCMS/index.php?r=json/getProjectHomedetails&pid=1
		var projectInfo=GetDbDetails.getData("getProjectHomedetails&pid="+$scope.getPID());
		projectInfo.then(function(result)
		{
			//console.log("result"+result);
			//$scope.statDetails=result;
			$scope.locationnumtext1=result[0].NumText;
			$scope.locationdatatext=result[0].DataText;
			
			$scope.villasnumtext1=result[1].NumText;
			$scope.villasdatatext=result[1].DataText;
			
			$scope.areanumtext1=result[2].NumText;
			$scope.areadatatext=result[2].DataText;
			
			$scope.biludupareannumtext1=result[3].NumText;
			$scope.biludupareadatatext=result[3].DataText;
			
			$scope.familynumtext1=result[4].NumText;
			$scope.familydatatext=result[4].DataText;
			
			$scope.interval_location();
			$scope.interval_villa();
			$scope.interval_area();
			$scope.interval_buildup();
			$scope.interval_family();
			
		});
		var videoImage=GetDbDetails.getData("VideoImage&pid="+$scope.getPID());
		videoImage.then(function(result)
		{
			//console.log('stat video result:'+result);
			$scope.videostatimage=result.vimage;
			
		});
		
	  var stop_location,stop_villa,stop_area,stop_buildup,stop_family;
      $scope.interval_location = function() {

		if($scope.locationnumtext1>10){
		$scope.locationnumtext=$scope.locationnumtext1-10;}
		else{
		$scope.locationnumtext=0;
		}
				// Don't start a new fight if we are already fighting
				if ( angular.isDefined(stop_location) ) return;

			  stop_location = $interval(function() {
			
				if ($scope.locationnumtext==$scope.locationnumtext1) {
					 $scope.stopFight_location();
				} else {
				$scope.locationnumtext++;
				 
				}
			  }, 200);
			};
		 $scope.stopFight_location = function() {
				  if (angular.isDefined(stop_location)) {
					$interval.cancel(stop_location);
					stop_location = undefined;
				  }
    };
	
	 $scope.interval_villa = function() {
	 
	 if($scope.villasnumtext1>20){
		$scope.villasnumtext=$scope.villasnumtext1-20;}
		else{
		$scope.villasnumtext=0;
		}
	 
	  
				// Don't start a new fight if we are already fighting
				if ( angular.isDefined(stop_villa) ) return;

			  stop_villa = $interval(function() {
			 
				if ($scope.villasnumtext==$scope.villasnumtext1) {
					 $scope.stopFight_villa();
				} else {
				$scope.villasnumtext++;
				 
				}
			  }, 100);
			};
		 $scope.stopFight_villa = function() {
				  if (angular.isDefined(stop_villa)) {
					$interval.cancel(stop_villa);
					stop_villa = undefined;
				  }
    };
	
	 $scope.interval_area = function() {
	 //console.log('areanumText'+$scope.areanumtext1);
	
		$scope.areanumtext=$scope.areanumtext1-10;
		
	 
	 
	  
	  //console.log('hidevalue'+$scope.areanumtext);
				// Don't start a new fight if we are already fighting
				if ( angular.isDefined(stop_area) ) return;

			  stop_area = $interval(function() {
			 
				if ($scope.areanumtext==$scope.areanumtext1) {
					 $scope.stopFight_area();
				} else {
				$scope.areanumtext++;
				 
				}
			  }, 100);
			};
		 $scope.stopFight_area = function() {
				  if (angular.isDefined(stop_area)) {
					$interval.cancel(stop_area);
					stop_area = undefined;
				  }
    };
	
	
	
	$scope.interval_buildup = function() {
	
	  
	   if($scope.biludupareannumtext1>20){
		$scope.biludupareannumtext=$scope.biludupareannumtext1-20;
		}
		else{
		  $scope.biludupareannumtext=0;
		}
	  
	  
				// Don't start a new fight if we are already fighting
				if ( angular.isDefined(stop_buildup) ) return;

			  stop_buildup = $interval(function() {
			
				if ($scope.biludupareannumtext==$scope.biludupareannumtext1) {
					 $scope.stopFight_buildup();
				} else {
				$scope.biludupareannumtext++;
				 
				}
			  }, 100);
			};
		 $scope.stopFight_buildup = function() {
				  if (angular.isDefined(stop_buildup)) {
					$interval.cancel(stop_buildup);
					stop_buildup = undefined;
				  }
    };
	
	$scope.interval_family = function() {
	
	  
	   if($scope.familynumtext1>20){
		$scope.familynumtext=$scope.familynumtext1-20;
		}
		else{
		   $scope.familynumtext=0;
		}
	  
				// Don't start a new fight if we are already fighting
				if ( angular.isDefined(stop_family) ) return;

			  stop_family = $interval(function() {
			
				if ($scope.familynumtext==$scope.familynumtext1) {
					 $scope.stopFight_family();
				} else {
				$scope.familynumtext++;
				 
				}
			  }, 100);
			};
		 $scope.stopFight_family = function() {
				  if (angular.isDefined(stop_family)) {
					$interval.cancel(stop_family);
					stop_family = undefined;
				  }
    };
	
	
	

		angular.element('#social1').css({display:'block'});
	angular.element('#social2').css({display:'block'});
	 };
	 
	$scope.hideModal=function(){

	$scope.setmodalshow(false);
	};
	
$scope.showContact_XS_Menu=function(page,pagename){
	var environment=findBootstrapEnvironment();
	console.log('environment'+environment);
	if(environment=='xs'){
 if($rootScope.MenuHvSubmenu.indexOf(page.PageName)!=-1){	
	 }
	 else
	 {	
localStorage.setItem("page", JSON.stringify(page));
localStorage.setItem("pagetitle",pagename);
 window.open('m.html',"_self");
 }
 }else{
 $state.go(page.PageName,{pageid:page.pageId},{reload:true});
 
 }
 }
 $scope.showContact_XS=function(page,pagename){
var environment=findBootstrapEnvironment();
if(environment=='xs'){
	console.log('environment'+environment);
localStorage.setItem("page", JSON.stringify(page));
localStorage.setItem("pagetitle",pagename);
 window.open('m.html',"_self");
 }
 else
 {
	$scope.showContact();
 }
 
 }
  $scope.showContact_XS_subMenu=function(page,pagename){
var environment=findBootstrapEnvironment();
if(environment=='xs'){
	console.log('environment'+environment);
localStorage.setItem("page", JSON.stringify(page));
localStorage.setItem("pagetitle",pagename);
 window.open('m.html',"_self");
 }
 else
 {
	$state.go(page.subpageName,{pageid:page.pageId,subpageid:page.subpageId},{reload:true});
 }
 
 }
	$scope.subpageclick=function(){

	angular.element('.dropdown-menu').css({visibility:'hidden'});
	  
	}
	$scope.menuclick=function(){
	//alert('menu hovering');
	 angular.element('.dropdown-menu').css({visibility:'visible'});
	 } 
		$scope.closeStat=function(){
		//console.log("closing stat");
		$scope.sethidestat(true);
		};		
				//for opening the model
                  $scope.showModal = !$scope.showModal;
                 $scope.show_dialog = function(event) {
                                
                  //document.getElementById('landingPopUp').style.display = "none";
				   $scope.landingpop=false;
                  //  alert(event);
					FancyboxService.open('[rel=statusimages]');
                  //  alert(event);
                   event.preventDefault();
    };

                 $scope.carouselClick=function(id){
                 //console.log("selected Id");
                 };
                 $scope.previous=function(image){
                 //console.log("previous"+image);
                 };
                 $scope.next=function(image){
                 //console.log("next"+image);
                 };
				 
				 $scope.closeStat=function(){
				//console.log("closing stat");
				$scope.sethidestat(true);
				};
                 $scope.showContact=function(){
				 	angular.element('#carousel').trigger('click');
                //alert("showContact"+$scope.contactUs);
					$scope.sethidestat(true);
				$scope.setmodalshow(false);
			
                angular.element('#myModal').css({dispaly:'none'});
                angular.element('#modelpopup').css({dispaly:'none'});
               // document.getElementById('landingPopUp').style.display = "none";
				$scope.landingpop=false;
                angular.element('#contactform').css({display:'block'});
                 $scope.setContactUs(true);
                 };
                $scope.closeLandingPop=function(){
             // document.getElementById('landingPopUp').style.display = "none";
				$scope.setlandingpop(false);
                };
                 $scope.setifMenuHvSub=function(menu,submenu){
                                //console.log(menu.PageName);
                                //console.log("pushing data");
                                if(submenu.PageName==menu.PageName){
                                //console.log("pushing data");
                                $rootScope.MenuHvSubmenu.push(menu.PageName);
                                //console.log("after pushing data"+$rootScope.MenuHvSubmenu.indexOf(menu.PageName));
                                }
                
                 };
				 $scope.subpagearray=[];
			 $scope.setifMenuHvSub_carot=function(menu,submenu){
				var j=0;
					for(i=0;i<submenu.length;i++){
					var sub=submenu[i];
					//console.log('sub'+i+""+sub.PageName);
					
					if(menu.PageName==sub.PageName){
						if(j<1)
						{
						$scope.subpagearray.push(sub.PageName);
						console.log('array'+$scope.subpagearray);
						}
						j++;
					
					}
					
						
					
					}
					
					for(var k=0;k<$scope.subpagearray.length;k++)
					{
						if(menu.PageName==$scope.subpagearray[k])
						{setTimeout(function(){
						  angular.element('#iconc'+menu.pageId).removeClass('caretnone');
						  angular.element('#iconc'+menu.pageId).addClass('caretblock');
							//document.getElementById('iconcarot'+menu.pageId).style.display = "block";
						},1000);
						}
					}
	 };
                 
                 
               
                 $scope.minimize=function(){
                 //alert("minimizing");
                 $scope.bool_minimize=true;
                 }; 
                $scope.hide_MinimizeBox=function(bool_mini){
                 $scope.bool_minimize=false;
                };

				$scope.hide_MinimizeBox_plans=function(bool_mini){
                 $scope.bool_minimize_plans=false;
				 $scope.plans=true;
                };
               
                $scope.detectmob=function() { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
};
 
 
 $scope.showsocial=function()
{
	//alert('over');
	if($scope.detectmob()){}else{
	if($scope.socialgroup==true)
	{
		$scope.socialgroup=false; 
	}
	else
	{
		$scope.socialgroup=true; 
	} 	
}	
}
 $scope.showsocial_tab=function()
{
	//alert('tab');
	if($scope.detectmob()){
	if($scope.socialgroup==true)
	{
		$scope.socialgroup=false; 
		angular.element('#shareicon').css({color:'#428bca'});
	
	}
	else
	{
		$scope.socialgroup=true; 
	} 
}	
}
 $scope.hidesocial=function()
 {
	$scope.socialgroup=false;
 }
 $scope.showsociallike=function()
{	
	if($scope.detectmob()){
	//alert('mobilebrowser');
	}else{
	console.log('not mobilebrowser');
	if($scope.socialgrouplike==true)
	{
		$scope.socialgrouplike=false; 
	}
	else{
	if($scope.socialgrouplike==false)
	{
		$scope.socialgrouplike=true; 
	}
	}
	}
 }
  $scope.showsociallike_tab=function()
{	
if($scope.detectmob()){
//alert('mobile browseraaa');
	if($scope.socialgrouplike==true)
	{
		$scope.socialgrouplike=false; 
	}
	else {
	if($scope.socialgrouplike==false)
	{
		$scope.socialgrouplike=true; 
	}
	}
	}
 }

 $scope.hidesociallike=function()
 {
	 $scope.socialgrouplike=false; 
 }
				 $scope.closeplans=function(){
					$scope.plans=false;
					$scope.bool_minimize_plans=true;

				};
				$scope.homepage=function()
				{
					$scope.landingpop=true;
				}
			
});
routerApp.factory('GetDbDetails',function($http,$q){
                var BaseURL='http://www.aparnaconstructions.com/aparnaCMS/index.php?r=json/';
                var URL='';
                var makeURL=function(type){
                                URL=BaseURL+type;
                               // console.log("URL"+URL);
                };
                
var getData=function(type){
                makeURL(type);
                 var deferred = $q.defer();
                 $http({
                                  method: 'GET',
                                  url: URL
                  }).success(function(data, status, headers, config) {
                                                                 // console.log("SUCCESS");
                                    deferred.resolve(data);
                                }).error(function(data, status, headers, config) {
                                                                //console.log("ERROR");
                                                                deferred.resolve(data);                                                                
                                });
                                                  return deferred.promise;
                                                };
                                                  return {
                                                    getData: getData
                                                  };

});
routerApp.factory('saveDetails',function($http,$q){
                var BaseURL='http://www.aparnaconstructions.com/aparnaCMS/index.php?r=json/';
                var URL='';
                var saveData=function(type){
                URL=BaseURL+type;
                 var deferred = $q.defer();
                 $http({
                                  method: 'GET',
                                  url: URL
                  }).success(function(data, status, headers, config) {
                                                                  //console.log("SUCCESS");
                                    deferred.resolve(data);
                                }).error(function(data, status, headers, config) {
                                                                //console.log("ERROR");
                                                                deferred.resolve(data);                                                                
                                });
                                                  return deferred.promise;
                                                };
                                                  return {
                                                    saveData: saveData
                                                  };

});
//GLOBAL FUNCTION TO SET/GET PID
  routerApp.run(function($rootScope)
	{
	  $rootScope.setPID=function(pid){
					  $rootScope.pid=pid;
	  };
	   $rootScope.getPID=function(){
					  return $rootScope.pid;
	  };
	   $rootScope.setBrouchers=function(pid){
					  $rootScope.brouchers=pid;
	  };
	   $rootScope.getBrouchers=function(){
					  return $rootScope.brouchers;
	  };
		$rootScope.setContactUs=function(pid){
					  $rootScope.contactUs=pid;
	  };
	   $rootScope.getContactUs=function(){
					  return $rootScope.contactUs;
	  };
	  $rootScope.setlandingpop=function(pid){
					  $rootScope.landingpop=pid;
	  };
	   $rootScope.getlandingpop=function(){
					  return $rootScope.landingpop;
	  };
	   $rootScope.setPhotos=function(pid){
					  $rootScope.photos=pid;
	  };
	   $rootScope.getPhotos=function(){
					  return $rootScope.photos;
	  };
	  $rootScope.setshowbutton=function(value){
			$rootScope.showbutton=value;
	  };
	   $rootScope.getshowbutton=function(){
					  return $rootScope.showbutton;
	  };
	   $rootScope.setshowmap=function(value){
			$rootScope.showmap=value;
	  };
	   $rootScope.getshowmap=function(){
					  return $rootScope.showmap;
	  };
	$rootScope.setshowcaurosal=function(value){
	$rootScope.showcaurosal=value;
	  };
	   $rootScope.getshowcaurosal=function(){
					  return $rootScope.showcaurosal;
	  };
		$rootScope.setmodalshow=function(value){
			$rootScope.modalshow=value;
	  };
	   $rootScope.getmodalshow=function(){
					  return $rootScope.modalshow;
	  };
	  $rootScope.sethidestat=function(value){
			$rootScope.hidestat=value;
	  };
	   $rootScope.gethidestat=function(){
					  return $rootScope.hidestat;
	  };
	  $rootScope.setnrifaqcontent=function(value){
			$rootScope.nrifaqcontent=value;
	  };
	   $rootScope.getnrifaqcontent=function(){
					  return $rootScope.nrifaqcontent;
	  };
	   $rootScope.validateemail=function(email)
		 {
		  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		  if(email=="")
		  {
				return true;
		  }else
		  {
			  if (reg.test(email))
			  {
			 // console.log("email valid");
				return true;
			  } else {
		   //console.log("email not valid");
			return false;
				}
		  }
	  };

});

                
routerApp.controller('contactusCtrl',function($scope,$rootScope,$http,$sce,$timeout,saveDetails)
 {              
	 if($scope.errordisplaying)
	 {
		$scope.errordisplaying=false;
	 }
                                
                                //country array
     $scope.countryArray = [ { ID :"93 "  ,Name :"Afghanistan"},
    { ID :"355 "  ,Name :"Albania"},
    { ID :"213 "  ,Name :"Algeria"},
    { ID :"1684 "  ,Name :"American Samoa"},
    { ID :"376 "  ,Name :"Andorra"},
    { ID :"244 "  ,Name :"Angola"},
    { ID :"1264 "  ,Name :"Anguilla"},
    { ID :"672"  ,Name :"Antarctica"},
    { ID :"1268 "  ,Name :"Antigua and Barbuda"},
    { ID :"54 "  ,Name :"Argentina"},
    { ID :"374 "  ,Name :"Armenia"},
    { ID :"297 "  ,Name :"Aruba"},
    { ID :"61 "  ,Name :"Australia"},
    { ID :"43 "  ,Name :"Austria"},
    { ID :"994"  ,Name :"Azerbaijan"},
    { ID :"1242 "  ,Name :"Bahamas"},
    { ID :"973 "  ,Name :"Bahrain"},
    { ID :"880 "  ,Name :"Bangladesh"},
    { ID :"1246 "  ,Name :"Barbados"},
    { ID :"375 "  ,Name :"Belarus"},
    { ID :"32 "  ,Name :"Belgium"},
    { ID :"501 "  ,Name :"Belize"},
    { ID :"229 "  ,Name :"Benin"},
    { ID :"1441 "  ,Name :"Bermuda"},
    { ID :"975 "  ,Name :"Bhutan"},
    { ID :"591 "  ,Name :"Bolivia"},
    { ID :"387"  ,Name :"Bosnia and Herzegovina"},
    { ID :"267 "  ,Name :"Botswana"},
    { ID :"55 "  ,Name :"Brazil"},
    { ID :"246 "  ,Name :"British Indian Ocean Territory"},
    { ID :"1284 "  ,Name :"British Virgin Islands"},
    { ID :"673 "  ,Name :"Brunei"},
    { ID :"359 "  ,Name :"Bulgaria"},
    { ID :"226 "  ,Name :"Burkina Faso"},
    { ID :"95 "  ,Name :"Burma (Myanmar)"},
    { ID :"257 "  ,Name :"Burundi"},
    { ID :"855 "  ,Name :"Cambodia"},
    { ID :"237 "  ,Name :"Cameroon"},
    { ID :"1 "  ,Name :"Canada"},
    { ID :"238 "  ,Name :"Cape Verde"},
    { ID :"1345 "  ,Name :"Cayman Islands"},
    { ID :"236 "  ,Name :"Central African Republic"},
    { ID :"235 "  ,Name :"Chad"},
    { ID :"56 "  ,Name :"Chile"},
    { ID :"86 "  ,Name :"China"},
    { ID :"61 "  ,Name :"Christmas Island"},
    { ID :"61 "  ,Name :"Cocos (Keeling) Islands"},
    { ID :"57 "  ,Name :"Colombia"},
    { ID :"269 "  ,Name :"Comoros"},
    { ID :"682 "  ,Name :"Cook Islands"},
    { ID :"506 "  ,Name :"Costa Rica"},
    { ID :"385 "  ,Name :"Croatia"},
    { ID :"53"  ,Name :"Cuba"},
    { ID :"357 "  ,Name :"Cyprus"},
    { ID :"420 "  ,Name :"Czech Republic"},
    { ID :"243 "  ,Name :"Democratic Republic of the Congo"},
    { ID :"45 "  ,Name :"Denmark"},
    { ID :"253 "  ,Name :"Djibouti"},
    { ID :"1767 "  ,Name :"Dominica"},
    { ID :"1809 "  ,Name :"Dominican Republic"},
    { ID :"593 "  ,Name :"Ecuador"},
    { ID :"20 "  ,Name :"Egypt"},
    { ID :"503 "  ,Name :"El Salvador"},
    { ID :"240 "  ,Name :"Equatorial Guinea"},
    { ID :"291 "  ,Name :"Eritrea"},
    { ID :"372 "  ,Name :"Estonia"},
    { ID :"251 "  ,Name :"Ethiopia"},
    { ID :"500 "  ,Name :"Falkland Islands"},
    { ID :"298 "  ,Name :"Faroe Islands"},
    { ID :"679 "  ,Name :"Fiji"},
    { ID :"358 "  ,Name :"Finland"},
    { ID :"33"  ,Name :"France"},
    { ID :"689 "  ,Name :"French Polynesia"},
    { ID :"241 "  ,Name :"Gabon"},
    { ID :"220 "  ,Name :"Gambia"},
    { ID :"970 "  ,Name :"Gaza Strip"},
    { ID :"995 "  ,Name :"Georgia"},
    { ID :"49 "  ,Name :"Germany"},
    { ID :"233 "  ,Name :"Ghana"},
    { ID :"350 "  ,Name :"Gibraltar"},
    { ID :"30 "  ,Name :"Greece"},
    { ID :"299 "  ,Name :"Greenland"},
    { ID :"1473 "  ,Name :"Grenada"},
    { ID :"1671 "  ,Name :"Guam"},
    { ID :"502 "  ,Name :"Guatemala"},
    { ID :"224 "  ,Name :"Guinea"},
    { ID :"245 "  ,Name :"Guinea-Bissau"},
    { ID :"592 "  ,Name :"Guyana"},
    { ID :"509 "  ,Name :"Haiti"},
    { ID :"39 "  ,Name :"Holy See (Vatican City)"},
    { ID :"504 "  ,Name :"Honduras"},
    { ID :"852 "  ,Name :"Hong Kong"},
    { ID :"36 "  ,Name :"Hungary"},
    { ID :"354 "  ,Name :"Iceland"},
    { ID :"91 "  ,Name :"India"},
    { ID :"62 "  ,Name :"Indonesia"},
    { ID :"98 "  ,Name :"Iran"},
    { ID :"964 "  ,Name :"Iraq"},
    { ID :"353 "  ,Name :"Ireland"},
    { ID :"44 "  ,Name :"Isle of Man"},
    { ID :"972 "  ,Name :"Israel"},
    { ID :"39 "  ,Name :"Italy"},
    { ID :"225 "  ,Name :"Ivory Coast"},
    { ID :"1876 "  ,Name :"Jamaica"},
    { ID :"81 "  ,Name :"Japan"},
    { ID :"44 "  ,Name :"Jersey"},
    { ID :"962 "  ,Name :"Jordan"},
    { ID :"7 "  ,Name :"Kazakhstan"},
    { ID :"254 "  ,Name :"Kenya"},
    { ID :"686 "  ,Name :"Kiribati"},
    { ID :"381 "  ,Name :"Kosovo"},
    { ID :"965 "  ,Name :"Kuwait"},
    { ID :"996 "  ,Name :"Kyrgyzstan"},
    { ID :"856 "  ,Name :"Laos"},
    { ID :"371 "  ,Name :"Latvia"},
    { ID :"961 "  ,Name :"Lebanon"},
    { ID :"266 "  ,Name :"Lesotho"},
    { ID :"231 "  ,Name :"Liberia"},
    { ID :"218 "  ,Name :"Libya"},
    { ID :"423 "  ,Name :"Liechtenstein"},
    { ID :"370 "  ,Name :"Lithuania"},
    { ID :"352 "  ,Name :"Luxembourg"},
    { ID :"853 "  ,Name :"Macau"},
    { ID :"389 "  ,Name :"Macedonia"},
    { ID :"261 "  ,Name :"Madagascar"},
    { ID :"265 "  ,Name :"Malawi"},
    { ID :"60 "  ,Name :"Malaysia"},
    { ID :"960 "  ,Name :"Maldives"},
    { ID :"223 "  ,Name :"Mali"},
    { ID :"356 "  ,Name :"Malta"},
    { ID :"692 "  ,Name :"Marshall Islands"},
    { ID :"222 "  ,Name :"Mauritania"},
    { ID :"230 "  ,Name :"Mauritius"},
    { ID :"262 "  ,Name :"Mayotte"},
    { ID :"52 "  ,Name :"Mexico"},
    { ID :"691 "  ,Name :"Micronesia"},
    { ID :"373 "  ,Name :"Moldova"},
    { ID :"377 "  ,Name :"Monaco"},
    { ID :"976 "  ,Name :"Mongolia"},
    { ID :"382 "  ,Name :"Montenegro"},
    { ID :"1664 "  ,Name :"Montserrat"},
    { ID :"212 "  ,Name :"Morocco"},
    { ID :"258 "  ,Name :"Mozambique"},
    { ID :"264 "  ,Name :"Namibia"},
    { ID :"674 "  ,Name :"Nauru"},
    { ID :"977 "  ,Name :"Nepal"},
    { ID :"31 "  ,Name :"Netherlands"},
    { ID :"599 "  ,Name :"Netherlands Antilles"},
    { ID :"687 "  ,Name :"New Caledonia"},
    { ID :"64 "  ,Name :"New Zealand"},
    { ID :"505 "  ,Name :"Nicaragua"},
    { ID :"227 "  ,Name :"Niger"},
    { ID :"234 "  ,Name :"Nigeria"},
    { ID :"683 "  ,Name :"Niue"},
    { ID :"672 "  ,Name :"Norfolk Island"},
    { ID :"850 "  ,Name :"North Korea"},
    { ID :"1670 "  ,Name :"Northern Mariana Islands"},
    { ID :"47 "  ,Name :"Norway"},
    { ID :"968 "  ,Name :"Oman"},
    { ID :"92 "  ,Name :"Pakistan"},
    { ID :"680 "  ,Name :"Palau"},
    { ID :"507 "  ,Name :"Panama"},
    { ID :"675 "  ,Name :"Papua New Guinea"},
    { ID :"595 "  ,Name :"Paraguay"},
    { ID :"51 "  ,Name :"Peru"},
    { ID :"63 "  ,Name :"Philippines"},
    { ID :"870 "  ,Name :"Pitcairn Islands"},
    { ID :"48 "  ,Name :"Poland"},
    { ID :"351 "  ,Name :"Portugal"},
    { ID :"1 "  ,Name :"Puerto Rico"},
    { ID :"974 "  ,Name :"Qatar"},
    { ID :"242 "  ,Name :"Republic of the Congo"},
    { ID :"40 "  ,Name :"Romania"},
    { ID :"7 "  ,Name :"Russia"},
    { ID :"250 "  ,Name :"Rwanda"},
    { ID :"590 "  ,Name :"Saint Barthelemy"},
    { ID :"290 "  ,Name :"Saint Helena"},
    { ID :"1869 "  ,Name :"Saint Kitts and Nevis"},
    { ID :"1758 "  ,Name :"Saint Lucia"},
    { ID :"1599 "  ,Name :"Saint Martin"},
    { ID :"508 "  ,Name :"Saint Pierre and Miquelon"},
    { ID :"1784 "  ,Name :"Saint Vincent and the Grenadines"},
    { ID :"685 "  ,Name :"Samoa"},
    { ID :"378 "  ,Name :"San Marino"},
    { ID :"239 "  ,Name :"Sao Tome and Principe"},
    { ID :"966 "  ,Name :"Saudi Arabia"},
    { ID :"221 "  ,Name :"Senegal"},
    { ID :"381 "  ,Name :"Serbia"},
    { ID :"248 "  ,Name :"Seychelles"},
    { ID :"232 "  ,Name :"Sierra Leone"},
    { ID :"65"  ,Name :"Singapore"},
    { ID :"421 "  ,Name :"Slovakia"},
    { ID :"386 "  ,Name :"Slovenia"},
    { ID :"677 "  ,Name :"Solomon Islands"},
    { ID :"252 "  ,Name :"Somalia"},
    { ID :"27 "  ,Name :"South Africa"},
    { ID :"82 "  ,Name :"South Korea"},
    { ID :"34 "  ,Name :"Spain"},
    { ID :"94 "  ,Name :"Sri Lanka"},
    { ID :"249 "  ,Name :"Sudan"},
    { ID :"597 "  ,Name :"Suriname"},
    { ID :"47"  ,Name :"Svalbard"},
    { ID :"268 "  ,Name :"Swaziland"},
    { ID :"46 "  ,Name :"Sweden"},
    { ID :"41 "  ,Name :"Switzerland"},
    { ID :"963 "  ,Name :"Syria"},
    { ID :"886 "  ,Name :"Taiwan"},
    { ID :"992 "  ,Name :"Tajikistan"},
    { ID :"255 "  ,Name :"Tanzania"},
    { ID :"66 "  ,Name :"Thailand"},
    { ID :"670 "  ,Name :"Timor-Leste"},
    { ID :"228 "  ,Name :"Togo"},
    { ID :"690 "  ,Name :"Tokelau"},
    { ID :"676 "  ,Name :"Tonga"},
    { ID :"1868 "  ,Name :"Trinidad and Tobago"},
    { ID :"216 "  ,Name :"Tunisia"},
    { ID :"90 "  ,Name :"Turkey"},
    { ID :"993 "  ,Name :"Turkmenistan"},
    { ID :"1649 "  ,Name :"Turks and Caicos Islands"},
    { ID :"688 "  ,Name :"Tuvalu"},
    { ID :"256 "  ,Name :"Uganda"},
    { ID :"380 "  ,Name :"Ukraine"},
    { ID :"971 "  ,Name :"United Arab Emirates"},
    { ID :"44 "  ,Name :"United Kingdom"},
    { ID :"1 "  ,Name :"United States"},
    { ID :"598 "  ,Name :"Uruguay"},
    { ID :"1340 "  ,Name :"US Virgin Islands"},
    { ID :"998 "  ,Name :"Uzbekistan"},
    { ID :"678 "  ,Name :"Vanuatu"},
    { ID :"58"  ,Name :"Venezuela"},
    { ID :"84 "  ,Name :"Vietnam"},
    { ID :"681 "  ,Name :"Wallis and Futuna"},
    { ID :"970 "  ,Name :"West Bank"},
    { ID :"212 "  ,Name :"Western Sahara"},
    { ID :"967 "  ,Name :"Yemen"},
    { ID :"260 "  ,Name :"Zambia"},
    { ID :"263 "  ,Name :"Zimbabwe"}];
                
                                $scope.phcode="+91";
                
                                $scope.validation_error="";
                                $scope.hearing="Newspaper Ad";
                                $scope.timeframe='Immediately';
                                
                                $scope.getCountryCode=function(countrys){
                                //alert("ss"+countrys);
                                //alert("countrycode"+countrys.ID);
                                $scope.phcode="+"+countrys.ID;
                                }
                                $scope.closeContactUs=function(){
                                //alert("closing");
                                $scope.setContactUs(false);
								$scope.modalshow=true;
                                };
                                //alert("contactus Ctrl");
                                $scope.submit=function(){
                                if($scope.name==""||$scope.name==undefined){
                                $scope.errordisplaying=true;
                                $scope.validation_error='Please Enter Name';
                                }else if($scope.email==""||$scope.email==undefined){
                                //console.log("email checking");
                                //alert("email checking"+$scope.email);
                                $scope.errordisplaying=true;
                                $scope.validation_error='Please Enter Email';
                                //alert("validatiung");
                                }else if(!$rootScope.validateemail($scope.email)){
                                $scope.errordisplaying=true;
                                $scope.validation_error='Please Enter Valid Email';
                                }
                                else if($scope.city==""||$scope.city==undefined){
                                $scope.errordisplaying=true;
                                $scope.validation_error='Please Enter City';
                                }
                                else if($scope.phone==""||$scope.phone==undefined)
								{
								$scope.errordisplaying=true;
								$scope.validation_error='Please Enter Valid MobileNumber';
								}
								else if($scope.phone.length!=10)
								{
								$scope.errordisplaying=true;
								$scope.validation_error='Please Enter Valid MobileNumber';
								}
								else if(isNaN($scope.phone))
								{
								$scope.errordisplaying=true;
								$scope.validation_error='Please Enter Valid MobileNumber';
								}              
                                else if($scope.comments==''||$scope.comments==undefined)
                                {
									$scope.errordisplaying=true;
									$scope.validation_error='Please Enter Comments';
                                }
                                else{
                                $scope.errordisplaying=false;
                                }
                                if(!$scope.errordisplaying){
                                //alert('submitting');
                                if($scope.landcode==""||$scope.landcode==undefined){
                                $scope.landcode='';
                                }
                                if($scope.landno==undefined){
                                $scope.landno='';
                                }
                                //alert("country"+$scope.scountry.Name);
                                if($scope.scountry==undefined){
                                country="India";
                                }else{
                                country=$scope.scountry.Name;
                                }
                                var myDataPromise=saveDetails.saveData("StoreContactdtls&pid="+$scope.getPID()+"&name="+$scope.name+"&country="+country+"&email="+$scope.email+"&phone="+$scope.phcode+$scope.phone+"&landline="+$scope.landcode+$scope.landno+"&type=contact&hearing="+$scope.hearing+"&timeframe="+$scope.timeframe+"&city="+$scope.city);
                                
                                myDataPromise.then(function(result)
                                {
                                               // console.log("contactus"+result);
                                
                                                alert("Thank you for Contacting Us.");
												$scope.name='';
												$scope.country='India';
												$scope.email='';
												$scope.city='';
												$scope.phone="";
												$scope.landcode="";
												$scope.hearing="";
												$scope.timeframe="";
												$scope.comments="";
												$scope.errordisplaying=false;
                                                $scope.validation_error='';
                                                $scope.setContactUs(false);
                                                
                                });
                                };
                                }
                                });

routerApp.factory('FancyboxService', function() {
    return {
        open: function(selector) {
                                //alert("fsdgf"+selector);
                                $.fancybox.open([{openMethod:'animated ZoomIn',openSpeed:4000,closeMethod:'animated ZoomOut',closeSpeed:4000}]);
            $.fancybox.open($(selector));
                                                
                                                //alert("opend");
        },
        close: function() {
                                //alert('close');
            $.fancybox.close();
        }
    };
});
routerApp.controller("MainxsCtrl",function($scope,$rootScope,$http,$sce,$timeout,GetDbDetails,FancyboxService,saveDetails)
{	
		
		$scope.loading='true';
		$scope.afterloading=false;
		$scope.setPID('17');
		//GETTING PROJECT DETAILS
		var myDataPromise=GetDbDetails.getData("getProjectdetails&pid="+$scope.getPID());
		myDataPromise.then(function(result)
		{
			$scope.projectData=result;
			$scope.lat=$scope.projectData.projectlatitude;
			$scope.lng=$scope.projectData.projectLongitude;
			
			$scope.tempPhoto=[];
				for(i=0;i<$scope.projectData.photos.length;i++){
				if($scope.projectData.photos[i].path==''){
				
				}else{
				$scope.tempPhoto.push($scope.projectData.photos[i]);
				}
				}
				
				$scope.setPhotos($scope.tempPhoto);
			
			$scope.bannerImage=$scope.tempPhoto[0].path;
			$scope.propages=$scope.projectData.propages;
			$scope.subpages=$scope.projectData.subpages;
			$scope.landingimage=$scope.projectData.project[0].landingimage;
			
						
		});
	$scope.init=function()
	{	
	if($scope.detectmob_iphone){
		//alert('iphone');		
		$(document).on('focus', 'input, textarea', function() 
		{
		//alert('iphone');
		angular.element(".footer").css({display:'none'});
		});

		$(document).on('blur', 'input, textarea', function() 
		{
		angular.element(".footer").css({display:'block'});
		});
		}
		
	
		$scope.setlandingpop(true);
		$scope.socialgroup=false;
		$scope.socialgrouplike=false;
		$scope.setContactUs(false);
		$scope.setmodalshow(false);
		$scope.termsdiv=true;
		
		$scope.setshowmap(true);
		$scope.setshowcaurosal(false);

		$scope.setshowbutton(false);
		console.log('elment page'+(localStorage.getItem("page")));
		var bridgevar=localStorage.getItem("page");
		var bridgevartitle=localStorage.getItem("pagetitle");
	
		if(bridgevartitle=='contactus')
		{
		$scope.pageHeader='contact us';
		//$scope.bannerImage='images/aboutImage.jpg';
		
		$scope.showContact=true;
		console.log('contactus--undefined');
		}
		else if(bridgevartitle=='menu')
		{
		console.log('menu bridgevar');
			$scope.menuclick(JSON.parse(bridgevar));
		}
		else if(bridgevartitle=='submenu')
		{
		$scope.subpageclick(JSON.parse(bridgevar));
			console.log('submenu bridgevar');
		}
		
		$rootScope.projectData=[];
		$scope.projectData.logo='';
		$rootScope.MenuHvSubmenu=[];
		
		
		var projectInfo=GetDbDetails.getData("ProjectStatusImages&pid="+$scope.getPID());
		projectInfo.then(function(result)
		{
			
			$scope.projectImages=result;   
			$scope.proImages=$scope.projectImages.Response;
			
			$scope.loading=false;
			angular.element('body').css({background:'#fff'});
			$scope.afterloading=true;
			document.getElementById('afterloadingdiv').style.display = "block";
						
		});
		angular.element('#social1').css({display:'block'});
		angular.element('#social2').css({display:'block'});
		
	};
	$scope.subpagearray=[];
	$scope.setifMenuHvSub_carot=function(menu,submenu){
	//alert('hi');
		var j=0;
		for(i=0;i<submenu.length;i++){
		var sub=submenu[i];
		//console.log('sub'+i+""+sub.PageName);
		
		if(menu.PageName==sub.PageName){
			if(j<1)
			{
			$scope.subpagearray.push(sub.PageName);
			console.log('array'+$scope.subpagearray);
			}
			j++;
		
		}
		}
		//alert(''+$scope.subpagearray);
		for(var k=0;k<$scope.subpagearray.length;k++)
		{
			
			if(menu.PageName==$scope.subpagearray[k])
			{
			
			setTimeout(function(){				
			  angular.element('#iconc'+menu.pageId).removeClass('caretnone');
			  angular.element('#iconc'+menu.pageId).addClass('caretblock');
				//document.getElementById('iconcarot'+menu.pageId).style.display = "block";
			},1000);
			}
		}
	
	 };
	
	$scope.subpageclick=function(submenu){
		$scope.loading='true';
		$scope.afterloading=false;
	 console.log('form main ctrl to xs'+JSON.stringify(submenu));
	$scope.subpageid=submenu.subpageId;
	$scope.pageid=submenu.pageId;
	$scope.pid=submenu.pid;
	//alert('subpageid'+$scope.subpageid+"\n"+$scope.pageid+"\n"+$scope.pid);
	if(submenu.subpageName=='Downloads'){
	//alert('downloads');
	angular.element('body').trigger('click');
	$scope.showContact=false;
	$scope.showSubMenu=false
	$scope.showPlans=false;
	$scope.showFAQ=false;
	$scope.showMaps=false;
	$scope.showdownloads=true;
	$scope.downloadsdiv=true;
	$scope.termsdiv=true;
	$scope.pageHeader='Downloads';
	$scope.showDownloads=true;
	//$scope.bannerImage='images/aboutImage.jpg';
	$scope.loading=false;
		angular.element('body').css({background:'#fff'});
		$scope.afterloading=true;
		document.getElementById('afterloadingdiv').style.display = "block";

	}
	else if($scope.subpageid!=undefined)
	{
		 var projectContent=GetDbDetails.getData("getProjectdetails&pid="+$scope.pid+"&pageid="+$scope.pageid+"&subpageid="+$scope.subpageid);
		 projectContent.then(function(result)
		 {
			
			$scope.bannerImage=result.photos[0].path;
		    angular.element('body').trigger('click');
			console.log('result'+result);
			$scope.pageHeader=submenu.subpageName;
			$scope.project_content_header=result.pagename;
			  if(result.pagename=="FAQ's"){
				//alert('FAQ');	
				console.log('faq--baner image'+result.photos[0].path);
				$scope.showContact=false;
				$scope.showSubMenu=false
				$scope.showPlans=false;				
				$scope.showDownloads=false;
				$scope.showMaps=false;
				$scope.showFAQ=true;
				$scope.bindHtmlContent=$sce.trustAsHtml(result.pagecontent);
				$scope.general=true;
				$scope.finance=false;
				$scope.nri=false;
				$scope.generalfaqcontent=$sce.trustAsHtml(result.generalfaq);
				$scope.setfinancialfaqcontent($sce.trustAsHtml(result.financefaq));			
				$scope.setnrifaqcontent($sce.trustAsHtml(result.nrifaq));
				$scope.loading=false;
		angular.element('body').css({background:'#fff'});
		$scope.afterloading=true;
		document.getElementById('afterloadingdiv').style.display = "block";
				
			  
			 }   
			 else if(result.pagename=='Location Map')
			 {	
			   //alert('maps');
			 	$scope.showContact=false;
				$scope.showSubMenu=false
				$scope.showPlans=false;
				$scope.showFAQ=false;
				$scope.showDownloads=false;				
				$scope.bindHtmlContent=$sce.trustAsHtml(result.pagecontent);
			    $scope.getMapInfo();			   
				$scope.showMaps=true;
				$scope.mapImage=true;
				$scope.googlemaplink=true;
				$scope.maplink=false;
				$scope.loading=false;
		angular.element('body').css({background:'#fff'});
		$scope.afterloading=true;
		document.getElementById('afterloadingdiv').style.display = "block";
				
			  
			 }
			 else{	
				$scope.showContact=false;				
				$scope.showPlans=false;
				$scope.showFAQ=false;
				$scope.showDownloads=false;
				$scope.showMaps=false;
				$scope.showSubMenu=true;
				$scope.bindHtmlContent=$sce.trustAsHtml(result.pagecontent);
				$scope.loading=false;
		angular.element('body').css({background:'#fff'});
		$scope.afterloading=true;
		document.getElementById('afterloadingdiv').style.display = "block";
				}
				
		 });
				
	}
		
	};

	$scope.menuclick=function(menu){
	//alert('menuClick');
	if($rootScope.MenuHvSubmenu.indexOf(menu.PageName)!=-1){
	
	 }
	 else{
	 	$scope.loading='true';
		$scope.afterloading=false;
	var projectContent=GetDbDetails.getData("getProjectdetails&pid="+$scope.getPID()+"&pageid="+menu.pageId);
	projectContent.then(function(result)
	{
	 angular.element('body').trigger('click');
	 $scope.pageHeader=menu.PageName;
		  if(result.photos.length!=0){
		$scope.photos=result.photos;
		//$scope.bannerImage='images/aboutImage.jpg';
		}else{
		$scope.bannerImage=result.photos[0].path;
		}
	 $scope.project_content_header=menu.PageName;
	 if(result.pagename=='Plans'){
			//alert('plans');
			$scope.showContact=false;
			$scope.showSubMenu=false;			
			$scope.showFAQ=false;
			$scope.showDownloads=false;
			$scope.showMaps=false;
			$scope.showPlans=true;
			document.getElementById('plans').style.display = "block";
			$scope.planDetails=result;
			$scope.planPhotos=result.planphotos;
			$scope.mainPlanimg=result.planimage;
			$scope.setlandingpop(false);
			console.log("plans"+$scope.plans);
			$scope.loading=false;
			angular.element('body').css({background:'#fff'});
			$scope.afterloading=true;
			document.getElementById('afterloadingdiv').style.display = "block";
			}
			else{
			$scope.showContact=false;			
			$scope.showPlans=false;
			$scope.showFAQ=false;
			$scope.showDownloads=false;
			$scope.showMaps=false;
			$scope.showSubMenu=true;
			console.log("result"+result.pagecontent);
			$scope.bindHtmlContent=$sce.trustAsHtml(result.pagecontent);
			$scope.loading=false;
			angular.element('body').css({background:'#fff'});
			$scope.afterloading=true;
			document.getElementById('afterloadingdiv').style.display = "block";

		}
	 
	 });
	 }
	 };
	  $scope.getMapInfo=function(){
			
			var directionsService = new google.maps.DirectionsService(),
			directionsDisplay = new google.maps.DirectionsRenderer(),
			createMap = function (start) {
			
			var travel = {
						origin : (start.coords)? new google.maps.LatLng($scope.lat,$scope.lng) : start.address,
						destination : "Hitech City,Hyderabad,India",
						travelMode : google.maps.DirectionsTravelMode.DRIVING
						// Exchanging DRIVING to WALKING above can prove quite amusing :-)
					},
					mapOptions = {
						zoom: 10,
						center : new google.maps.LatLng($scope.lat,$scope.lat),
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
						map = new google.maps.Map(document.getElementById("mapcanvas"), mapOptions);
						directionsDisplay.setMap(map);
						directionsDisplay.setPanel(document.getElementById("map-directions"));
						directionsService.route(travel, function(result, status) {
							if (status === google.maps.DirectionsStatus.OK) {
								directionsDisplay.setDirections(result);
								
							}
						});
			};

			// Check for geolocation support              
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function (position) {
				late= position.coords.latitude;
				lone= position.coords.longitude;
			
					// Success!
					createMap({
						coords : true,
						lat :late,
						lng : lone
					});
				}, 
				function ()
					{
					// Gelocation fallback: Defaults to Stockholm, Sweden
					createMap
						({
						coords : false,
						address : new google.maps.LatLng($scope.lat,$scope.lng)
						});
					}
				);
			}
			else {
				// No geolocation fallback: Defaults to Lisbon, Portugal
				createMap({
						coords : false,
						address : new google.maps.LatLng($scope.lat,$scope.lon)
				});
			}



		
		
		};
	 
	 $scope.showfinance=function(){
			$scope.general=false;
			angular.element('#finan').css({display:"block"});
			 angular.element('#nri').css({display:"none"});
			}
		$scope.showgeneral=function(){
			$scope.general=true;
			angular.element('#finan').css({display:"none"});
			 angular.element('#nri').css({display:"none"});
		}
		$scope.shownri=function(){
			$scope.general=false;
			angular.element('#finan').css({display:"none"});
			 angular.element('#nri').css({display:"block"});
		}
		$scope.show_dialog = function(event) {
			angular.element('body').trigger('click');
			$scope.setlandingpop(false);
			FancyboxService.open('[rel=statusimages]');
			event.preventDefault();
		};
	//belongs to downloads
		 $scope.submitDetails=function(name,email){

		if((name=='' || name==undefined)&&(email=='' || email==undefined))
		{
			alert("Please Enter Your name and email");
			return false;
		}
		if(name=='' || name==undefined)
		{
			alert("Please Enter Your name");
			return false;
		}
		if(email=='' || email==undefined)
		{
			alert("Please Enter Your email");
			return false;
		}

	if((name!=''&&name!=undefined)&&(email!=''&&email!=undefined)){
		var emailvalid=true;
		emailvalid =$scope.validateemail(email);
		if(emailvalid==false){
			alert('please Enter Valid Email.');
		}else{
		//hiding modal
			//alert('saving');
			console.log('pid downloads saving'+$scope.getPID());
			var save=saveDetails.saveData("storeDownload&pid="+$scope.getPID()+"&name="+name+"&email="+email);
			save.then(function(result)
			{
				
				if(result=='true'){
				$scope.showdownloads=false;
				$scope.downloadsdiv=false;
			}

		});

		}
	}
		$scope.downloadPdf=function(url)
		{
			if(url==1)
				{
					downloadURL=$scope.getBrouchers()[0];
				}
			else if(url==2)
				{
					downloadURL=$scope.getBrouchers()[1];
				}
			else
				{
					downloadURL=$scope.getBrouchers()[2];
				}
			window.open(downloadURL,'Download');
						
		};
	};
		$scope.showterms=function()
		{
			$scope.downloadsdiv=true;
			$scope.termsdiv=false;
		}
		//downloads end here
$scope.goForMap=function()
{
	$scope.mapImage=false;
	$scope.googlemaplink=false;
	$scope.maplink=true;
	$scope.showmap=false;
                
 google.maps.event.addListenerOnce(map, 'mousemove', function(){
	google.maps.event.trigger(map, 'resize');
	map.setCenter(new google.maps.LatLng(17.462876, 78.311355));
	map.setZoom(14);
});

};
$scope.goForBack=function(event){
$scope.maplink=false;
$scope.googlemaplink=true;
$scope.showmap=true;
$scope.mapImage=true;

};
$scope.showregular=function(){
	angular.element('#regular').css({display:"block"});
	 angular.element('#premium').css({display:"none"});
}
$scope.showpremium=function(){
	angular.element('#regular').css({display:"none"});
	 angular.element('#premium').css({display:"block"});
}
$scope.backtodwl=function()
{
	$scope.downloadsdiv=false;
	$scope.termsdiv=true;
}

$scope.hideModal=function(){


};

  $scope.showModal = !$scope.showModal;
 $scope.show_dialog = function(event) {
				

   $scope.setlandingpop(false);

	FancyboxService.open('[rel=statusimages]');

   event.preventDefault();
};

 $scope.carouselClick=function(id){

 };
 $scope.previous=function(image){

 };
 $scope.next=function(image){

 };
  $scope.minimize=function(){
		
		$scope.setshowbutton(true);
		$scope.setmodalshow(true);
	 };
 $scope.showContact=function(){

angular.element('#innerloader').css({display:'block'});
if($scope.getFlagForModal()==1){
angular.element('#closepop').trigger('click');
}
else if($scope.getFlagForPlans()==1){
angular.element('#modelpopup').trigger('click');
}
angular.element('#plans').css({display:"none"});
angular.element('#googlemap').css({display:"none"});
angular.element('#body').trigger('click');
angular.element('#myModal').css({dispaly:'none'});
angular.element('#modelpopup').css({dispaly:'none'}); 

$scope.setlandingpop(false);
angular.element('#contactform').css({display:'block'});
 $scope.setContactUs(true);
 };
 $scope.showContact_XS=function(){
angular.element('body').trigger('click');
$scope.showSubMenu=false;
$scope.showPlans=false;
$scope.showFAQ=false;
$scope.showDownloads=false;
$scope.showMaps=false;
$scope.pageHeader='contact us';
$scope.showContact=true;
 }
 
 
$scope.closeLandingPop=function(){

$scope.setlandingpop(false);
};
$rootScope.MenuHvSubmenu=[];
 $scope.setifMenuHvSub=function(menu,submenu){
	console.log(menu.PageName);
	console.log("pushing data");
	if(submenu.PageName==menu.PageName){
	console.log("pushing data");
	$rootScope.MenuHvSubmenu.push(menu.PageName);
	console.log("after pushing data"+$rootScope.MenuHvSubmenu.indexOf(menu.PageName));
	}

 };
 $scope.loader=function(){
 angular.element('#innerloader').css({dispaly:'block'});
 };
 $scope.detectmob=function() { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
};
$scope.detectmob_iphone=function() { 
 if(navigator.userAgent.match(/iPhone/i))
 {
    return true;
  }
 else {
    return false;
  }
};
 
 
 $scope.showsocial=function()
{

	if($scope.detectmob()){}else{
	if($scope.socialgroup==true)
	{
		$scope.socialgroup=false; 
	}
	else
	{
		$scope.socialgroup=true; 
	} 	
}	
}
 $scope.showsocial_tab=function()
{

	if($scope.detectmob()){
	if($scope.socialgroup==true)
	{
		$scope.socialgroup=false; 
		angular.element('#shareicon').css({color:'#428bca'});
	
	}
	else
	{
		$scope.socialgroup=true; 
	} 
}	
}
 $scope.hidesocial=function()
 {
	$scope.socialgroup=false;
 }
 $scope.showsociallike=function()
{	
	if($scope.detectmob()){

	}else{
	console.log('not mobilebrowser');
	if($scope.socialgrouplike==true)
	{
		$scope.socialgrouplike=false; 
	}
	else{
	if($scope.socialgrouplike==false)
	{
		$scope.socialgrouplike=true; 
	}
	}
	}
 }
  $scope.showsociallike_tab=function()
{	
if($scope.detectmob()){

	if($scope.socialgrouplike==true)
	{
		$scope.socialgrouplike=false; 
	}
	else {
	if($scope.socialgrouplike==false)
	{
		$scope.socialgrouplike=true; 
	}
	}
	}
 }

 $scope.hidesociallike=function()
 {
	 $scope.socialgrouplike=false; 
 }

$scope.homepage=function()
{
	$scope.setlandingpop(true);
}

});

function findBootstrapEnvironment() {
    var envs = ['xs', 'sm', 'md', 'lg'];

    $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envs.length - 1; i >= 0; i--) {
        var env = envs[i];

        $el.addClass('hidden-'+env);
        if ($el.is(':hidden')) {
            $el.remove();
            return env
        }
    }
}
