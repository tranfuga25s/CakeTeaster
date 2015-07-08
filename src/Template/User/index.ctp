<div class="row">
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading"><h3><?= __("Usuarios activos"); ?></h3></div>
            <table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id', __("#ID")) ?></th>
                        <th><?= $this->Paginator->sort('name', __("Nombre de usuario")) ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $user): ?>
                        <tr>
                            <td>#<?= $this->Number->format($user->id); ?></td>
                            <td><?= h($user->name) ?></td>
                            <td><?= $this->Html->link( h($user->email), "mailto:".$user->email); ?></td>
                            <td><?= h($user->created); ?></td>
                            <td><?= h($user->modified); ?></td>
                            <td class="actions">
                                <?= $this->Html->link($this->Html->tag('i','', ['class' => 'glyphicon glyphicon-search'])."&nbsp;".__('Ver'), ['action' => 'view', $user->id], ['class' => 'btn btn-default btn-sm', 'escape' => false]) ?>
                                <?= $this->Html->link($this->Html->tag('i','', ['class' => 'glyphicon glyphicon-pencil'])."&nbsp;".__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                                <?= $this->Form->postLink($this->Html->tag('i','', ['class' => 'glyphicon glyphicon-remove'])."&nbsp;".__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="panel-body">
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading"><h3><?= __('Acciones') ?></h3></div>
            <div class="panel-body">
                <div class=" list-group">
                    <?= $this->Html->link(
                            $this->Html->tag('i','', ['class' => 'glyphicon glyphicon-plus']).
                            "&nbsp;".__('Nuevo Usuario'), 
                            ['action' => 'add'], 
                            ['class' => 'list-group-item', 'escape' => false]); ?>
                </div>
            </div>
        </div>
        <?= $this->element('publicidad/publicidad_menu'); ?>
    </div>    
</div>