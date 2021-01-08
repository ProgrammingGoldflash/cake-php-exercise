<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lehrberuf $lehrberuf
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lehrberuf->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lehrberuf->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lehrberuf'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lehrberuf form content">
            <?= $this->Form->create($lehrberuf) ?>
            <fieldset>
                <legend><?= __('Edit Lehrberuf') ?></legend>
                <?php
                    echo $this->Form->control('bezeichnung');
                    echo $this->Form->control('kurz');
                    echo $this->Form->control('person._ids', ['options' => $person]);
                    echo $this->Form->control('school._ids', ['options' => $school]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
