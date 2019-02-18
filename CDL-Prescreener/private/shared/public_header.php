<?php echo url_for('/index.php'); ?>
<!-- Header -->
<header id="header">
	<?php if ($source == 'index') {?>
			<a href="<?php echo 'index.php'; ?>" class="logo">CDL Prescreener</a>
	<?php } else {?>
			<a href="<?php echo '../index.php'; ?>" class="logo">CDL Prescreener</a>
	<?php }?>
</header>

<!-- Nav -->
	<nav id="nav">
		<ul class="links">
			<?php
				if ($source == 'index') {?>
					<li class="active"><a href="<?php echo 'index.php' ?>">Homepage</a></li>
					<li><a href="<?php echo 'public/prescreener_form.php' ?>">CDL Prescreener</a></li>
					<li><a href="<?php echo 'public/about_us.php'; ?>">About Us</a></li>
					<li><a href="<?php echo 'public/elements.php'; ?>">Elements Reference</a></li>
			<?php } else {?>
					<li class="active"><a href="<?php echo '../index.php'; ?>">Homepage</a></li>
					<li><a href="<?php echo url_for('/prescreener_form.php'); ?>">CDL Prescreener</a></li>
					<li><a href="<?php echo url_for('/about_us.php'); ?>">About Us</a></li>
					<li><a href="<?php echo url_for('/elements.php'); ?>">Elements Reference</a></li>
			<?php }?>
		</ul>
		<ul class="icons">
			<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
		</ul>
	</nav>
