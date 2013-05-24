<div class="categories index">
    <div class="actions">
        <?php echo $this->Html->link(__('Toevoegen'), array('action' => 'add'), array('class' => 'button-sleek')); ?>
    </div>
    <h2><?php echo __('Categorieën'); ?>
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
            <th class="t-left"><?php echo $this->Paginator->sort('title'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($categories as $category): ?>
                <tr>
                    <td class="t-left"><?php echo h($category['Category']['title']); ?>&nbsp;</td>
                    <td><?php echo CakeTime::i18nFormat(h($category['Category']['modified']), '%a %e %B'); ?>&nbsp;</td>

                    <td class="actions">
                        <?php echo $this->Html->link(
                            '<span class="icon-fa icon-cog"></span>',
                            array('action' => 'edit', $category['Category']['id']),
                            array('escape' => false)
                        ); ?>
                        <?php echo $this->Form->postLink(
                            '<span class="icon-fa icon-trash"></span>',
                            array('action' => 'delete', $category['Category']['id']),
                            array('escape' => false),
                            __('Are you sure you want to delete # %s?', $category['Category']['id'])
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
