<?php

use yii\db\Migration;

/**
 * Class m220907_071601_create_add_date_to_article
 */
class m220907_071601_create_add_date_to_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('article','DateCreation',$this->date());
        $this->addColumn('article','DateChange',$this->date());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('article','DateCreation');
        $this->dropColumn('article','DateChange');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220907_071601_create_add_date_to_article cannot be reverted.\n";

        return false;
    }
    */
}
