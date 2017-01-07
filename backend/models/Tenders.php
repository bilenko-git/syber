<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tenders".
 *
 * @property integer $id
 * @property string $product
 * @property string $icetrade_number
 * @property string $registration_number
 * @property string $product_subject
 * @property string $purchase_type
 * @property string $date_publication
 * @property string $start_price_in_byn
 * @property string $customer
 * @property string $financing
 * @property string $payment_in_byn
 * @property string $deadline_for_proposals
 * @property string $date_and_time_of_trades
 * @property string $condition_on_the_current_day
 * @property string $comment
 * @property integer $lots
 */
class Tenders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tenders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product', 'icetrade_number', 'registration_number', 'product_subject', 'purchase_type', 'date_publication', 'start_price_in_byn', 'customer', 'financing', 'payment_in_byn', 'deadline_for_proposals', 'date_and_time_of_trades', 'condition_on_the_current_day', 'comment', 'lots'], 'required'],
            [['product', 'product_subject', 'customer', 'financing', 'comment'], 'string'],
            [['date_publication', 'deadline_for_proposals', 'date_and_time_of_trades'], 'safe'],
            [['start_price_in_byn', 'payment_in_byn'], 'number'],
            [['lots'], 'integer'],
            [['icetrade_number', 'registration_number', 'purchase_type', 'condition_on_the_current_day'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product' => 'Наименование процедуры закупки',
            'icetrade_number' => 'Немер на Icetrade',
            'registration_number' => 'Регистрационный номер',
            'product_subject' => 'Предмет закупки',
            'purchase_type' => 'Вид закупки',
            'date_publication' => 'Дата публикации',
            'start_price_in_byn' => 'Начальная цена BYN',
            'customer' => 'Заказчик',
            'financing' => 'Финансирование',
            'payment_in_byn' => 'Оплата BYN',
            'deadline_for_proposals' => 'Срок подачи предложения',
            'date_and_time_of_trades' => 'Дата и время торгов',
            'condition_on_the_current_day' => 'Состояние на текущий день',
            'comment' => 'Комментарии',
            'lots' => 'Лоты',
        ];
    }
}
