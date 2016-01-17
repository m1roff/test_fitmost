<?php

use yii\db\Migration;

class m160117_185656_s22 extends Migration
{
    private $countUsers = 5;
    private $ordersMax = 50;

    public function up()
    {
        $this->createTable('s22_users', [
                'id'   => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
                'name' => 'VARCHAR(255) NOT NULL',
                'age' => 'TINYINT UNSIGNED NOT NULL',
                'PRIMARY KEY (`id`)',
                'KEY (`age`)',
            ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');
        $this->createTable('s22_orders', [
                'id'   => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
                'user_id'  => 'INT UNSIGNED NOT NULL',
                'date' => 'DATETIME NOT NULL',
                'PRIMARY KEY (`id`)',
            ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');

        $this->addForeignKey('fk_orders_2_users', 's22_orders', 'user_id', 's22_users', 'id');

        for($i=0; $i<$this->countUsers; ++$i)
        {
            $_uId = ($i+1);
            $this->insert('s22_users', ['name'=>'User '.$_uId, 'age'=>rand(16,19)]);

            $_ordersCount = rand(1, $this->ordersMax);
            for($ii=0; $ii<$_ordersCount; ++$ii)
            {
                $_t = date('d');
                $_d = rand($_t-5, $_t+5);
                $_date = date('Y-m-d H:i:s', strtotime('2016-'.date('m').'-'.$_d.' '.date('H:i:s')));
                $this->insert('s22_orders', ['user_id'=>$_uId, 'date'=>$_date ] );
            }
        }


    }

    public function down()
    {
        $this->dropTable('s22_orders');
        $this->dropTable('s22_users');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
