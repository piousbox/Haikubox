<div class="rows view">

    <dl><?php $i = 0;
        $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Service Name'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $row['Row']['service_name']; ?>
            <div class="actions">
                <ul>
                    <li><?php echo $html->link('[~]', array('action' => 'edit', $row['Row']['id'])); ?> </li>
                    <li><?php echo $html->link('[X]', array('action' => 'delete', $row['Row']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $row['Row']['id'])); ?> </li>

                </ul>
            </div>
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Host Url'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $row['Row']['host_url']; ?>
            <a href=<?=$row['Row']['host_url'];?>><?=$row['Row']['host_url'];?></a>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $row['Row']['username']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Passphrase'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $row['Row']['passphrase']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descr'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <pre><?php echo $row['Row']['descr']; ?></pre>
            &nbsp;
        </dd>
    </dl>
</div>



<div class="related">
    <h3>Notes</h3>
    <? foreach($row['Note'] as $note) : ?>
    <div class="note">
            <?=$note['date'];?>
        <?php echo $html->link('[X]', array('controller'=>'notes','action' => 'delete', $note['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $note['id'])); ?>
        <br />
            <?=$note['body'];?>
    </div>
    <? endforeach; ?>
</div>



<div class="notes form">
    <?php echo $form->create('Note');?>
    <fieldset>
        <legend><?php __('Add Note');?></legend>
        <?php
        echo $form->input('date', array('type'=>'text','value'=>date('Y-m-d')));
        echo $form->input('body');
        echo $form->input('row_id',array('value'=>$row['Row']['id'],'type'=>'hidden'));
        ?>
    </fieldset>
    <?php echo $form->end('Submit');?>
</div>