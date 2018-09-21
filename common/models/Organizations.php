<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "organizations".
 *
 * @property int $id
 * @property string $type
 * @property string $sds
 * @property string $accreditation_certificate
 * @property string $cert_created_date
 * @property string $cert_end_date
 * @property string $description
 * @property int $is_valid
 * @property int $user_id
 */
class Organizations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organizations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'description'], 'string'],
            [['cert_created_date', 'cert_end_date', 'sds', 'safe'], 'safe'],
            [['is_valid'], 'integer'],
            [['accreditation_certificate'], 'string', 'max' => 255],
        ];
    }

    public function beforeValidate()
    {

        if (is_array($this->sds)) {
            $this->sds = serialize($this->sds);
        }

        return parent::beforeValidate();
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Тип организации',
            'sds' => 'СДС',
            'accreditation_certificate' => 'Номер аттестата',
            'cert_created_date' => 'Действителен с',
            'cert_end_date' => 'Действителен по',
            'description' => 'Сведения',
            'is_valid' => 'Соответствует требованиям',
            'user_id' => 'Клиент',
        ];
    }

    public function afterFind()
    {
        $this->sds = unserialize($this->sds);
        return parent::afterFind();
    }

    public function beforeSave($insert)
    {
        $this->user_id = Yii::$app->user->id;
        return parent::beforeSave($insert);
    }
}
