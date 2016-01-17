<?php

use yii\db\Migration;

class m160117_172532_q6 extends Migration
{
    private $newsCount = 10;
    public function up()
    {
        $this->createTable('q6_news', [
                'id'   => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
                'anons' => 'VARCHAR(255) NOT NULL',
                'text' => 'TEXT NOT NULL',
                'PRIMARY KEY (`id`)',
            ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');

        for($i=0; $i<$this->newsCount; ++$i)
        {
            $start = rand(1, strlen($this->getText())-300);
            $a = substr($this->getText(), $start, rand($start+10, strlen($this->getText())));
            $this->insert('q6_news', ['anons'=>$a, 'text'=>$this->getText()]);
        }
    }

    public function down()
    {
        $this->dropTable('q6_news');
    }

    private function getText()
    {
        return <<<EOF
Dome systemic math-8-bit nodality nodal point tattoo savant lights range-rover pistol dead sign assault papier-mache. Otaku Tokyo Kowloon towards 3D-printed military-grade receding assault corrupted. Geodesic computer papier-mache A.I. wonton soup voodoo god fluidity into DIY urban. Futurity sunglasses systema claymore mine fluidity tattoo shanty town drone cartel Kowloon gang hacker weathered plastic grenade sprawl woman. Advert towards faded vehicle realism nodal point marketing gang. Monofilament tube cyber-tank-traps paranoid wristwatch otaku construct human boat marketing man spook systemic. Cyber-disposable Tokyo tube woman artisanal towards futurity lights systema 3D-printed skyscraper receding. Military-grade beef noodles spook post-free-market footage voodoo god San Francisco katana j-pop meta-tower plastic. 
Spook apophenia assassin physical claymore mine military-grade alcohol digital shanty town Shibuya. San Francisco alcohol tank-traps convenience store corrupted assassin bicycle modem. Face forwards digital futurity woman network claymore mine beef noodles car. Papier-mache marketing carbon franchise stimulate nodality camera narrative plastic. 
EOF;
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
