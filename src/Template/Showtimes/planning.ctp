<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $showtime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Showtimes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="showtimes form large-9 medium-8 columns content">

    <fieldset>
        <legend><?= __('Planning') ?></legend>
        <?php
            echo $this->Form->control('Select room', ['options' => $rooms]);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
