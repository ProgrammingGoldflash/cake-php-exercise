<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Person'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="person form content">

            <?= $this->Form->create(null,['type' => 'post', 'url' => [
                'controller' => 'Person',
                'action' => 'search'
            ]]) ?>
            <fieldset>
                <legend><?= __('Suche durchführen') ?></legend>
                <input type="text" id="search_word" name="search_word", maxlength="25">                
                <?php echo $this->Form->control('job_id', ['options' => $jobs]); ?>
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
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Job</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($foundedPersons as $person): ?>
                <tr>
                    <td><?= $this->Number->format($person->id) ?></td>
                    <td><?= h($person->first_name) ?></td>
                    <td><?= h($person->last_name) ?></td>
                    <td><?= h($person->job->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $person->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>