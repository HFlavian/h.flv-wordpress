<html lang="en">
  <head>

<?php
wp_head();
 ?>

 <!-- Titlul paginii se preia din WordPress
   <title>Product Design Course</title> -->

    <!--META-->
    <meta charset="utf-8">
    <meta name="vieport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Product Design Course">
    <meta name="author" content="Flavian Herciu">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<div class="master-header">
<div class="header">
    <div class="flex-header">
      <div class="logofront">

      <?php
        if(function_exists("the_custom_logo")){
          $custom_logo_id = get_theme_mod ("custom_logo");
          $logo = wp_get_attachment_image_src($custom_logo_id);
        }
       ?>

       <a href="<?php echo home_url(); ?>" class="logo">
         <!-- Preluare Logo automat din Panou Wordpress
         <img src="<?php echo $logo[0] ?>" alt="Logo">-->
         <img src="https://i.ibb.co/x6zzbgV/Untitled-1.png" alt="Logo"></a>
      </div>
      <div class="header-right">
<!-- Preluare meniuri din Wordpress in Header (Top-Bar) -->
        <?php
        //  wp_nav_menu(
        //    array(
        //      "menu" => "primary",
        //      "container" => "",
        //      "theme_location" => "primary",
        //      "items_wrap" => '<ul id="" class="topbar">%3$s</ul>'
        //    )
        //  );
         ?>
         <a href="#projects">Projects</a>
         <a href="#partners">Partners</a>
         <a href="#faq">FAQ</a>
         <a href="#masters">Masters</a>
         <a href="#classes">Classes</a>
         <a href="#course-experience">Course Experience</a>
         <a href="#about-us">About us</a>
      </div>
      <div class="buttonrgt">
        <button class="register-button" type="button">Register</button>
      </div>
    </div>
</div>
</div>
  <div class="page-title">
    <h1><?php the_title(); ?></h1>
  </div>

	</head>
