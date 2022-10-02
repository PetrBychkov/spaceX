<?php
  get_header();
?>
<section class="container">
  <div class="title__wrapper">
    <h1 class="title"><?php echo get_field('title');?></h1>
    <p class="sub__title"><?php echo get_field('sub-title');?></p>
    <button class="travel__button">
      <?php echo get_field('name-button');?>
      <img src="<?php echo get_template_directory_uri()?>/assets/images/glare01.png" alt="" class="travel__button-glare__01">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/glare02.png" alt="" class="travel__button-glare__02">
    </button>
  </div>
  <div class="benefits">
     <div class="benefits__item">
      <p class="benefits__item-text"><?php echo get_field('benefits-first');?></p>
     </div>
     <div class="benefits__item">
      <p class="benefits__item-text"><?php echo get_field('benefits-second');?></p>
     </div>
     <div class="benefits__item">
      <p class="benefits__item-text"><?php echo get_field('benefits-third');?></p>
     </div>
     <div class="benefits__item">
      <p class="benefits__item-text"><?php echo get_field('benefits-fourth');?></p>
     </div>
  </div>
</section>
<?php
  get_footer();
