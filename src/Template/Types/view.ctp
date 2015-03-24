<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Beers'), ['controller' => 'Beers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Beer'), ['controller' => 'Beers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="types view large-10 medium-9 columns">
    <h2><?= h($type->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($type->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($type->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Beers') ?></h4>
    <?php if (!empty($type->beers)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Image Url') ?></th>
            <th><?= __('Qte') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Type Id') ?></th>
            <th><?= __('Format Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($type->beers as $beers): ?>
        <tr>
            <td><?= h($beers->id) ?></td>
            <td><?= h($beers->name) ?></td>
            <td><?= h($beers->image_url) ?></td>
            <td><?= h($beers->qte) ?></td>
            <td><?= h($beers->created) ?></td>
            <td><?= h($beers->modified) ?></td>
            <td><?= h($beers->type_id) ?></td>
            <td><?= h($beers->format_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Beers', 'action' => 'view', $beers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Beers', 'action' => 'edit', $beers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Beers', 'action' => 'delete', $beers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
