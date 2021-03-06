<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','login'),
				'users'=>array('*'),
			),
			array('allow',  // deny all users
				'actions'=>array('patientInformation','billing','treatment','visit','visitDoc','search'),
				'roles'=>array('D','M','O','V'),
			),
			array('deny',  // deny all users
				'actions'=>array('patientInformation','billing','treatment','visit','visitDoc','search'),
				'users'=>array('*'),
			),
		);
	}

	

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the 'patientInformation' action that is invoked
	 * when the "load patient Information" is explicitly
	 * requested by
	 * users.
	*/
	public function actionPatientInformation($id)
	{
		//renders the view file 'protected/views/site/ 
		//patientInformation.php'
		//using the default layout 'protected/views/layouts/
		//main.php'
		$this->render('patientInformation',array('model'=>$this->loadPatient($id)
		));
	}

	public function actionBilling($id)
	{
		$this->render('billing',array('model'=>$this->loadPatient($id)
		));
	}

	public function actionTreatment($id)
	{
		$this->render('treatment',array('model'=>$this->loadPatient($id)
		));
	}

	public function actionVisit($id)
	{
		$this->render('visit',array('model'=>$this->loadVisit($id)
		));
	}

	public function actionVisitDoc($id)
	{
		$this->render('visitDoc',array('model'=>$this->loadVisit($id)
		));
	}

	public function actionSearch()
	{
		$model=new SearchForm;
		 
		if(isset($_POST['ajax']) && $_POST['ajax']==='search-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		
		if(isset($_POST['SearchForm']))
		{
			$model->attributes=$_POST['SearchForm'];
			Yii::trace('In if isset', 'info');
			if(!false)
			{
				$dataReader=$model->search();
				Yii::trace('model->search returned true', 'info');
				$this->render('results',array('result'=>$dataReader));
				Yii::app()->end();
			} else {
				Yii::trace('model->search returns false.', 'info');
			}
			
		}
		// display the search form
		$this->render('search',array('model'=>$model));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(array('/site/search'));
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	/**
	 * For loading patient models
	 */
	public function loadPatient($id)
	{
		$model=Patient::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadVisit($id)
	{
		$model=Visit::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}
