<?php

use yii\db\Migration;

/**
 * Class m181219_174747_install
 * @property array $options
 */
class m181219_174747_install extends Migration
{


    public function safeUp()
    {
        $this->dropTables();

        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'order' => $this->integer()->defaultValue(0),
            'name' => $this->string()->notNull(),
            'alias' => $this->string()->notNull(),
        ], $this->options);

        $this->createIndex('idx-category-order', 'category', 'order');
        $this->createIndex('idx-category-alias', 'category', 'alias');

        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'catid' => $this->integer()->null(),
            'order' => $this->integer()->defaultValue(0),
            'name' => $this->string()->notNull(),
            'desc' => $this->text(),
            'price' => $this->string(),
        ], $this->options);

        $this->createIndex('idx-product-catid', 'product', 'catid');
        $this->createIndex('idx-product-order', 'product', 'order');

        $this->addForeignKey(
            'fk-product-category',
            'product',
            'catid',
            'category',
            'id',
            'SET NULL',
            'RESTRICT'
        );

        $this->createTable('size', [
            'id' => $this->primaryKey(),
            'order' => $this->integer()->defaultValue(0),
            'html' => $this->text(),
        ], $this->options);

        $this->createIndex('idx-size-order', 'size', 'order');

        $this->createTable('product_size', [
            'product_id' => $this->integer()->notNull(),
            'size_id' => $this->integer()->notNull(),
        ], $this->options);

        $this->addPrimaryKey('pk-product_size', 'product_size', ['product_id', 'size_id']);

        $this->createIndex('idx-product_size-product_id','product_size','product_id');
        $this->addForeignKey(
            'fk-product_size-product',
            'product_size',
            'product_id',
            'product',
            'id',
            'CASCADE',
            'RESTRICT'
        );

        $this->createIndex('idx-product_size-size_id','product_size','size_id');
        $this->addForeignKey(
            'fk-product_size-size',
            'product_size',
            'size_id',
            'size',
            'id',
            'CASCADE',
            'RESTRICT'
        );

        $this->createTable('social', [
            'id' => $this->primaryKey(),
            'order' => $this->integer()->defaultValue(0),
            'name' => $this->string(),
            'icon' => $this->string(),
            'url' => $this->string(),
        ], $this->options);

        $this->insertData();
    }


    public function insertData()
    {
        $this->batchInsert('category', ['order','alias','name'], [
            ['1','futbolki','Футболки'],
            ['2','tolstovki','Толстовки'],
            ['3','knigi','Книги'],
            ['4','postery','Постеры'],
            ['5','znachki','Значки'],
            ['6','stikery','Стикеры '],
        ]);

        $this->batchInsert('social', ['order','icon','url'], [
            ['1','i-facebook-f','https://www.facebook.com/rybakovigorcom/'],
            ['2','i-vk','https://vk.com/rybakovigorcom'],
            ['3','i-instagram','https://www.instagram.com/rybakov_igor/'],
            ['4','i-twitter','https://twitter.com/rybakovigor'],
            ['5','i-youtube','https://www.youtube.com/channel/UCdOUvNFp8y6KTkswzeu7naQ/featured'],
            ['6','i-telegram-plane','https://t-do.ru/rybakovigor'],
        ]);
    }


    public function safeDown()
    {
        $this->dropTables();
    }


    public function getOptions()
    {
        if ($this->db->driverName === 'mysql') {
            return 'CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE=InnoDB';
        }
        return null;
    }


    private function dropTables()
    {
        $tablesArr = [
            'category',
            'product',
            'size',
            'product_size',
            'social',
        ];
        try {
            $this->db->createCommand("SET foreign_key_checks = 0")->execute();
            foreach ($tablesArr as $table) {
                $tableName = $this->db->tablePrefix . $table;
                if ($this->db->getTableSchema($tableName, true) !== null) {
                    $this->dropTable($tableName);
                }
            }
            $this->db->createCommand("SET foreign_key_checks = 1")->execute();
            return 'All Done';
        } catch (\yii\db\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181219_174747_install cannot be reverted.\n";

        return false;
    }
    */
}