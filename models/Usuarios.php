<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\base\NotSupportedException;
/**
 * This is the model class for table "usuarios".
 *
 * @property integer $Id_usuario
 * @property string $Nombre
 * @property string $Apellidos
 * @property string $Usuario
 * @property string $Password
 */
class Usuarios extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Apellidos'], 'string', 'max' => 25],
            [['Usuario'], 'string', 'max' => 10],
            [['Password'], 'string', 'max' => 18],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_usuario' => 'Id Usuario',
            'Nombre' => 'Nombre',
            'Apellidos' => 'Apellidos',
            'Usuario' => 'Usuario',
            'Password' => 'Password',
        ];
    }
    public static function findIdentity($id){
  		return static::findOne($id);
  	}

  	public static function findIdentityByAccessToken($token, $type = null){
  		  throw new NotSupportedException();
  	}

  	public function getId(){
  		return $this->Id_usuario;
  	}

  	public function getAuthKey(){
  		  throw new NotSupportedException();
  	}

  	public function validateAuthKey($authKey){
        throw new NotSupportedException();
  	}
  	public static function findByUsername($username){
  		return self::findOne(['Usuario'=>$username]);
  	}

  	public function validatePassword($password){
  		return $this->Password === $password;
  	}


}
