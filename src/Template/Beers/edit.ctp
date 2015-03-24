<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $beer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $beer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Beers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Formats'), ['controller' => 'Formats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Format'), ['controller' => 'Formats', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="beers form large-10 medium-9 columns">
    <?= $this->Form->create($beer); ?>
    <fieldset>
        <legend><?= __('Edit Beer') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('image_url');
            echo $this->Form->input('qte');
            echo $this->Form->input('type_id', ['options' => $types]);
            echo $this->Form->input('format_id', ['options' => $formats]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
