<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School[]|\Cake\Collection\CollectionInterface $school
 */
?>
<div class="school index content">
    <?= $this->Html->link(__('New School'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('School') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ort') ?></th>
                    <th><?= $this->Paginator->sort('zusatz') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($school as $school): ?>
                <tr>
                    <td><?= $this->Number->format($school->id) ?></td>
                    <td><?= h($school->ort) ?></td>
                    <td><?= h($school->zusatz) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $school->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $school->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?>
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
