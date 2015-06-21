<?php

/**
* Template Name: SLEDTV Page
* @package WordPress
* @subpackage ninezeroseven
* @since ninezeroseven
*/


get_header(); ?>

<div id="skybox">
<span style="padding-top:30px;color:#FFF;"><a href="http://www.teamusa.org/USA-Bobsled-Skeleton-Federation/Donate">INSERT A MESSAGE IN THIS SPACE AND SHARE FUNCTION</span>

</div>


<div style="height: 195px;
margin-left:115px;margin-top:0px;z-index:900;">
<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/usafullnext.png"  border="0" alt="USA Full NEXT" /></a>


<!-- End-->

<!-- Beginning of Mighty Video Slider 


<style type="text/css">

		#simple .frame {
			width: 100%;
			height: 195px;
		}
		#simple .frame ul {
			list-style: none;
			height: 100%;
			padding: 0;
			margin: 0;
		}
		#simple .frame ul li {
			float: left;
			height: 195px;
			padding:-10;

			
		}
		#simple .frame ul li img {
			max-width: 292px;
			max-height: 195px;
		}
		#simple .frame ul li .details {
			padding-top: 10px;
			font-weight: 300;
		}
		#simple .frame ul li .details strong {
			display: block;
			color: #000;
		}
		#simple .frame ul li .details b {
		}
		#simple ul.pages {
			float: right;
			margin-bottom: 20px;
			margin-right: 12px;
		}
		#simple .mSButtons {
			top:163px;
			bottom: auto;
			width: 600px;
			height:10px;
		}
	</style>
<!--

