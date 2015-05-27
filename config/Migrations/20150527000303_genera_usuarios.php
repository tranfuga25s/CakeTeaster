<?php

use Phinx\Migration\AbstractMigration;

class GeneraUsuarios extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $usuarios = $this->table('users');
        $usuarios->create();
        $usuarios->addColumn('id', 'integer')
                  ->addColumn('name', 'string')
                  ->addColumn('email', 'integer')
                  ->addColumn('created', 'datetime')
                  ->addColumn('modified', 'datetime')
                  ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('users');
    }
}