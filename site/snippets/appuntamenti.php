<?php
	$appuntamenti = $data->children()->visible();
?>
<section id='appuntamenti' class="section_<?php echo $data->uid() ?>" data-type='background' data-speed='20'>
	<article>
		<h1><?php echo html($data->title_ita()) ?> / <em><?php echo html($data->title_en()) ?></em></h1>
		<?php if($data->hasChildren()): ?>
			<ul>
				<?php foreach ($appuntamenti AS $a): ?>
					<li class="event">
						<h3 class="appuntamento_title"><?php echo html($a->title_ita()) ?></h3>
						<div class="appuntamento_text"><?php echo kirbytext($a->text_ita()) ?></div>
						
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style" addthis:url="<?php echo $a->url() ?>"  fb:like:href="<?php echo $a->url() ?>" addthis:title="<?php echo html($a->title_ita()) ?>">
						<a class="addthis_button_facebook"><img src="<?php echo url('assets/img/icons/facebook_icon.png') ?>" border="0" alt="Share" /> <span>Share</span></a>
						</div>
						<!-- AddThis Button END -->
					</li>
				<?php endforeach ?>
			</ul>
		<?php endif ?>

		<div class='tomos'>&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;</div>

		<?php if($data->hasChildren()): ?>
			<ul>
				<?php foreach ($appuntamenti AS $a): ?>
					<li class="event">
						<h3 class="appuntamento_title"><?php echo html($a->title_en()) ?></h3>
						<div class="appuntamento_text"><?php echo kirbytext($a->text_en()) ?></div>
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style" addthis:url="<?php echo $a->url() ?>"  fb:like:href="<?php echo $a->url() ?>" addthis:title="<?php echo html($a->title_ita()) ?>">
						<a class="addthis_button_facebook"><img src="<?php echo url('assets/img/icons/facebook_icon.png') ?>" border="0" alt="Share" /> <span>Share</span></a>
						</div>
						<!-- AddThis Button END -->
					</li>
				<?php endforeach ?>
			</ul>
		<?php endif ?>

	</article>
</section>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50bcbbfd378642eb"></script>