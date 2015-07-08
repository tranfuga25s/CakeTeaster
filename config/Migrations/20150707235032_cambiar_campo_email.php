<?php

use Phinx\Migration\AbstractMigration;

class CambiarCampoEmail extends AbstractMigration
{
    
    /**
     * 
     */
    public function up() {
        $this->table('users')->changeColumn('email', 'text');
    }
    
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function down()
    {
        $usuarios = $this->table('users');
        $usuarios->changeColumn('email', 'integer');
    }
}
