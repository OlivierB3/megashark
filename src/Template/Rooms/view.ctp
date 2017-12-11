<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($room->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($room->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
        <tr>
            <th scope="row">Liste des films : </th>
        <tr>
       
    </table>
    <table>
        <thead>
        <tr>
            <th scope="col">Lundi</th>
            <th scope="col">Mardi</th>
            <th scope="col">Mercredi</th>
            <th scope="col">Jeudi</th>
            <th scope="col">Vendredi</th>
            <th scope="col">Samedi</th>
            <th scope="col">Dimanche</th>
        </tr>
        </thead>
    <table>
    <div id="contentBox" style="margin:0px auto; width:70%">
        <?php for($i=0;$i<7;$i++): ?>
            <table style="float:left; margin:0; width:14.2%;">
                <?php 
                    if(isset($films[$i])):
                        foreach($films[$i] as $film): ?>
                        <tr>
                            <td>
                                <?= h($film->movie->name); ?>
                                <br> 
                                <?= h($film->movie->duration); ?>
                                 minutes
                            </td>
                        </tr>
                      <?php endforeach;
                    else:
                        echo "<tr><td>  </td></tr>";
                endif;?>
            </table>
        <?php endfor;  ?>      
    </div>
</div>
