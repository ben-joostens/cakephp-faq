<h1><?php echo __('FAQ');?></h1>
<section class="instructies">
	<?php foreach ($categories as $category): ?>
	<h2><?php echo $category['Category']['title'];?></h2>
		<?php foreach ($category['Question'] as $question): ?>
			<article class="faq" id="<?php echo $question['slug'];?>">
				<h3><?php echo $question['question']; ?></h3>
				<p><?php echo nl2br($this->Text->autoLink($question['answer']));?></p>
			</article>
		<?php endforeach; ?>
	<?php endforeach; ?>
</section>
<?php echo $this->element('Faq.faq');?>

<script type="text/javascript"