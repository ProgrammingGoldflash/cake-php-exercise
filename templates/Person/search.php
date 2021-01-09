<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Anbieter'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="anbieter form content">

            <?= $this->Form->create(null,['type' => 'post', 'url' => [
                'controller' => 'Person',
                'action' => 'search'
            ]]) ?>
            <fieldset>
                <legend><?= __('Suche durchführen') ?></legend>
                <input type="text" id="search_word" name="search_word", maxlength="25">
                <?php

                ?>
            </fieldset>
            <?= $this->Form->button(__('Suche')) ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="table-responsive">
        <table>
            <thead>
            <tr>
                <th>id</th>
                <th>Titel</th>
                <th>url</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($foundedPersons as $supplier): ?>
                <tr>
                    <td><?= $this->Number->format($supplier->id) ?></td>
                    <td><?= h($supplier->first_name) ?></td>
                    <td><?= h($supplier->last_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supplier->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplier->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>