<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Person'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Person'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="person view content">
            <h3><?= h($person->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($person->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($person->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= $person->has('job') ? $this->Html->link($person->job->name, ['controller' => 'Job', 'action' => 'view', $person->job->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($person->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Lehrberuf') ?></h4>
                <?php if (!empty($person->lehrberuf)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Bezeichnung') ?></th>
                            <th><?= __('Kurz') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($person->lehrberuf as $lehrberuf) : ?>
                        <tr>
                            <td><?= h($lehrberuf->id) ?></td>
                            <td><?= h($lehrberuf->bezeichnung) ?></td>
                            <td><?= h($lehrberuf->kurz) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Lehrberuf', 'action' => 'view', $lehrberuf->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Lehrberuf', 'action' => 'edit', $lehrberuf->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lehrberuf', 'action' => 'delete', $lehrberuf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lehrberuf->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
