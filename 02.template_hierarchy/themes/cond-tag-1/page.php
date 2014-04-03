<?php 

$about_page = is_page('About');

if (is_page('Home')): ?>
	<h2>You are on the home page</h2>
<?php else : ?>
	<h2>You are viewing an internal page <?php echo ($about_page) ? 'and you are on the About page' : ''; ?>.</h2>
<?php endif ?>