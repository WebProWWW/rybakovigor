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
            'id'     => $this->primaryKey(),
            'order'  => $this->integer()->defaultValue(0),
            'name'   => $this->string()->notNull(),
            'alias'  => $this->string()->notNull(),
            'tpl'    => $this->string()->notNull(),
        ], $this->options);

        $this->createIndex('idx-category-order','category','order');
        $this->createIndex('idx-category-alias','category','alias');

        $this->createTable('product', [
            'id'     => $this->primaryKey(),
            'catid'  => $this->integer()->null(),
            'order'  => $this->integer()->defaultValue(0),
            'name'   => $this->string()->notNull(),
            'desc'   => $this->text(),
            'price'  => $this->string(),
            'img'    => $this->string(),
        ], $this->options);

        $this->createIndex('idx-product-catid', 'product', 'catid');
        $this->createIndex('idx-product-order', 'product', 'order');
        $this->addForeignKey('fk-product-category','product','catid','category','id','SET NULL','RESTRICT');

        $this->createTable('size', [
            'id'     => $this->primaryKey(),
            'order'  => $this->integer()->defaultValue(0),
            'html'   => $this->text(),
        ], $this->options);

        $this->createIndex('idx-size-order','size','order');

        $this->createTable('product_size', [
            'product_id'  => $this->integer()->notNull(),
            'size_id'     => $this->integer()->notNull(),
        ], $this->options);

        $this->addPrimaryKey('pk-product_size', 'product_size', ['product_id', 'size_id']);
        $this->createIndex('idx-product_size-product_id','product_size','product_id');
        $this->addForeignKey('fk-product_size-product','product_size','product_id','product','id','CASCADE','RESTRICT');
        $this->createIndex('idx-product_size-size_id','product_size','size_id');
        $this->addForeignKey('fk-product_size-size','product_size','size_id','size','id','CASCADE','RESTRICT');

        $this->createTable('social', [
            'id'      => $this->primaryKey(),
            'order'   => $this->integer()->defaultValue(0),
            'name'    => $this->string(),
            'icon'    => $this->string(),
            'url'     => $this->string(),
        ], $this->options);

        $this->insertData();
    }


    public function insertData()
    {
        $this->batchInsert('social', ['order','icon','url'], [
            ['1','i-facebook-f','https://www.facebook.com/rybakovigorcom/'],
            ['2','i-vk','https://vk.com/rybakovigorcom'],
            ['3','i-instagram','https://www.instagram.com/rybakov_igor/'],
            ['4','i-twitter','https://twitter.com/rybakovigor'],
            ['5','i-youtube','https://www.youtube.com/channel/UCdOUvNFp8y6KTkswzeu7naQ/featured'],
            ['6','i-telegram-plane','https://tele.click/rybakovigor'],
        ]);

        $this->batchInsert('category', ['id','order','alias','name','tpl'], [
            ['1','1','futbolki','Футболки','cat-products-a'],
            // ['2','2','tolstovki','Толстовки',''],
            ['3','3','knigi','Книги','cat-products-b'],
            ['4','4','postery','Постеры','cat-products-c'],
            ['5','5','znachki','Значки','cat-products-d'],
            ['6','6','stikery','Стикеры ','cat-products-d'],
            ['7','7','ir-digital','!R Digital','cat-products-a'],
            ['8','8','air-force','A!R Force','cat-products-d'],
        ]);

        $this->batchInsert('product', ['catid','order','name','desc','price', 'img'], [
            // ФУТБОЛКИ
            ['1','1','Преобразующий вихрь','100% хлопок','1490','/img/product/4-1.jpg'],
            ['1','2','Ошибайся лучше','100% хлопок','1490','/img/product/4-2.jpg'],
            ['1','3','Цели за рамками возможностей','100% хлопок','1490','/img/product/4-3.jpg'],
            ['1','4','Личная энергия бизнеса','100% хлопок','1490','/img/product/4-4.jpg'],
            ['1','5','Что мы создаем','100% хлопок','1490','/img/product/4-5.jpg'],
            ['1','6','Набор из 5 футболок','100% хлопок','6990','/img/product/4-6.jpg'],
            // КНИГИ
            ['3','1','Жажда','','9990','/img/product/6-4.jpg'],
            // ПОСТЕРЫ
            ['4','1','Постер "Fail Better"','','1890','/img/product/5-1.jpg'],
            ['4','2','Постер "X10"','','1890','/img/product/5-2.jpg'],
            ['4','3','Постер "Жажда" White','','1890','/img/product/5-3.jpg'],
            ['4','4','Постер "Жажда" Black','','1890','/img/product/5-4.jpg'],
            ['4','5','Постер Reality Hacker','','1890','/img/product/5-5.jpg'],
            ['4','6','Постер "Повышай планку"','','1890','/img/product/5-6.jpg'],
            ['4','7','Постер "Быстрая Рыба"','','1890','/img/product/5-7.jpg'],
            // ЗНАЧКИ
            ['5','1','Набор значков с символикой !R','Эмалированные металлические значки с моими основными символами-двигателями.','1790','/img/product/6-1.jpg'],
            // СТИКЕРЫ
            ['6','1','Набор стартапера','Мой фирменный набор виниловых наклеек из 2-х листов А5 (21х15см)','990','/img/product/6-2.jpg'],
            ['6','2','Набор миллионера','Мой фирменный набор виниловых наклеек из 2-х листов А5 (21х15см)','1590','/img/product/6-2.jpg'],
            ['6','3','Набор миллиардера','Мой фирменный набор виниловых наклеек из 2-х листов А5 (21х15см)','2990','/img/product/6-2.jpg'],
            // !R DIGITAL
            ['7','1','!R Logo Digital','','1990','/img/product/3-1.jpg'],
            ['7','2','Digital Storm','','1990','/img/product/3-2.jpg'],
            ['7','3','X10','','1990','/img/product/3-3.jpg'],
            ['7','4','Echo','','1990','/img/product/3-4.jpg'],
            ['7','5','Reality Hacker','','1990','/img/product/3-5.jpg'],
            ['7','6','Набор из 5 футболок Digital','','7990','/img/product/3-6.jpg'],
            // A!R FORCE
            ['8','1','Nike A!R Force 1','Эксклюзивная кастомизированная версия легендарных кроссовок','17990','/img/product/6-3.jpg'],
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
