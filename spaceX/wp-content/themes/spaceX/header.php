<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
	<title>SpaceX</title>

	<meta charset="UTF-8">
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
    <div class="logo__wrapper">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/ugol1.png" alt="" class="angel-1">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/ugol2.png" alt="" class="angel-2">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/ugol3.png" alt="" class="angel-3">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/ugol4.png" alt="" class="angel-4">
      <img src="<?php echo get_field('logo', 'option')?>" alt="" class="logo">
    </div>
    <?php
      wp_nav_menu();
    ?>
	</header>
