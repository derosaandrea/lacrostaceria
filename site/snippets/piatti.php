<?php
	$piatti = $data->children()->visible();
?>

<section class="story section_<?php echo $data->uid() ?>" id="i_piatti" data-type="background" data-offsetY="200" data-speed="20">
	<article>

		


		<h1><?php echo html($data->title_ita()) ?> / <em><?php echo html($data->title_en()) ?></em></h1>

		<?php if($data->hasChildren()): ?>
			<div id="piatti_carousel" class="carousel slide">

			<?php $index_nav = 0 ?>
			  <ol class="carousel-indicators clearfix">
			  	<?php foreach ($piatti AS $m): ?>
			    <li data-target="#piatti_carousel" data-slide-to="<?php echo $index_nav ?>" class="<?php if ($index_nav==0) echo 'active' ?>"><?php echo html($m->title_ita()) ?></li>
			    <?php $index_nav++ ?>
			    <?php endforeach ?>
			  </ol>

			  <div class="carousel-inner">
			  <?php $index = 0 ?>
			 	<?php foreach ($piatti AS $p): ?>
					<div class="<?php if ($index==0) echo 'active' ?> item">
						<h3><?php echo html($p->title_ita()) ?> / <em><?php echo html($p->title_en()) ?></em></h3>
						<div class='piatti'>
							<?php echo kirbytext($p->text_ita()) ?>
						</div>

						<div class='tomos'>&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;</div>

						<div class='piatti en'>
							<?php echo kirbytext($p->text_en()) ?>
						</div>
						<?php $index++ ?>
				    </div>

				<?php endforeach ?>
				</div>
			 
			</div>

			 <a class="carousel-control c_left" href="#piatti_carousel" data-slide="prev">&lsaquo;</a>
			 <a class="carousel-control c_right" href="#piatti_carousel" data-slide="next">&rsaquo;</a>
		<?php endif ?>


	</article>
</section>