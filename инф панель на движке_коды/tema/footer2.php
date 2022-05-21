<marquee direction="right">
<div id="footer2">
<p>
<h5>
<?php $posts = get_posts ("category=5&orderby=date&numberposts=1"); ?> 
<?php if ($posts) : ?>
<?php foreach ($posts as $post) : setup_postdata ($post); ?>
 
  <div class="block">
     <div class="name"> 
          <a <?php the_permalink() ?>" rel="bookmark"><?php the_content(); ?></a> 
     </div>
  </div>
 
<?php 
  endforeach;
  wp_reset_postdata();
?>
<?php endif; ?>

</h5>
</p>
</div>
</div></marquee>


