<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PersonLehrberuf[]|\Cake\Collection\CollectionInterface $personLehrberuf
 */
?>
<div class="personLehrberuf index content">
    <?= $this->Html->link(__('New Person Lehrberuf'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Person Lehrberuf') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('person_id') ?></th>
                    <th><?= $this->Paginator->sort('school_id') ?></th>
                    <th><?= $this->Paginator->sort('lehrberuf_id') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($personLehrberuf as $personLehrberuf): ?>
                <tr>
                    <td><?= $personLehrberuf->has('person') ? $this->Html->link($personLehrberuf->person->id, ['controller' => 'Person', 'action' => 'view', $personLehrberuf->person->id]) : '' ?></td>
                    <td><?= $this->Number->format($personLehrberuf->school_id) ?></td>
                    <td><?= $personLehrberuf->has('school_lehrberuf') ? $this->Html->link($personLehrberuf->school_lehrberuf->school_id, ['controller' => 'SchoolLehrberuf', 'action' => 'view', $personLehrberuf->school_lehrberuf->school_id]) : '' ?></td>
                    <td><?= $personLehrberuf->has('lehrberuf') ? $this->Html->link($personLehrberuf->lehrberuf->id, ['controller' => 'Lehrberuf', 'action' => 'view', $personLehrberuf->lehrberuf->id]) : '' ?></td>
                    <td><?= h($personLehrberuf->start_date) ?></td>
                    <td><?= h($personLehrberuf->end_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $personLehrberuf->person_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $personLehrberuf->person_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $personLehrberuf->person_id], ['confirm' => __('Are you sure you want to delete # {0}?', $personLehrberuf->person_id)]) ?>
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
