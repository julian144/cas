<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registro".
 *
 * @property integer $idregistro
 * @property string $nosiniiga
 * @property integer $noarete
 * @property string $aretecampania
 * @property string $fechacoloc
 * @property string $fechanac
 * @property string $edad
 * @property string $sexo
 * @property integer $raza
 * @property string $especraza
 *@property string $estado
 * @property string $empadre
 * @property integer $madre
 */
class Registroanimal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'registro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechacoloc','noarete','edad','sexo','especraza','raza','empadre','fechanac','estado'], 'required'],
            ['noarete','unique', 'message' => 'El Número de Arete ya se encuentra registrado en el sistema. Favor de registrar otro distinto.'],
            [['noarete', 'madre'], 'integer'],
            [['noarete'],'string','min' => 10,'max' => 10,'message' => 'El Número de Arete debe contener 10 números.'],
            [['noarete'],'number'],
            [['fechacoloc', 'fechanac'], 'safe'],
            [['madre'],'string','min' => 10,'max' => 10,'message' => 'El Número de la Madre debe contener 10 números.'],

            [['edad'], 'string','min' => 2, 'max' => 25],
            [['raza'], 'string','min' => 2, 'max' => 20],
            [['sexo', 'empadre','estado'], 'string', 'min' =>2, 'max' => 40],
            [['especraza'], 'string', 'min'=>2, 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
          'idregistro' => 'Idregistro',
          'noarete' => 'Número de Arete',
          'fechacoloc' => 'Fecha Coloc.',
          'fechanac' => 'Fecha Nac.',
          'madre' => 'No. Arete Madre',
          'sexo' => 'Sexo del Animal',
          'raza' => 'Raza Animal',
          'edad'=>'Edad animal',
          'especraza' => 'Raza especifica animal',
          'empadre' => 'Empadre Aninal',
          'estado'=>'Estado animal',

        ];
    }
}
