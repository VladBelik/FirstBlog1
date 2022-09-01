<?php

use yii\db\Migration;

/**
 * Class m220831_095215_add_date_to_comment
 */
class m220831_095215_add_date_to_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('comment','date',$this->date());


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('comment','date');
    }


}
