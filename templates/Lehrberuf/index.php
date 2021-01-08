<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lehrberuf[]|\Cake\Collection\CollectionInterface $lehrberuf
 */
?>
<div class="lehrberuf index content">
    <?= $this->Html->link(__('New Lehrberuf'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lehrberuf') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('bezeichnung') ?></th>
                    <th><?= $this->Paginator->sort('kurz') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lehrberuf as $lehrberuf): ?>
                <tr>
                    <td><?= $this->Number->format($lehrberuf->id) ?></td>
                    <td><?= h($lehrberuf->bezeichnung) ?></td>
                    <td><?= h($lehrberuf->kurz) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lehrberuf->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lehrberuf->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lehrberuf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lehrberuf->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
