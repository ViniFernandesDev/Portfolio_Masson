<!DOCTYPE html>
<html lang="pt-br">
<head>
    
     <?php include('meta_tags.php'); ?>
        
</head>
<body>

<?php include('header.php'); ?>

<section class="contact">
     <div class="container">

          <h1 class="titleMain">Contact Me</h1>
          <h2 class="subTitle">Get in touch</h2>

          <div class="display">
               <div class="__information">
                    <div class="__item">
                         <i class="uil uil-phone"></i>

                         <div>
                              <span class="__title">Call Me</span>
                              <span>999-777-666</span>
                         </div>
                    </div>

                    <div class="__item">
                         <i class="uil uil-envelope"></i>

                         <div>
                              <span class="__title">Email</span>
                              <span>alexa@email.com</span>
                         </div>
                    </div>

                    <div class="__item">
                         <i class="uil uil-location-point"></i>

                         <div>
                              <span class="__title">Location</span>
                              <span>Peru - Lima Av.Bolivar #123</span>
                         </div>
                    </div>
               </div><!--__information-->

               <div class="__form inputs">
                <form id="contato" name="contato" action="" method="POST" data-reset="true">
                    <div class="ajax_response"></div>

                    <div class="espacamento">
                         <div class="margin" style="width:48%">
                              <label for="name">Name</label>
                              <input type="text" name="name">
                         </div><!--margin-->

                         <div class="margin" style="width:48%">
                              <label for="email">E-mail</label>
                              <input type="email" name="email">
                         </div><!--margin-->
                    </div><!--display-->
                
                    <div class="margin">
                        <label for="projetct">Project</label>
                        <input type="text" name="project" required=""></input>
                    </div><!--margin-->

                    <div class="margin">
                        <label for="message">Message</label>
                        <textarea name="message" style="width: 100%; height:150px;" required=""></textarea>
                    </div><!--margin-->

                    <div class="button_type1 --type_submit">
                         <input type="submit" value="Send Message">
                         <i class="uil uil-navigator"></i>
                    </div>
                </form>
            </div><!-- __form -->
          </div><!--display-->

     </div><!--container-->
</section><!--contact-->

<?php include('footer.php'); ?>
