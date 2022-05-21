<?php get_header (); ?>
<div id="content">
<h4>К сожалению, такой страницы нет</h4><br>
<p>Страница, которую Вы ищете, видимо, удалена или не существовала ранее.</p>
<p>Однако вы можете попробовать поискать необходимую информацию в следующих статьях:</p><br>
<ul>
<?php get_archives ('postbypost', 50); ?>
</ul>
</div>
<?php include (TEMPLATEPATH."/sidebar.php");?>
<?php get_footer (); ?>
