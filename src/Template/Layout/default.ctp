<?php
/**
 * CakeTeaster - 2015
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?> : CakeTeaster</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only"><?= __("Toggle navigation") ?></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <?= $this->Html->link(  $this->Html->image('http://cakephp.org/img/cake-logo.png', ['style' => "height: 30px"]),
                                        "/",
                                        [ 'class' => "navbar-brand", 'escape' => false ] ); ?>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= __("Proyectos"); ?>&nbsp; <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <!--<li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li class="divider"></li>
                      <li><a href="#">One more separated link</a></li> -->
                    </ul>
                  </li>
                </ul> 
                <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input class="form-control" placeholder="<?= __("Buscar") ?>" type="text">
                  </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li><?= $this->Html->link(__("Ayuda"), ['controller' => 'pages', 'ayuda']); ?></li>
                  <li><?= $this->Html->link(__("Perfil"), ['controller' => 'user', 'action' => 'perfil'] ); ?>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <div id="container" style="margin-left: 20px; margin-right: 20px;">

        <div id="content">
            <?= $this->Flash->render() ?>
            <div class="row">
                <div class="col-sm-12">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
        
    </div>
    <hr />
    <footer style="margin-left: 20px; margin-right: 20px;">
        <div class="row">
            <div class="col-sm-12"><?= date("Y"); ?> - CakeTeaster - Tranfuga25s</div>
        </div>
    </footer>
</body>
</html>
