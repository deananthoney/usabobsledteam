<?php

/**
* Template Name: MEETTHESLIDERS Page
* @package WordPress
* @subpackage ninezeroseven
* @since ninezeroseven
*/


get_header(); ?>



<div id="skybox">
<span style="padding-top:30px;color:#FFF;"><a href="http://www.teamusa.org/USA-Bobsled-Skeleton-Federation/Donate">CAPTURING SOME CANDID, ACTION AND GLAM SHOTS</a></span>

</div>
<br/>
<br/>
<br/>
<!--Shinetime  Slider -->

<!--Shinetime JS for Slider -->

<script type="text/javascript">
  $(document).ready(function()
  {
   
	 /*Your ShineTime Welcome Image*/

	 var default_image = '../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow1.jpg';
	 var default_caption = 'MEET THE SLEDERS';
	 
	 /*Load The Default Image*/
	 loadPhoto(default_image, default_caption);
	 
	 
	 function loadPhoto($url, $caption)
	 {
	 
	 
	    /*Image pre-loader*/
	    showPreloader();
	    var img = new Image();
	    jQuery(img).load( function() 
		{
			jQuery(img).hide();
			hidePreloader();
		
        }).attr({ "src": $url });
	
	    $('#largephoto').css('background-image','url("' + $url + '")');
		$('#largephoto').data('caption', $caption);
	 }

	 
	 /* When a thumbnail is clicked*/
	 $('.thumb_container').click(function()
	 {
	     
		  var handler = $(this).find('.large_image');
		  var newsrc  = handler.attr('src');
		  var newcaption  = handler.attr('rel');
		  loadPhoto(newsrc, newcaption);
	 
	 });
	 
	 /*When the main photo is hovered over*/
	 $('#largephoto').hover(function()
	 {
	    
		var currentCaption  = ($(this).data('caption'));
		var largeCaption = $(this).find('#largecaption');
		
		largeCaption.stop();
		largeCaption.css('opacity','0.9');
		largeCaption.find('.captionContent').html(currentCaption);
		largeCaption.fadeIn()
	
	
		
		 largeCaption.find('.captionShine').stop();
         largeCaption.find('.captionShine').css("background-position","-550px 0"); 
         largeCaption.find('.captionShine').animate({backgroundPosition: '550px 0'},700);
		 
		 Cufon.replace('.captionContent');
		

	 },
	 
	 function()
	 {
	    var largeCaption = $(this).find('#largecaption');
		largeCaption.find('.captionContent').html('');
		largeCaption.fadeOut();
	 
	 });
	
	 
	 
     /* When a thumbnail is hovered over*/
	 $('.thumb_container').hover(function()
	 {  
         $(this).find(".large_thumb").stop().animate({marginLeft:0, marginTop:0},200);
		 $(this).find(".large_thumb_shine").stop();
         $(this).find(".large_thumb_shine").css("background-position","0px 0"); 
         $(this).find(".large_thumb_shine").animate({backgroundPosition: '0px 0'},700);
			 
	 }, function()
	 {
	    $(this).find(".large_thumb").stop().animate({marginLeft:0, marginTop:0},200);
	 });
	 
	 function showPreloader()
	 {
	   $('#loader').css('background-image','url("")');
	 }
	 
	 function hidePreloader()
	 {
	   $('#loader').css('background-image','url("")');
	 }
   
  });
</script>

<!-- Shinetime Slider JS -->
<div id="container">
<div id="containertitle">

</div>
   <div class="mainframe">
      <div id="largephoto">
	  <div id="loader"></div>
	  
	  
	    <div id="largecaption">
		 <div class="captionShine"></div>
		   <div class="captionContent"></div>
		  
		</div>
		
       <div id="largetrans">  

  </div>
	        
      </div>
      
   </div>
   <div class="thumbnails">
   <br><br><br>
   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox1.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow1.jpg" class="large_image" rel=""/>

                                  
                              </div>
						</div>
                       </div>
       <!--end entry-->          
       
   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox2.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow2.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->          
       
   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox3.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow3.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->           
       
   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox4.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow4.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->           
       
   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox5.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow5.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->          
       
   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox6.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow6.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->     

   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox7.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow7.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->    

   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox8.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow8.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->  

   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox9.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow9.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->    	   
	   
   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox10.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow10.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->    	

   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox11.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow11.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->    	   
	   	   
	   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox12.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow12.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->    	   
	      
	   <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                        		<img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox13.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow13.jpg" class="large_image"  rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
						</div>
                       </div>
       <!--end entry-->  
	   
	   


     <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox14.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow14.jpg" class="large_image" rel=""/>
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->      
          <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox15.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow15.jpg" class="large_image"  rel=""/>
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->      
          <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox16.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow16.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry--> 
                <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox17.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow17.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->    
             <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox18.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow18.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  
            <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox19.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow19.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->   
           <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox20.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow20.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  
          <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox21.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow21.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  

                  
                     <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox22.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow22.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  

                  
                     <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox23.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow23.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  

                     <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox24.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow24.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  

             

              <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox25.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow25.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  
     <!-- start entry-->
                    <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox26.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow26.jpg" class="large_image" rel=" " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  
    <!-- start entry-->
                          <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox27.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow27.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  
    <!-- start entry-->

          <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox28.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow28.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  

    <!-- start entry-->
                 <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven//shinetime.1.01/images/thumbnails/redbox29.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow29.jpg" class="large_image" rel="" />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  
    <!-- start entry-->
                  

          <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven//shinetime.1.01/images/thumbnails/redbox30.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow30.jpg" class="large_image" rel="  " />
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  

    <!-- start entry-->
          <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox31.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow31.jpg" class="large_image"  re=" "/>
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  
    <!-- start entry-->
          <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox32.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow32.jpg" class="large_image"  rel=" "/>
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  

           <!-- start entry-->
          <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox33.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow33.jpg" class="large_image"  rel=" "/>
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  
           <!-- start entry-->
          <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox34.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow34.jpg" class="large_image"  rel=" "/>
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  

   <!-- start entry-->
          <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox35.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow35.jpg" class="large_image"  rel=" "/>
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  
       
        <!-- start entry-->
          <div class="thumbnailimage">
                        <div class="thumb_container"> 
                            <div class="large_thumb"> 
                            <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/thumbnails/redbox36.jpg" class="large_thumb_image" alt="thumb" /> 
                                <img src="../wp-content/themes/ninezeroseven/shinetime.1.01/images/large/redboxwindow36.jpg" class="large_image"  rel=" "/>
                                <div class="large_thumb_border"></div>
                                <div class="large_thumb_shine"></div>
                              </div>
            </div>
                       </div>
       <!--end entry-->  


       
   </div>
</div>




<!--END -->




<br/>
<br/>
<div id="circles">

	<!--Circles-->
<div class="circle1">

<a href="https://www.facebook.com/USOlympicTeam"><img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/teamusaonline.png"  border="0" alt="HOME" /></a>



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

<!--Circles
<a target="_blank" href="https://www.facebook.com/USOlympicTeam">
<img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/keys/offthesled/images/teamusaonline.png">
End -->


