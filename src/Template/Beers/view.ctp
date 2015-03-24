<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Beer'), ['action' => 'edit', $beer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Beer'), ['action' => 'delete', $beer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Beers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Beer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Formats'), ['controller' => 'Formats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Format'), ['controller' => 'Formats', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="beers view large-10 medium-9 columns">
    <h2><?= h($beer->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($beer->name) ?></p>
            <h6 class="subheader"><?= __('Image Url') ?></h6>
            <p><?= h($beer->image_url) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= $beer->has('type') ? $this->Html->link($beer->type->name, ['controller' => 'Types', 'action' => 'view', $beer->type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Format') ?></h6>
            <p><?= $beer->has('format') ? $this->Html->link($beer->format->id, ['controller' => 'Formats', 'action' => 'view', $beer->format->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($beer->id) ?></p>
            <h6 class="subheader"><?= __('Qte') ?></h6>
            <p><?= $this->Number->format($beer->qte) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($beer->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($beer->modified) ?></p>
        </div>
    </div>
</div>
