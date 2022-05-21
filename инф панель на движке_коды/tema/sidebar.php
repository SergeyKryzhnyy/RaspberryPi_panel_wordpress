<div id="sidebar">
<style>
#blink5 {
  -webkit-animation: blink5 2s linear infinite;
  animation: blink5 2s linear infinite;
}
@-webkit-keyframes blink5 {
  0% { color: rgb(128, 0, 0); }
  50% { color: rgb(183, 65, 14); }
  100% { color: rgb(128, 0, 0); }
}
@keyframes blink5 {
  0% { color: rgb(100, 0, 0); }
  50% { color: rgb(183, 65, 14); }
  100% { color: rgb(128, 0, 0); }
}
</style>
<style>
#blink1 {
  -webkit-animation: blink1 3s linear infinite;
  animation: blink1 3s linear infinite;
}
@-webkit-keyframes blink1 {
  0% { color: rgba(34, 34, 34, 1); }
  50% { color: rgba(34, 34, 34, 0); }
  100% { color: rgba(34, 34, 34, 1); }
}
@keyframes blink1 {
  0% { color: rgba(34, 34, 34, 1); }
  50% { color: rgba(34, 34, 34, 0); }
  100% { color: rgba(34, 34, 34, 1); }
}
</style>

<h6 id="blink1">ПЛАН МЕРОПРИЯТИЙ</h6>
<br>
<?php $posts = get_posts ("category=3&orderby=date&numberposts=6"); ?> 
<?php if ($posts) : ?>
<?php foreach ($posts as $post) : setup_postdata ($post); ?>
 
  <div class="block">
     
<div class="name"> 

<div class=«title»><h8 id="blink5"><?php the_title(); ?></h8></div>
       <h7>  <?php the_content(); ?></h7>
     </div>
  </div>
 <br>
<?php 
  endforeach;
  wp_reset_postdata();
?>
<?php endif; ?>


</div>
