<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        // create the table
        $table = $this->table('users', array('engine' => 'InnoDB', 'id' => false, 'primary_key' => 'uid'));
        $table->addColumn('uid', 'string', array('length' => 255, 'default' => '', 'null' => false))
              ->addColumn('name', 'string', array('length' => 255, 'default' => '', 'null' => false))
              ->addColumn('create_at', 'integer', array('length' => 11, 'default' => 0, 'null' => false))
              ->addColumn('update_at', 'integer', array('length' => 11, 'default' => 0, 'null' => false))
              ->addColumn('delete_at', 'integer', array('length' => 11, 'default' => 0, 'null' => false))
              ->addIndex(['uid'], ['unique' => true])
              ->create();

    }
}