<!-- Mighty Slider -

		<div class="featurette">
			<div class="mightyslider_carouselSimple_skin clearfix" id="simple">
				<!--<ul class="pages">
				</ul>-
				<div class="frame">
					<ul class="slide_element">
						

	                  <li class="slide" data-mightyslider="cover:'../wp-content/themes/ninezeroseven/mightyslider/assets/img/demofiles/slider1.jpg', video: 'http://www.youtube.com/watch?v=kvzcbweQi-Y'">
							
						</li>
                        <li class="slide" data-mightyslider="cover:'../wp-content/themes/ninezeroseven/mightyslider/assets/img/demofiles/slider2.jpg', video: 'http://www.youtube.com/watch?v=aXb2zD8pmT8'">
							
						</li>
						<li class="slide" data-mightyslider="cover:'../wp-content/themes/ninezeroseven/mightyslider/assets/img/demofiles/slider3.jpg', video: 'http://www.youtube.com/watch?v=PGu2WHLNSSI'">
							
						</li>
						<li class="slide" data-mightyslider="cover:'../wp-content/themes/ninezeroseven/mightyslider/assets/img/demofiles/slider4.jpg', video: 'http://www.youtube.com/watch?v=OG2eGVt6v2o'">
							
						</li>

                         <li class="slide" data-mightyslider="cover:'../wp-content/themes/ninezeroseven/mightyslider/assets/img/demofiles/slider5.jpg', video: 'http://www.youtube.com/watch?v=8Ow_3rIA_qw'">
							
						</li>
						<li class="slide" data-mightyslider="cover:'../wp-content/themes/ninezeroseven/mightyslider/assets/img/demofiles/slider6.jpg', video: 'http://www.youtube.com/watch?v=cYIpDJJZ9lM'">                                                     
						


						
					</ul>
				</div>
			</div>
		</div>



	<style>
		#modern .frame {
			width: 100%;
			height: 500px;
		}
		#modern .frame ul {
			list-style: none;
			height: 100%;
			
		}
		#modern .frame ul li {
			float: left;
			height:195px;
		}
		#modern .frame ul li img {
			max-width: none;
		}
		#modern .frame ul li .mSCover {
			position: relative;
		}

		.mSCover{
         width:292px !important;
         height:195px !important;
		
		}
		#modern .frame ul li .mSCover:after {
			position: absolute;
			content: '';
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background-color: rgba(0, 0, 0, 0);
			
			-webkit-transition: all 0.3s;
				-ms-transition: all 0.3s;
				 -o-transition: all 0.3s;
					transition: all 0.3s;
		}
		#modern .frame ul li:hover .mSCover:after {
			background-color: rgba(0, 0, 0, 0.6);
		}
		#modern.mSMedia .frame ul li:hover .mSCover:after {
			display: none;
		}
		#modern .details {
			position: absolute;
			bottom: 0;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.2);
			padding: 15px;
			color: #FFF;
			
			-webkit-box-sizing: border-box;
			   -moz-box-sizing: border-box;
			        box-sizing: border-box;
			
			-webkit-transition: all 0.3s;
				-ms-transition: all 0.3s;
				 -o-transition: all 0.3s;
					transition: all 0.3s;
		}
		#modern.mSMedia .details {
			display: none;
		}
		#modern .frame ul li:hover .details {
			background-color: rgba(0, 0, 0, 0.6);
		}
		#modern .details .title {
			display: block;
			color: #FFF;
			font-size: 18px;
			text-transform: uppercase;
			text-decoration: none;
			margin-bottom: 10px;
			text-shadow: 1px 1px 0 #000;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
		}
		#modern .details .description {
			font-weight: 300;
			height: 0;
			overflow: hidden;
			color: #D5D5D5;
			
			-webkit-transition: all 0.3s;
				-ms-transition: all 0.3s;
				 -o-transition: all 0.3s;
					transition: all 0.3s;
		}
		#modern .frame ul li:hover .details .description {
			height: 60px;
			margin-bottom: 10px;
		}
		#modern .details .counts {
			height: 20px;
		}
		#modern .details .counts a {
			float: left;
			color: #AAA;
			font-size: 11px;
			text-transform: uppercase;
			margin-right: 15px;
			
			-webkit-transition: all 0.3s;
				-ms-transition: all 0.3s;
				 -o-transition: all 0.3s;
					transition: all 0.3s;
		}
		#modern .details .counts a:hover {
			color: #FFF;
			text-decoration: none;
		}
		#modern .details .counts a.more {
			float: right;
			opacity: 0;
			filter: alpha(opacity=0);
			margin: 0;
		}
		#modern .frame ul li:hover .details .counts a.more {
			opacity: 1;
			filter: alpha(opacity=100);
		}
	</style>
	The Javascript 
    ================================================== 
     Placed at the end of the document so the pages load faster
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/css_browser_selector.min.js"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/jquery.js"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/jquery.mobile.just-touch.js"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script type="text/javascript" async="" defer="" src="http://iprodev.com/projects.php?p=mightyslider"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/ilightbox/js/jquery.mousewheel.js"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/ilightbox/js/ilightbox.packed.js"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/src/js/mightyslider.js"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/bootstrap-dropdown.js"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/bootstrap-tooltip.js"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/bootstrap-popover.js"></script>
    <script src="../wp-content/themes/ninezeroseven/mightyslider/assets/js/bootstrap-collapse.js"></script>
    <script>

		eval(function(d,e,a,c,b,f){b=function(a){return(a<e?"":b(parseInt(a/e)))+(35<(a%=e)?String.fromCharCode(a+29):a.toString(36))};if(!"".replace(/^/,String)){for(;a--;)f[b(a)]=c[a]||b(a);c=[function(a){return f[a]}];b=function(){return"\\w+"};a=1}for(;a--;)c[a]&&(d=d.replace(RegExp("\\b"+b(a)+"\\b","g"),c[a]));return d}('$(1x).1t(4(){5 f=$(1g),d="1y"1q 1g?"1s":"1v";(4(){4 a(a){1k 1N>=a?"1O%":18>=a?"1c%":1u>=a?"Y.Y%":"1f%"}5 b=$("#1F"),c=$(".A",b),b=$(".n",b);b.8({l:J,L:"K",j:{G:"X",y:a(f.W())},1l:{m:1},A:{M:c[0],h:d},11:{1P:0,1p:0}});5 e=b.6().8;f.19(4(){e.1a({j:{y:a(f.W())}})})})();(4(){4 a(a){1k 18>=a?"1c%":"Y.Y%"}5 b=$("#1w"),b=$(".n",b);b.8({l:J,U:1,L:"K",j:{G:"X",h:d,y:a(f.W())},m:{x:$("#1z"),w:$("#1K")}});5 c=b.6().8;f.19(4(){c.1a({j:{y:a(f.W())}})})})();(4(){5 a=$("#1L"),b=$(".n",a),c=$("k.z #D",a),e=$("k.z #B",a);b.8({l:J,U:1,L:"K",j:{h:d,y:"20%"},m:{s:$("#1r"),q:$("#1o")},11:{1b:0.1}},{17:4(a,b){c.F(9.g[b].C.D);e.F(9.g[b].C.B)}})})();(4(){5 a=$("#1A"),b=$(".n",a),c=$("k.z #D",a),e=$("k.z #B",a);b.8({l:J,U:1,L:"K",j:{h:d,y:"1B%"},m:{s:$("#1C"),q:$("#1D")},11:{1b:0.1}},{17:4(a,b){c.F(9.g[b].C.D);e.F(9.g[b].C.B)}})})();(4(){5 a=$("#1E"),b=$(".n",a),c=$("k.z #D",a),e=$("k.z #B",a);b.8({l:J,U:1,L:"K",16:3,j:{h:d,y:"1f.1H%"},1l:{m:1},H:{I:1}},{17:4(a,b){c.F(9.g[b].C.D);e.F(9.g[b].C.B)}})})();(4(){5 a=$("#1M"),b=$(".n",a),c=$("k.10",a);b.8({l:N,O:"P",j:{G:"1e",h:d},H:{I:1},m:{s:$(".s",c),q:$(".q",c)},15:{12:"g",1h:1i,1j:1}});5 e=b.6().8;a.E(d,"T[6-u]",4(){5 a=$(9).6("u");V(a){v"r":e.r("<p>"+e.g.Z+"</p>");t;v"o":e.o(-1);t;R:e[a]()}})})();(4(){5 a=$("#1G"),b=$(".n",a),c=$("k.10",a);b.8({l:N,O:"P",j:{G:"1e",h:d},A:{M:$("13.14",a)[0],h:d},H:{I:1},m:{x:$(".x",c),w:$(".w",c)},15:{12:"A",1h:1i,1j:1,1I:1}});5 e=b.6().8;a.E(d,"T[6-u]",4(){5 a=$(9).6("u");V(a){v"r":e.r("<p>"+e.g.Z+"</p>");t;v"o":e.o(-1);t;R:e[a]()}})})();(4(){5 a=$("#1J"),b=$(".n",a);$("k.10",a);b.8({l:N,O:"P",16:7,j:{G:"X",h:d},A:{M:$("13.14",a)[0],h:d},H:{I:1},15:{12:"g"},m:{Q:a.i(".Q")[0],S:a.i(".S")[0],s:a.i(".s")[0],q:a.i(".q")[0],x:a.i(".x")[0],w:a.i(".w")[0]}});5 c=b.6().8;a.E(d,"T[6-u]",4(){5 a=$(9).6("u");V(a){v"r":c.r("<p>"+c.g.Z+"</p>");t;v"o":c.o(-1);t;R:c[a]()}});$(".1m",a).E(d,4(){5 a=$(9),b=a.6("1n"),a=a.6("1d");c[a](b)})})();(4(){5 a=$("#1Q"),b=$(".n",a);$("k.10",a);b.8({1R:1S,l:N,O:"P",16:2,j:{G:"X",h:d},A:{M:$("13.14",a)[0],h:d},H:{I:1},m:{Q:a.i(".Q")[0],S:a.i(".S")[0],s:a.i(".s")[0],q:a.i(".q")[0],x:a.i(".x")[0],w:a.i(".w")[0]}});5 c=b.6().8;a.E(d,"T[6-u]",4(){5 a=$(9).6("u");V(a){v"r":c.r("<p>"+c.g.Z+"</p>");t;v"o":c.o(-1);t;R:c[a]()}});$(".1m",a).E(d,4(){5 a=$(9),b=a.6("1n"),a=a.6("1d");c[a](b)})})();$(\'a[1T*=".1U"]\').1V(4(){$(9).1W({1X:"1Y-1Z",21:"22"})})});',
		62,127,"    function var data  mightySlider this       slides activateOn find navigation div speed buttons frame remove li next add prev break action case nextPage prevPage slideSize details pages desc options title on html navigationType scrolling scrollBy 500 fill viewport pagesBar 300 easing easeOutExpo forward default backward button autoScale switch width basic 33 length controls dragging cycleBy ul pages_ cycling startAt active 768 resize set swingSpeed 50 type centered 25 window pauseTime 1500 pauseOnHover return commands to slide showcase_next touchDragging in showcase_prev tap ready 980 click modern document ontouchstart modern_prev video_showcase 53 video_showcase_prev video_showcase_next cover_flow simple cycling_by_pages 31 startPaused api modern_next showcase cycling_by_slides 480 100 mouseDragging sloppy moveBy 1200 href jpg each iLightBox skin metro black  fullViewPort fit".split(" "),
		0,{}));

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-45007674-1', 'mightyslider.com');
		ga('send', 'pageview');

		window.___gcfg = {lang: "en"};
		(function() {
			var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
			po.src = "https://apis.google.com/js/plusone.js";
			var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
		})();
    </script>End Mighty Slider -->





