<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Treatment';
$this->breadcrumbs=array(
	$model->firstName." ".$model->lastName,
	'Treatment',
);
?>

<h1>Treatment</h1><br>


<h3>

<div id="menus">
<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Search', 'url'=>array('/site/search'), 'visible'=>Yii::app()->user->checkAccess('V')),

				array('label'=>'Search', 'url'=>array('/site/search'), 'visible'=>Yii::app()->user->checkAccess('M')),

				array('label'=>'Search', 'url'=>array('/site/search'), 'visible'=>Yii::app()->user->checkAccess('D')),

				array('label'=>'Search', 'url'=>array('/site/search'), 'visible'=>Yii::app()->user->checkAccess('O')),

				array('label'=>'Patient Information', 'url'=>array('/site/patientInformation','id'=>$model->patientID), 'visible'=>Yii::app()->user->checkAccess('V')), //Volunteer view rights
				array('label'=>'Patient Information', 'url'=>array('/site/patientInformation','id'=>$model->patientID), 'visible'=>Yii::app()->user->checkAccess('D')),

				array('label'=>'Patient Information', 'url'=>array('/site/patientInformation','id'=>$model->patientID), 'visible'=>Yii::app()->user->checkAccess('M')),

				array('label'=>'Patient Information', 'url'=>array('/site/patientInformation','id'=>$model->patientID), 'visible'=>Yii::app()->user->checkAccess('O')),

				array('label'=>'Treatment', 'url'=>array('/site/treatment','id'=>$model->patientID), 'visible'=>Yii::app()->user->checkAccess('D')),

				array('label'=>'Treatment', 'url'=>array('/site/treatment','id'=>$model->patientID), 'visible'=>Yii::app()->user->checkAccess('M')),

				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),

				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	
	
</div>

<div class="view">
<?php
	
	echo "<h1>Doctor's Notes</h1>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>

</div>
