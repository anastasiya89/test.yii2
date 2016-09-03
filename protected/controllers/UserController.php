<?php

class UserController extends Controller
{
	public function actionIndex()
	{

	 	$is_active = 1;

	 	$a = User::model()->with(array('user_token','user_profile'))->findAllByAttributes(array('is_active'=>$is_active));
	 	foreach ($a as $key=>$value) {
	 		$result[$key]['id'] = $value->id;
	 		$result[$key]['email'] = $value->email;

	 		
	   		foreach ($value->user_profile as $user_profile ) {
	   			$result[$key]['name'] = $user_profile->name;
	   			$result[$key]['patronymic'] = $user_profile->patronymic;
	   			$result[$key]['surname'] = $user_profile->surname;
	   			$result[$key]['money'] = $user_profile->money;
	   			break;
	   		}
	   		foreach ($value->user_token as $user_token) {
	   			$result[$key]['token'] = $user_token->user_id;
	   			break;
	   		}
		}

		$this->render('index', array(
			'result'=> $result )
		);
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
