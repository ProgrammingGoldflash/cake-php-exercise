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
            <?= $this->Html->link(__('List Person Lehrberuf'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="personLehrberuf form content">
            <?= $this->Form->create($personLehrberuf) ?>
            <fieldset>
                <legend><?= __('Add Person Lehrberuf') ?></legend>
                <?php
                    echo $this->Form->control('start_date');
                    echo $this->Form->control('end_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
