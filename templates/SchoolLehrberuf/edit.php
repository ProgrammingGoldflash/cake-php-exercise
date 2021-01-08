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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schoolLehrberuf->school_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schoolLehrberuf->school_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List School Lehrberuf'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schoolLehrberuf form content">
            <?= $this->Form->create($schoolLehrberuf) ?>
            <fieldset>
                <legend><?= __('Edit School Lehrberuf') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
