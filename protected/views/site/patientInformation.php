<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Patient Information';
$this->breadcrumbs=array(
	$model->firstName." ".$model->lastName,
	'Patient Information',
);
?>

<h1>Patient Information</h1></br>

<?php 

	$array = array();

	if (count($model->visits) !== 0)
	{
		foreach($model->visits as $visit)
		{
			Yii::trace('dischargeDate= '.$visit->dischargeDate, 'info');
		
			if ($visit->dischargeDate === '0000-00-00')
			{
				array_push($array, $visit);
			}
		}
	}
	
	if(!array_key_exists(0, $array))
	{
		echo "<h3>Patient not currently admitted.</h3>";
	}
?>


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

				array('label'=>'Billing', 'url'=>array('/site/billing','id'=>$model->patientID), 'visible'=>Yii::app()->user->checkAccess('O')),

				array('label'=>'Treatment', 'url'=>array('/site/treatment','id'=>$model->patientID), 'visible'=>Yii::app()->user->checkAccess('D')),

				array('label'=>'Treatment', 'url'=>array('/site/treatment','id'=>$model->patientID), 'visible'=>Yii::app()->user->checkAccess('M')),

				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),

				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
</div>



<div id="menus">
<?php


	$this->widget('zii.widgets.CDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'patientID',
			'firstName',
			'middleName',
			'lastName',
			'suffix',
			'DOB',
			array('label'=>'Street','value'=>$model->street,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Street','value'=>$model->street,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Street','value'=>$model->street,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'City','value'=>$model->city,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'City','value'=>$model->city,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'City','value'=>$model->city,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'State','value'=>$model->state,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'State','value'=>$model->state,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'State','value'=>$model->state,'visible'=>Yii::app()->user->checkAccess('O')),		
			array('label'=>'Zip Code','value'=>$model->zipCode,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Zip Code','value'=>$model->zipCode,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Zip Code','value'=>$model->zipCode,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Home Phone','value'=>$model->homePhone,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Home Phone','value'=>$model->homePhone,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Home Phone','value'=>$model->homePhone,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Work Phone','value'=>$model->workPhone,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Work Phone','value'=>$model->workPhone,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Work Phone','value'=>$model->workPhone,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Cell Phone','value'=>$model->cellPhone,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Cell Phone','value'=>$model->cellPhone,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Cell Phone','value'=>$model->cellPhone,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Family Doctor','value'=>$model->familyDoctor,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Family Doctor','value'=>$model->familyDoctor,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact 1','value'=>$model->contact1Name,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Contact 1','value'=>$model->contact1Name,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact 1','value'=>$model->contact1Name,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Contact Number 1','value'=>$model->contact1Num,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Contact Number 1','value'=>$model->contact1Num,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact Number 1','value'=>$model->contact1Num,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Contact 2','value'=>$model->contact2Name,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Contact 2','value'=>$model->contact2Name,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact 2','value'=>$model->contact2Name,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Contact Number 2','value'=>$model->contact2Num,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Contact Number 2','value'=>$model->contact2Num,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact Number 2','value'=>$model->contact2Num,'visible'=>Yii::app()->user->checkAccess('O')),
			
			array('label'=>'Floor','value'=> array_key_exists(0,$array) ? $array[0]->floor : 'Patient not currently admitted','visible'=>array_key_exists(0, $array)),
			array('label'=>'Room Number','value'=>array_key_exists(0,$array) ? $array[0]->roomNum : 'Patient not currently admitted','visible'=>array_key_exists(0, $array)),
			array('label'=>'Bed Number','value'=>array_key_exists(0,$array) ? $array[0]->bedNum : 'Patient not currently admitted' ,'visible'=>array_key_exists(0,$array)),
			array('label'=>'Approved Visitors','value'=>array_key_exists(0,$array) ? $array[0]->visitors : 'Patient not currently admitted' ,'visible'=>array_key_exists(0,$array)),
		),
));
 ?>
</div>
