<?php
/**
* Template Name: Chatter Page
* @package WordPress
* @subpackage ninezeroseven
* @since ninezeroseven
*/


get_header(); ?>

<div id="redbox">

<span style="padding-top:30px;">FOLLOW BOBSLED &amp; SKELETON ATHLETE TWEETS IN ONE PLACE</span>

</div>


<div id="chatter">
<div class="chat">
<span style="float:right;">WHAT&rsquo;S</span>
<br/>
<br/>
<br/>
<br/>
<span style="float:right;"> ALL THE </span>
 <br/>
 <br/>
 <br/>
 <br/>
<span style="float:right;text-transform:uppercase;font-size:58px;color:#f5b508;">CHATTER</span>


<br/>
<br/>
<br/>
<span style="float:right;padding-top:10px;">ABOUT?</span>
<br/>
</div>
 </div>
<div style="margin-left:886px;margin-top:-797px;z-index:999 !important;">
<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/twit.png"  border="0" alt="twit" /></a>
<p style="text-transform:uppercase;font-family:'HelveticaNeue';color:#f5b508;font-weight:bold;z-index:999;padding-left:10px;">Follow Your Favorite Feed  </p>
</div>
<!---Content -->

<!-- 
margin-top:-601px;margin-right:780px;width:518px;height:500px;-->

<!--Twitter Widget-->
<div style="margin:0px 353px;margin-top:-96px;z-index:990;">
<a class="twitter-timeline"  href="https://twitter.com/OffTheSled/new"  data-widget-id="422960234420641792">Tweets from https://twitter.com/OffTheSled/new</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


</div>


<!--End -->


	<div id="content_2" class="content">
		
		<ul id="sortable">
			

             <li><a href="https://twitter.com/USBSF">USA Bobsled &amp; Skeleton</a></li>
             <li><a href="https://twitter.com/Jessbeck3">Jess Beck</a></li>
          
             <li><a href="https://twitter.com/ChuckBerkeley">Chuck Berley</a></li>
          
             <li><a href="https://twitter.com/corybutner">Corey Butner</a></li>
         
             <li><a href="https://twitter.com/AndreasDrbal"> Andreas Drbal  </a></li>
       
             <li><a href="https://twitter.com/christopherfogt">Christopher Fogt</a></li>
         
             <li><a href="https://twitter.com/StevenHolcomb">Steven Holcomb</a></li>
       
             <li><a href="https://twitter.com/chrislangton1">Chris Langton</a></li>
        
             <li><a href="https://twitter.com/stevenlangton">Steven Langsten</a></li>
            
             <li><a href="https://twitter.com/justinbolsen">Justin Bolsen</a></li>
         
             <li><a href="https://twitter.com/JohnnyQuinnUSA">Johnny Quinn</a></li>
          
             <li><a href="https://twitter.com/DRobUSA">Dallas Robinson  </a></li>
 
            <li><a href="https://twitter.com/ctomasevicz">Curtis Tomasevicz</a></li>
       
            <li><a href="https://twitter.com/MattAntoine">Matt Antoine</a></li>
  
             <li><a href="https://twitter.com/JohnDalyUSA">John Daly</a></li>
        
            <li><a href="https://twitter.com/mtdskeleton">Mike Dellemann </a></li>
         
             <li><a href="https://twitter.com/tomsantagato"> Tom Santagato</a></li>
         
            <li><a href="https://twitter.com/KyleTress">Kyle Tress</a></li>
      
            <li><a href="https://twitter.com/momosaidit">Maureen Ajoku</a></li>
    
            <li><a href="https://twitter.com/noellepikuspace">Noelle Pikus Pace</a></li>
     
            <li><a href="https://twitter.com/eamslider24">Elana Meyers </a></li>
  
            <li><a href="https://twitter.com/KatieU11">Katie Uhlaender</a></li>
          
		</ul>
</div>


	<!--bottom line-->
    <p>&nbsp;</p>
	<!-- Google CDN jQuery with fallback to local  -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="../wp-content/themes/ninezeroseven/verticalsliderjs/js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
	<!-- Google CDN jQuery ui -->
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
	<!-- custom scrollbars plugin -->
	<script src="../wp-content/themes/ninezeroseven/verticalsliderjs/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#content_2").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
				$("#sortable").sortable({
					scroll:false,
					axis:"y",
					opacity:0.5,
					change:function(event,ui){
						var p=ui.position.top,
							h=ui.helper.outerHeight(true),
							s=ui.placeholder.position().top,
							elem=$("#content_2 .mCustomScrollBox")[0],
							elemHeight=$("#content_2 .mCustomScrollBox").height();
							pos=findPos(elem),
							mouseCoordsY=event.pageY-pos[0];
						if(mouseCoordsY<h || mouseCoordsY>elemHeight-h){
							$("#content_2").mCustomScrollbar("scrollTo",p-(elemHeight/2));
						}
					}
				});
				function findPos(obj){
					var curleft=curtop=0;
					if (obj.offsetParent){
						curleft=obj.offsetLeft
						curtop=obj.offsetTop
						while(obj=obj.offsetParent){
							curleft+=obj.offsetLeft
							curtop+=obj.offsetTop
						}
					}
					return [curtop,curleft];
				}
			});
		})(jQuery);
	</script>
	<!--Circles-->


<div class="footer1">
<p>
<a target="_blank" href="https://www.facebook.com/USOlympicTeam">
<img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/teamusaonline.png">
</a>
<a target="_blank" href="http://www.teamusa.org/USA-Bobsled-Skeleton-Federation/Donate">
<img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/circle2.png">
</a>
<a target="_blank" href="http://www.usabobsledskeletonshop.com/">
<img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/purchaseteamgear.png">
</a>
</p>


</div>


</div>
<div class="row">
<div class="copy">
©  8fold, LlC.
<a target="_blank" href="http://www.8foldworks.com">8fold Marketing</a>
created this site because they appreciate athletes of all kinds
<br/>
help them support the team
</div>
<!--8fold -->








