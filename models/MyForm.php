<?php

namespace app\models;
use Yii;
use yii\base\Model;
	
	class MyForm extends \yii\base\Model
	{
		public $name;
		public $email;
		
		public function rules(){
			return[
				[['name', 'email'], 'required'],
				['email', 'email', 'message' => 'Некорректный email адрес']
			];
		
		}
	}

?>