  <footer>
   <div class="line">
      <div class="s-12 l-6">
         <p>Copyright 2015, Vision Design - graphic zoo
         </p>
      </div>
      <div class="s-12 l-6">
         <p class="right">
            <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
         </p>
      </div>
   </div>
</footer>
<script type="text/javascript" src="<?php echo JS_OWL_PATH ?>owl.carousel.js"></script>   
<script defer type="text/javascript">
   jQuery(document).ready(function($) {  
     $("#owl-demo").owlCarousel({
   	slideSpeed : 300,
   	autoPlay : true,
   	navigation : false,
   	pagination : false,
   	singleItem:true
     });
     $("#owl-demo2").owlCarousel({
   	slideSpeed : 300,
   	autoPlay : true,
   	navigation : false,
   	pagination : true,
   	singleItem:true
     });
   });	
    
</script> 