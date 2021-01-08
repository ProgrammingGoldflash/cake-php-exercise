<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PersonLehrberuf $personLehrberuf
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Person Lehrberuf'), ['action' => 'edit', $personLehrberuf->person_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Person Lehrberuf'), ['action' => 'delete', $personLehrberuf->person_id], ['confirm' => __('Are you sure you want to delete # {0}?', $personLehrberuf->person_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Person Lehrberuf'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Person Lehrberuf'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="personLehrberuf view content">
            <h3><?= h($personLehrberuf->person_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Person') ?></th>
                    <td><?= $personLehrberuf->has('person') ? $this->Html->link($personLehrberuf->person->id, ['controller' => 'Person', 'action' => 'view', $personLehrberuf->person->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('School Lehrberuf') ?></th>
                    <td><?= $personLehrberuf->has('school_lehrberuf') ? $this->Html->link($personLehrberuf->school_lehrberuf->school_id, ['controller' => 'SchoolLehrberuf', 'action' => 'view', $personLehrberuf->school_lehrberuf->school_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('School Id') ?></th>
                    <td><?= $this->Number->format($personLehrberuf->school_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($personLehrberuf->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($personLehrberuf->end_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
