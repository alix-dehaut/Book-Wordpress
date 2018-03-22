<footer class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class=" navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
<?php 
wp_nav_menu([
    'theme_location'  => 'footer-menu',
    'container'       => false, // wrapper nav
    'container_class' => '',
    'menu_class'     => 'nav navbar-nav',
]); 
?>
	</ul>
	</div>
</nav>

</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
<script src="<?php echo esc_url(get_template_directory_uri()) .'/assets/js/bootstrap.min.js'; ?>"></script>

<?php wp_footer(); ?>
</body>
</html>