<?php snippet('head') ?>
<body>
	<div id='cont'>
		<div class='left_col'>
			<div id='top-bar'>
				<header>
					<h1 id="logo">
						<img src='<?php echo url("assets/img/sitewide/logo.png")?>' />
					</h1>
				</header>
				<nav>
					<ul>
						<?php $index_nav = 0 ?>
						<?php foreach($pages->visible() as $menu): ?>
							<li id="btn-<?php echo $index_nav ?>" class="nav-item ni_<?php echo $index_nav ?>" data-target="section_<?php echo $menu->uid() ?>"><?php echo html($menu->title()) ?></li>
							<?php $index_nav++ ?>
						<?php endforeach ?>
					</ul>
				</nav>
			</div>
			<div id='bottom-bar'>
				<img id='break' src="assets/img/images/break.png"></img>
				<footer>
					<div id='social_btn'>
						<a href="https://www.facebook.com/LaCrostaceria" target="_blank"><span class="social facebook"></span></a>
						<a href="https://www.twitter.com" target="_blank"><span class="social twitter"></span></a>
						<a href="http://www.tripadvisor.it/Restaurant_Review-g187791-d2250928-Reviews-La_Crostaceria_Ipanema-Rome_Lazio.html" target="_blank"><span class="social tripadvisor"></span></a>
					</div>
					<p id='address'>
						La Crostaceria di Nike1 srl<br/>
						Via dei Capocci, 26<br/>
						00184 Roma<br/>
						Tel. 06 482 4758<br/>
						info@lacrostaceria.it<br/>
					</p>
				</footer>
			</div>
		</div>
		<?php $index_sec = 0 ?>
		<?php foreach($pages->visible() as $section) {
		  snippet($section->uid(), array('data' => $section));
		} ?>

		</div>

			<?php snippet('scripts') ?>
		</body>
		</html>