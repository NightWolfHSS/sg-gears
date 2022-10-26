<!DOCTYPE html>
<html lang="en-US">
   <?php  get_header(); ?>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      <?php get_section_header(); ?>
      <section>
         <div id="head">
            <div class="line">
               <h1>галлерея </h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">

                <?php if (!empty(get_gallery())): ?>
                    <?php get_gallery(); ?> 
                <?php endif; ?>

               </div>
            </div>
         </div>
         <!-- slide -->
         <?php get_slide(); ?>
      </section>
   <?php  get_footer(); ?> 
   </body>
</html>