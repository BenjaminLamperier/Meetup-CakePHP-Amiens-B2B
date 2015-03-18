<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Beers'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="beers form large-10 medium-9 columns">
    <?= $this->Form->create($beer); ?>
    <fieldset>
        <legend><?= __('Add Beer') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('image_url');
            echo $this->Form->input('qte');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
