<div class="rows index">
    <h2><?php __('Rows');?></h2>
    <p>
        <?php
        echo $paginator->counter(array(
        'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
        ));
        ?></p>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $paginator->sort('id');?></th>
            <th><?php echo $paginator->sort('service_name');?></th>
            <th><?php echo $paginator->sort('host_url');?></th>
            <th><?php echo $paginator->sort('username');?></th>
            <th><?php echo $paginator->sort('passphrase');?></th>
            <th><?php echo $paginator->sort('descr');?></th>
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
                    <?php echo $row['Row']['id']; ?>
            </td>
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
<div class="paging">
    <?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
    | 	<?php echo $paginator->numbers();?>
    <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link(__('New Row', true), array('action' => 'add')); ?></li>
    </ul>
</div>
