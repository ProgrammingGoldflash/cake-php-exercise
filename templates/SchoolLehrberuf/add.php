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
            <?= $this->Html->link(__('List School Lehrberuf'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schoolLehrberuf form content">
            <?= $this->Form->create($schoolLehrberuf) ?>
            <fieldset>
                <legend><?= __('Add School Lehrberuf') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
