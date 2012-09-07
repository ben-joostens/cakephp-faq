<div class="questions index">
	<h2><?php echo __('FAQ');?></h2>
	<?php foreach ($categories as $category): ?>
	<h3><?php echo $category['Category']['title'];?></h3>
		<?php foreach ($category['Question'] as $question): ?>
			<h4 id="<?php echo $question['slug'];?>"><?php echo $question['question']; ?></h4>
			<p><?php echo nl2br($this->Text->autoLink($question['answer']));?></p>
		<?php endforeach; ?>
	<?php endforeach; ?>
</div>
<section class="faq">
	<h2><?php echo __('FAQ');?></h2>
	<?php foreach ($categories as $category): ?>
	<h3><?php echo $category['Category']['title'];?></h3>
	<ul>
		<?php foreach ($category['Question'] as $question): ?>
		<li><?php echo $this->Html->link($question['question'], array(
				'plugin' => 'faq',
				'controller' => 'questions',
				'action' => 'index',
				'#' => $question['slug']
			)); ?>
		</li>
		<?php endforeach; ?>
	</ul>
	<?php endforeach; ?>
</section>