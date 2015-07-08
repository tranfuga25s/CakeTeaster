<div class="row">
    <div class="col-lg-9">
        <?= $this->Form->create($user); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><?= __('Agregar Usuario') ?></h2>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-lg-3 control-label"><?= __("Nombre de usuario:"); ?></label>
                    <div class="col-lg-10">
                        <?= $this->Form->input('name',['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" label-for="email"><?= __("Email:"); ?></label>
                    <div class="col-lg-10">
                        <?= $this->Form->input('email',['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>    
            <div class="panel-footer">
                <?= $this->Form->button(__('Agregar'), ['class' => 'btn btn-default']); ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
    
    <div class="col-lg-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><?= __("Acciones"); ?></div>
                    <div class="panel-body list-group">
                        <?php  echo $this->Html->link(__('List User'), ['action' => 'index'], ['class' => 'list-group-item']); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <?= $this->element('publicidad/publicidad_menu'); ?>
            </div>
        </div>
    </div>
</div>