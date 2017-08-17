<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<h1>
		<?php print render($title_prefix); ?>
		<?php print $title; ?>
		<?php print render($title_suffix); ?>
	</h1>
	<?php if ($display_submitted): ?>
		<div class="submitted">
			<?php print $submitted; ?>
		</div>
	<?php endif; ?>
	<div class="content"<?php print $content_attributes; ?>>
		<div id="product-image">
			<?php print views_embed_view('image_goods','block_1', $node->vid);?>
			<?php print views_embed_view('image_goods','block', $node->vid);?>
		</div>
		<div id="product-info">
			<?php   print views_embed_view('image_goods','block_3', $node->vid);?>
			<?php
				// We hide the comments and links now so that we can render them later.
				hide($content['comments']);
				hide($content['links']);
				hide($content['body']);
				print render($content);
			?>
			<div class="est-vopros"> Есть вопрос?</div>
			<div class="order-back-call"> <a href="/obratnyy-zvonok"> Закажите обратный звонок!</a></div>
			<?php   print views_embed_view('image_goods','block_4', $node->vid);?>
			<div class="how-order"> <a href="/usloviya-priobreteniya">Как заказать?</a></div>
		</div>
	</div>
	<?php print render($content['links']); ?>
	<?php print render($content['comments']); ?>
</div>