<div class="rows form">
    <?php echo $form->create('Row');?>
    <fieldset>
        <legend><?php __('Add Row');?></legend>
        <?php
        e($form->submit('Submit'));
        echo $form->input('service_name');
        e('If necessary, clarify access method in the description');
        echo $form->input('host_url');

        echo $form->input('username');
        echo $form->input('passphrase');
        echo $form->input('descr');
        ?>
    </fieldset>
    <?php echo $form->end('Submit');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link(__('List Rows', true), array('action' => 'index'));?></li>
    </ul>
</div>