<!-- INFO-->

<div id="bluebox">


<br>
"Lorem ipsum dolor sit amet, 
<br/>
consectetuer adipiscing elit.<br/>
Aenean commondo ligula eget <br/>
dolkor.Aenean massa." <br/>
<br style="index.html">- Athlete Name </br>

</div>

<!--END -->



<div style="margin-left:754px;margin-top:-326px;z-index:901;">
<a href="http://www.teamusa.org/USA-Bobsled-Skeleton-Federation/Donate"><img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/donate.png"  border="0" alt="DONATION" /></a>
</div>





<!--Slide Deck Video-->
<div style="margin-left:293px;margin-top:-334px;z-index:960;">
<?php echo do_shortcode ('[SlideDeck2 id=78  iframe=1 ]')?>
</div>




<!--End -->

<!--usafull-->
<div id="usafull">
<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/usafull.png"  border="0" alt="USA Full " /></a>

</div>


<!-- Circles -->
<div id="circles">


<div class="circle1">

<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/teamusaonline.png"  border="0" alt="HOME" /></a>



</div>

<div class="circle2">

 <a href="http://www.teamusa.org/USA-Bobsled-Skeleton-Federation/Donate"><img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/circle2.png"  border="0" alt="SUPPORT" /></a>

</div>


<div class="circle3">

 <a href="http://www.usabobsledskeletonshop.com/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/purchaseteamgear.png"  border="0" alt="FACTS" /></a>

</div>

</div>
<div class="copy">
  &copy;8FOLD LLC. 8fold Marketing created this site because they appreciate athletes of all kinds,

  <br/>
help them support the team</div>

