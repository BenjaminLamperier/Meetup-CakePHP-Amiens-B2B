<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $format->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $format->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Formats'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Beers'), ['controller' => 'Beers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Beer'), ['controller' => 'Beers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="formats form large-10 medium-9 columns">
    <?= $this->Form->create($format); ?>
    <fieldset>
        <legend><?= __('Edit Format') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
