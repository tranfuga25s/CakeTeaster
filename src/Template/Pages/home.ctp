<?php
/**
 *  Cake Teaster - 2015
 */
$this->assign('title', __("Inicio"));
?>
<div class="row">
    <!-- Sidebar -->
    <div class="col-xs-12 col-sm-3">
        <div class="well well-sm">
            <div class="list-group">
                <h4><?= __("Menu principal"); ?></h4>
            </div>
            <div class="list-group">
                <?= $this->Html->link($this->Html->tag('i','', ['class' => 'glyphicon glyphicon-home'])."&nbsp;".__("Inicio"), "/", ['class' => 'list-group-item', 'escape' => false] ); ?>
                <?= $this->Html->link($this->Html->tag('i','', ['class' => 'glyphicon glyphicon-briefcase'])."&nbsp;".__("Mis proyectos"), ['controller' => 'project'], ['class' => 'list-group-item', 'escape' => false]); ?>
                <?= $this->Html->link($this->Html->tag('i','', ['class' => 'glyphicon glyphicon-menu-hamburger'])."&nbsp;".__("Todos los proyectos"), ['controller' => 'project', 'action' => 'all'], ['class' => 'list-group-item', 'escape' => false] ); ?>
            </div>
        </div>
        <?= $this->element('publicidad/publicidad_menu'); ?>
    </div>
    <!-- End sidebar -->
    
    <!-- Begin main body -->
    <div class="col-xs-12 col-sm-9">
        <?= $this->element('current_navigation') ?>
        <div class="col-xs-12 col-sm-6">
            <?= $this->element('portada/ultimas_pruebas'); ?>
        </div>
        <div class="col-xs-12 col-sm-6">
            <?= $this->element('portada/mejores_proyectos'); ?>
        </div>
        <?= $this->element('publicidad/publicidad_full_width'); ?>
        <div class="col-xs-12 col-sm-6">
             <?= $this->element('portada/proyectos_mas_probados'); ?>
        </div>
        <div class="col-xs-12 col-sm-6">
            <?= $this->element('portada/mayor_cobertura'); ?>
        </div>
    </div>
    <!-- End main body -->
</div>