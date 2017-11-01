<?php
namespace application\forms\auth;

use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $rememberMe = true;

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['rememberMe', 'boolean'],
        ];
    }

    public function attributeLabels()
    {
       return [
           'email'=>'Электронная почта',
           'password'=>'Пароль'
       ];
    }
}
