<?php

use yii\db\Migration;

class m160117_165848_q5 extends Migration
{
    private $custCount = 4;
    private $salesCount = 20;
    public function up()
    {
        $this->createTable('q5_cust', [
                'id'   => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
                'name' => 'VARCHAR(255) NOT NULL',
                'PRIMARY KEY (`id`)',
            ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');

        $this->createTable('q5_sales', [
                'id'       => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
                'cust_id'  => 'INT UNSIGNED NOT NULL',
                'date'     => 'DATETIME NOT NULL',
                'summ_pay' => 'DECIMAL(10,2) NOT NULL',
                'PRIMARY KEY (`id`)',
                'KEY (`cust_id`)',
            ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');

        $this->addForeignKey('fk_sales_2_cust', 'q5_sales', 'cust_id', 'q5_cust', 'id');

        for($i=0; $i<$this->custCount; ++$i)
        {
            $this->insert('q5_cust', ['id'=>($i+1), 'name' => 'Cust '.($i+1)]);
        }
        
        for($i=0; $i<$this->salesCount; ++$i)
        {
            $this->insert('q5_sales', ['cust_id'=>rand(1,$this->custCount), 'summ_pay'=>rand(10,9999), 'date'=>new \yii\db\Expression('NOW()')]);
        }
        
    }

    public function down()
    {
        $this->dropTable('q5_sales');
        $this->dropTable('q5_cust');
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
