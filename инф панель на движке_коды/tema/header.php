<!DOCTYPE html PUBLIC «-//W3C//DTD XHTML 1.0 Transitional//EN»

«http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd»>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" media="screen"/>



</head>

<body>



<div id="header">


<div id="subtitle"><h1><marquee scrollamount="4">

<?php $posts = get_posts ("category=4&orderby=date&numberposts=1"); ?> 
<?php if ($posts) : ?>
<?php foreach ($posts as $post) : setup_postdata ($post); ?>
 
  <div class="block">
     <div class="name"> 
          <?php the_content(); ?>
     </div>
  </div>
 
<?php 
  endforeach;
  wp_reset_postdata();
?>
<?php endif; ?>
</marquee></div> </h1>
</body>
</div>

