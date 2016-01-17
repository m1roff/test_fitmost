<?php

use yii\db\Migration;

class m160117_180420_q7 extends Migration
{
    private $booksCount = 10;
    private $authorsCount = 20;
    private $bookAuthorsCount = 5;
    public function up()
    {
        $this->createTable('q7_books', [
                'id'   => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
                'name' => 'VARCHAR(255) NOT NULL',
                'PRIMARY KEY (`id`)',
            ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');
        
        $this->createTable('q7_authors', [
                'id'   => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
                'name' => 'VARCHAR(255) NOT NULL',
                'PRIMARY KEY (`id`)',
            ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');        

        $this->createTable('q7_cross_books_2_authors', [
                'id_books'   => 'INT UNSIGNED NOT NULL',
                'id_authors'   => 'INT UNSIGNED NOT NULL',
                'KEY (`id_books`)',
                'KEY (`id_authors`)',
                'UNIQUE KEY (`id_books`,`id_authors`)',
            ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');

        $this->addForeignKey('fk_corssbooks_2_books', 'q7_cross_books_2_authors', 'id_books', 'q7_books', 'id');
        $this->addForeignKey('fk_corssbooks_2_authors', 'q7_cross_books_2_authors', 'id_authors', 'q7_authors', 'id');

        $_auth = [];
        for($i=0; $i<$this->authorsCount; ++$i)
        {
            $this->insert('q7_authors', ['id'=>($i+1), 'name' => 'Author '.($i+1)]);
            $_auth[] = ($i+1);
        }

        for($i=0; $i<$this->booksCount; ++$i)
        {
            $_bId = ($i+1);
            $this->insert('q7_books', ['id'=>$_bId, 'name' => 'Book '.($i+1)]);

            $_authCount = rand(2, $this->bookAuthorsCount);
            $_bookAuth = array_rand($_auth, $_authCount);
            for($ii=0, $max=count($_bookAuth); $ii<$max; ++$ii)
            {
                $this->insert('q7_cross_books_2_authors', ['id_books'=>$_bId, 'id_authors'=>$_auth[$_bookAuth[$ii]] ]);
            }
        }



    }

    public function down()
    {
        $this->dropTable('q7_cross_books_2_authors');
        $this->dropTable('q7_authors');
        $this->dropTable('q7_books');
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
