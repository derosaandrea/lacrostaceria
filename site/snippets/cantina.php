<section id="la_cantina" class="section_<?php echo $data->uid() ?>" data-type="background" data-speed="20">
	<article>
		<h1><?php echo html($data->title_ita()) ?> / <em><?php echo html($data->title_en()) ?></em></h1>
		<div><?php echo kirbytext($data->intro_ita()) ?>
		</div>
		<div class='tomos'>&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;</div>
		<div class='i'><?php echo kirbytext($data->intro_en()) ?></div>
		<div class='vini'>
			<?php echo kirbytext($data->lista_vini()) ?>
		</div>
	</article>
</section>