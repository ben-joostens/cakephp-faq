<div class="questions index">
    <div class="actions">
        <?php echo $this->Html->link(__('Toevoegen'), array('action' => 'add'), array('class' => 'button-sleek')); ?>
    </div>
    <h2><?php echo __('Vragen'); ?>
        <span class="item-count">
            <?php
                echo $this->Paginator->counter(
                    array(
                        'format' => __('{:count} items')
                    )
                );    ?>
        </span>
    </h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th class="t-left"><?php echo $this->Paginator->sort('question'); ?></th>
            <th><?php echo $this->Paginator->sort('category_id'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($questions as $question): ?>
                <tr>
                    <td class="t-left"><?php echo h($question['Question']['question']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link(
                            $question['Category']['title'],
                            array('controller' => 'categories', 'action' => 'view', $question['Category']['id'])
                        ); ?>
                    </td>
                    <td><?php echo CakeTime::i18nFormat(h($question['Question']['modified']), '%a %e %B'); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(
                            '<span class="icon-fa icon-cog"></span>',
                            array('action' => 'edit', $question['Question']['id']),
                            array('escape' => false)
                        ); ?>
                        <?php echo $this->Form->postLink(
                            '<span class="icon-fa icon-trash"></span>',
                            array('action' => 'delete', $question['Question']['id']),
                            array('escape' => false),
                            __('Are you sure you want to delete # %s?', $question['Question']['id'])
                        ); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
