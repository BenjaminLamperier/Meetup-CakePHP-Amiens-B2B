<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Beer'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="beers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('image_url') ?></th>
            <th><?= $this->Paginator->sort('qte') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($beers as $beer): ?>
        <tr>
            <td><?= h($beer->name) ?></td>
            <td><?= $this->Html->Image($beer->image_url) ?></td>
            <td><?= $this->Number->format($beer->qte) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $beer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $beer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $beer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beer->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
