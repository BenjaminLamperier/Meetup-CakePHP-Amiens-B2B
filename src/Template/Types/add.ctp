<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Beers'), ['controller' => 'Beers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Beer'), ['controller' => 'Beers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="types form large-10 medium-9 columns">
    <?= $this->Form->create($type); ?>
    <fieldset>
        <legend><?= __('Add Type') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
