<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "raza".
 *
 * @property integer $idraza
 * @property string $raza
 */
class Raza extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'raza';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idraza', 'raza'], 'required'],
            [['idraza'], 'integer'],
            [['raza'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idraza' => 'Idraza',
            'raza' => 'Raza',
        ];
    }
}
