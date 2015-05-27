<?php
use Phinx\Migration\AbstractMigration;

class CrearProyectos extends AbstractMigration
{    
    /**
     * Migrate Up.
     */
    public function up() {
        $proyectos = $this->table('projects');
        $proyectos->create();
        $proyectos->addColumn('id', 'integer')
                  ->addColumn('name', 'string')
                  ->addColumn('user_id', 'integer')
                  ->addColumn('created', 'datetime')
                  ->addColumn('modified', 'datetime')
                  ->save();
    }

    /**
     * Migrate Down.
     */
    public function down() {
        $this->dropTable('projects');
    }
}