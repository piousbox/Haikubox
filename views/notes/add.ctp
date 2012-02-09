<div class="notes form">
<?php echo $form->create('Note');?>
	<fieldset>
 		<legend><?php __('Add Note');?></legend>
	<?php
		echo $form->input('date');
		echo $form->input('body');
		echo $form->input('row_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Notes', true), array('action' => 'index'));?></li>
	</ul>
</div>
