<?php

use yii\db\Migration;

class m170101_221446_tenders extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tenders}}', [
            'id' => $this->primaryKey(),
            'product' => $this->text()->notNull(), //наименование процедуры закупки
            'icetrade_number' => $this->string()->notNull(), //немер на Icetrade
            'registration_number' => $this->string()->notNull(), // регистрационный номер
            'product_subject' => $this->text()->notNull()->notNull(), // предмет закупки
            'purchase_type' => $this->string()->notNull(), // вид закупки
            'date_publication' => $this->datetime()->notNull(), // дата публикации
            'start_price_in_byn' => $this->decimal(15,2)->notNull(), // начальная цена BYN
            'customer' => $this->text()->notNull(), // заказчик
            'financing' => $this->text()->notNull(), // финансирование
            'payment_in_byn' => $this->decimal(15,2)->notNull(), // оплата BYN
            'deadline_for_proposals' => $this->datetime()->notNull(), // срок подачи предложения
            'date_and_time_of_trades' => $this->datetime()->notNull(), // дата и время торгов
            'condition_on_the_current_day' => $this->string()->notNull(), // состояние на текущий день
            'comment' => $this->text()->notNull(), // комментарии 
            'lots' => $this->integer()->notNull(), // лоты 
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tenders}}');
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
