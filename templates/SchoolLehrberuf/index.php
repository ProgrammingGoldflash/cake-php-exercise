<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchoolLehrberuf[]|\Cake\Collection\CollectionInterface $schoolLehrberuf
 */
?>
<div class="schoolLehrberuf index content">
    <?= $this->Html->link(__('New School Lehrberuf'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('School Lehrberuf') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('school_id') ?></th>
                    <th><?= $this->Paginator->sort('lehrberuf_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schoolLehrberuf as $schoolLehrberuf): ?>
                <tr>
                    <td><?= $schoolLehrberuf->has('school') ? $this->Html->link($schoolLehrberuf->school->id, ['controller' => 'School', 'action' => 'view', $schoolLehrberuf->school->id]) : '' ?></td>
                    <td><?= $schoolLehrberuf->has('lehrberuf') ? $this->Html->link($schoolLehrberuf->lehrberuf->id, ['controller' => 'Lehrberuf', 'action' => 'view', $schoolLehrberuf->lehrberuf->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $schoolLehrberuf->school_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolLehrberuf->school_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schoolLehrberuf->school_id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolLehrberuf->school_id)]) ?>
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
