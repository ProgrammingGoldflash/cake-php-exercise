<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $school->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $school->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List School'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="school form content">
            <?= $this->Form->create($school) ?>
            <fieldset>
                <legend><?= __('Edit School') ?></legend>
                <?php
                    echo $this->Form->control('ort');
                    echo $this->Form->control('zusatz');
                    echo $this->Form->control('lehrberuf._ids', ['options' => $lehrberuf]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
