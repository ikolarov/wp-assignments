<?php if(is_home()): ?>
	You are on the home page
<?php else: ?>
	You are viewing an internal page
	<?php if (is_page('about')):?>
		and you are on the About page
	<?php endif; ?>
<?php endif; ?>