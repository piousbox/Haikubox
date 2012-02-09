<div class="rows index">

    <h2>List of service names of haikus</h2>
    <? foreach($rows as $row) : ?>
        <?=$html->link($row['Row']['service_name'],array('controller'=>'rows','action'=>'view',$row['Row']['id']));?>
        <?=$html->link('[~]',array('controller'=>'rows','action'=>'edit',$row['Row']['id']));?>
        <?php echo $html->link('[X]', array('action' => 'delete', $row['Row']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $row['Row']['id'])); ?><br />
    <? endforeach; ?>
        
    <h2><?php __('Rows');?></h2>
    
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Service Name</th>
            <th>Host Url</th>
            <th>Username</th>
            <th>Passphrase</th>
            <th>Descr</th>
            <th class="actions"><?php __('Actions');?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($rows as $row):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
        <tr<?php echo $class;?>>
            <td>
                    <?php echo $row['Row']['service_name']; ?>
            </td>
            <td>
                    <?php echo $row['Row']['host_url']; ?>
            </td>
            <td>
                    <?php echo $row['Row']['username']; ?>
            </td>
            <td>
                    <?php echo $row['Row']['passphrase']; ?>
            </td>
            <td>
                    <?php echo $row['Row']['descr']; ?>
            </td>
            <td class="actions">
                    <?php echo $html->link(__('View', true), array('action' => 'view', $row['Row']['id'])); ?>
                    <?php echo $html->link(__('Edit', true), array('action' => 'edit', $row['Row']['id'])); ?>
                    <?php echo $html->link(__('Delete', true), array('action' => 'delete', $row['Row']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $row['Row']['id'])); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link(__('New Row', true), array('action' => 'add')); ?></li>
    </ul>
</div>
