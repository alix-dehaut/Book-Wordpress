<?php get_header(); ?>
<div class="jumbotron">
<div class="container">
    <h1 class="display-3">Les livres</h1>
    <p>Voici la liste de nos livres</p>
</div>
</div>
<div class="container love">
<div class="row">
<div class="col-md-8">
<?php get_template_part('content', 'paginate'); ?>
</div>
<div class="col-md-4">
    <?php get_sidebar(); ?>
</div>
</div>
</div>
<hr>
<?php get_footer(); ?>