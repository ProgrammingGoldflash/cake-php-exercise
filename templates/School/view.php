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
            <?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List School'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New School'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="school view content">
            <h3><?= h($school->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ort') ?></th>
                    <td><?= h($school->ort) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zusatz') ?></th>
                    <td><?= h($school->zusatz) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($school->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Lehrberuf') ?></h4>
                <?php if (!empty($school->lehrberuf)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Bezeichnung') ?></th>
                            <th><?= __('Kurz') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($school->lehrberuf as $lehrberuf) : ?>
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
            <div class="related">
                <h4><?= __('Related Person Lehrberuf') ?></h4>
                <?php if (!empty($school->person_lehrberuf)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('School Id') ?></th>
                            <th><?= __('Lehrberuf Id') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('End Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($school->person_lehrberuf as $personLehrberuf) : ?>
                        <tr>
                            <td><?= h($personLehrberuf->person_id) ?></td>
                            <td><?= h($personLehrberuf->school_id) ?></td>
                            <td><?= h($personLehrberuf->lehrberuf_id) ?></td>
                            <td><?= h($personLehrberuf->start_date) ?></td>
                            <td><?= h($personLehrberuf->end_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PersonLehrberuf', 'action' => 'view', $personLehrberuf->person_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PersonLehrberuf', 'action' => 'edit', $personLehrberuf->person_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PersonLehrberuf', 'action' => 'delete', $personLehrberuf->person_id], ['confirm' => __('Are you sure you want to delete # {0}?', $personLehrberuf->person_id)]) ?>
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
