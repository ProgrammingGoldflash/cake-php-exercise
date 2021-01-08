<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchoolLehrberuf $schoolLehrberuf
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit School Lehrberuf'), ['action' => 'edit', $schoolLehrberuf->school_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete School Lehrberuf'), ['action' => 'delete', $schoolLehrberuf->school_id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolLehrberuf->school_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List School Lehrberuf'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New School Lehrberuf'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schoolLehrberuf view content">
            <h3><?= h($schoolLehrberuf->school_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('School') ?></th>
                    <td><?= $schoolLehrberuf->has('school') ? $this->Html->link($schoolLehrberuf->school->id, ['controller' => 'School', 'action' => 'view', $schoolLehrberuf->school->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lehrberuf') ?></th>
                    <td><?= $schoolLehrberuf->has('lehrberuf') ? $this->Html->link($schoolLehrberuf->lehrberuf->id, ['controller' => 'Lehrberuf', 'action' => 'view', $schoolLehrberuf->lehrberuf->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
