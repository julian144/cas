<?php

class WebUser extends CWebUser
{
         // Store model to not repeat query.
        private $_model;
 
        // Return first name.
        // accesdemos al Cus

        protected function loadUser($usuario_id=null)
        {
             if($this->_model===null)
             {
                  if($usuario_id!==null)
                       $this->_model = Usuarios::model()->findByPk($usuario_id);
             }

             return $this->_model;
        }

                function getIdCustomer()
                {
                if (Yii::app()->user->id != 0)
                {
                $user = $this->loadUser(Yii::app()->user->id);
                $u = $user->tipo_usuarios_id;
                return $u;
                }
                else
                {
                        $u = 0;
                        return $u;
                }
                }       
                
?>