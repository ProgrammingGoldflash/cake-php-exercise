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
            <?= $this->Html->link(__('Edit Lehrberuf'), ['action' => 'edit', $lehrberuf->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lehrberuf'), ['action' => 'delete', $lehrberuf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lehrberuf->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lehrberuf'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lehrberuf'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lehrberuf view content">
            <h3><?= h($lehrberuf->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bezeichnung') ?></th>
                    <td><?= h($lehrberuf->bezeichnung) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kurz') ?></th>
                    <td><?= h($lehrberuf->kurz) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lehrberuf->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Person') ?></h4>
                <?php if (!empty($lehrberuf->person)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Job Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($lehrberuf->person as $person) : ?>
                        <tr>
                            <td><?= h($person->id) ?></td>
                            <td><?= h($person->first_name) ?></td>
                            <td><?= h($person->last_name) ?></td>
                            <td><?= h($person->job_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Person', 'action' => 'view', $person->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Person', 'action' => 'edit', $person->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Person', 'action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related School') ?></h4>
                <?php if (!empty($lehrberuf->school)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ort') ?></th>
                            <th><?= __('Zusatz') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($lehrberuf->school as $school) : ?>
                        <tr>
                            <td><?= h($school->id) ?></td>
                            <td><?= h($school->ort) ?></td>
                            <td><?= h($school->zusatz) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'School', 'action' => 'view', $school->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'School', 'action' => 'edit', $school->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'School', 'action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?>
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
