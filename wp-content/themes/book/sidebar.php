<div class="single__archive">
  <ul class="list-group">
  	<a href="#" class="list-group-item active">
     Archives
    </a>
     <?php wp_get_archives(array('type'=>'monthly')); ?>
 </ul>

   <?php do_action( 'aj_sidebar', 3 ); ?>
 </div>