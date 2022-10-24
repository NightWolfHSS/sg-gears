<!DOCTYPE html>
<html lang="en-US">
    <?php  get_header(); ?>
   <body class="size-1140">
     <?php get_section_header(); ?>
      <section>
         <div id="head">
            <div class="line">
               <h1>Example of contact page</h1>
            </div>
         </div>
         <div id="content" class="left-align contact-page">
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-6">
                     <h2>Vision Design - graphic zoo</h2>
                     <address>
                        <p><i class="icon-home icon"></i> Gallayova 19, 841 02 Bratislava</p>
                        <p><i class="icon-globe_black icon"></i> Slovakia - Europe</p>
                        <p><i class="icon-mail icon"></i> info@visiondesign.sk</p>
                     </address>
                     <br />
                     <h2>Social</h2>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">Vision Design - graphic zoo</a></p>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/myresponsee">Responsee</a></p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">Responsee</a></p>
                  </div>
                  <div class="s-12 l-6">
                     <h2>Example contact form (do not use)</h2>
                     <form class="customform" action="">
                        <div class="s-12 l-7"><input name="" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                        <div class="s-12 l-7"><input name="" placeholder="Your name" title="Your name" type="text" /></div>
                        <div class="s-12"><textarea placeholder="Your massage" name="" rows="5"></textarea></div>
                        <div class="s-12 m-6 l-4"><button type="submit">Submit Button</button></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- MAP -->	
         <div id="map-block">  	  
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2569.580727748981!2d73.08031974368319!3d49.906674345417635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2skz!4v1666383036056!5m2!1sru!2skz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>         
         <!-- slide -->
         <?php get_slide(); ?>
      </section>
      <?php  get_footer(); ?> 
   </body>
</html>  