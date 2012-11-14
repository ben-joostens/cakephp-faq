<section class="faq">
	<?php $categories = $this->requestAction(array(
		'plugin' => 'faq',
		'controller' => 'categories',
		'action' => 'index'
	)); ?>
	<h1><?php echo __('FAQ');?></h1>
	<?php foreach ($categories as $category): ?>
		<h3><?php echo $category['Category']['title'];?></h3>
		<ul>
			<?php foreach ($category['Question'] as $question): ?>
				<li><span class="icon chevron-right-black"></span><?php echo $this->Html->link($question['question'], array(
					'plugin' => 'faq',
					'controller' => 'categories',
					'action' => 'index',
					'#' => $question['slug'])
				); ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endforeach; ?>
</section>