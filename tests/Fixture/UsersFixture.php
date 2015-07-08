<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'users';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'nombre' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        'email' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'sqlite_autoindex_user_3' => ['type' => 'unique', 'columns' => ['email'], 'length' => []],
            'sqlite_autoindex_user_2' => ['type' => 'unique', 'columns' => ['nombre'], 'length' => []],
            'sqlite_autoindex_user_1' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'nombre' => 'tranfuga25s',
            'email' => 'esteban.zeller+test@gmail.com',
            'created' => '2015-04-02 18:00:25',
            'modified' => '2015-04-02 18:00:25'
        ],
    ];
}
