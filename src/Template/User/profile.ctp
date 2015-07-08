<div class="row">
    <div class="col-xs-12 col-sm-12">
        <h2><?= __("Perfil"); ?></h2>
    </div>
    <div class="col-xs-12 col-sm-2">
      <img src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg"  alt="" class="img-rounded" width="200">
    </div>
    <div class="col-xs-12 col-sm-6">
      <blockquote>
        <p><?= $user->nombre; ?></p>
        <small><cite title="Source Title">A good developer with good intentions</cite></small>
      </blockquote>
      <p>
        <i class="icon-envelope"></i><?= $this->Text->autoParagraph(h($user->email)); ?><br />
        <!-- <i class="icon-globe"></i> www.bootsnipp.com <br> -->
        <!-- <i class="icon-gift"></i> January 30, 1974 -->
        <i class="icon-tasks"></i> &nbsp;<?= __('Creado') ?>:<b><?= h($user->created) ?></b><br />
        <i class="icon-tasks"></i> &nbsp;<?= __('Modificado') ?>:<b><?= h($user->modified) ?></b><br />
      </p>
    </div>
    <div class="col-sm-3">
        <div class="list-group">
            <?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $user->id], ['class' => 'list-group-item']) ?> 
            <?= $this->Form->postLink(__('Eliminar usuario'), ['action' => 'delete', $user->id], ['class' => 'list-group-item', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
            <?= $this->Html->link(__('Listar Usuario'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
            <?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add'], ['class' => 'list-group-item']) ?> 
        </div>
    </div>
</div>
<hr />
<div class="row"><?= $this->element('publicidad/publicidad_full_width'); ?></div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading"><h3><?= __("Mis proyectos"); ?></h3></div>
        <table class="table table-bordered table-condensed table-condensed">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?= __("Nombre"); ?></th>
                    <th><?= __("Ultima prueba"); ?></th>
                    <th><?= __("Ultima prueba correcta"); ?></th>
                    <th><?= __("Acciones"); ?></th> 
                </tr>
            </thead>
        </table>
        <div class="panel-footer text-right">
            <?= $this->Html->link(__("Agregar proyecto"), "/", ['class' => 'btn btn-success']); ?>
        </div>
    </div>
</div>
