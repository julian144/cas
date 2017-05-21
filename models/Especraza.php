<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "especraza".
 *
 * @property integer $idespecraza
 * @property string $especraza
 */
class Especraza extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'especraza';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idespecraza'], 'required'],
            [['idespecraza'], 'integer'],
            [['especraza'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idespecraza' => 'Idespecraza',
            'especraza' => 'Especraza',
        ];
    }
}
