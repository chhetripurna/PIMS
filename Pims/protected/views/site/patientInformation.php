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
	
	$home = str_split($model->homePhone);
	$cell = str_split($model->cellPhone);
	$work = str_split($model->workPhone);
		
	if ($model->homePhone) 
	{
		$home = '('.$home[0].$home[1].$home[2].') '.$home[3].$home[4].$home[5].'-'.$home[6].$home[7].$home[8].$home[9];
	} else {
		$home = 'No home phone number given.';
	}
	
	if ($model->cellPhone) 
	{
		$cell = '('.$cell[0].$cell[1].$cell[2].') '.$cell[3].$cell[4].$cell[5].'-'.$cell[6].$cell[7].$cell[8].$cell[9];
	} else {
		$cell = 'No cell phone number given.';
	}
	
	if ($model->workPhone) 
	{
		$work = '('.$work[0].$work[1].$work[2].') '.$work[3].$work[4].$work[5].'-'.$work[6].$work[7].$work[8].$work[9];
	} else {
		$work = 'No work phone number given.';
	}
	
	$contact1 = str_split($model->contact1Num);
	$contact2 = str_split($model->contact2Num);
	$contact1 = '('.$contact1[0].$contact1[1].$contact1[2].') '.$contact1[3].$contact1[4].$contact1[5].'-'.$contact1[6].$contact1[7].$contact1[8].$contact1[9];
	$contact2 = '('.$contact2[0].$contact2[1].$contact2[2].') '.$contact2[3].$contact2[4].$contact2[5].'-'.$contact2[6].$contact2[7].$contact2[8].$contact2[9];

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
			array('label'=>'Home Phone','value'=>$home,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Home Phone','value'=>$home,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Home Phone','value'=>$home,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Work Phone','value'=>$work,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Work Phone','value'=>$work,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Work Phone','value'=>$work,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Cell Phone','value'=>$cell,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Cell Phone','value'=>$cell,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Cell Phone','value'=>$cell,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Family Doctor','value'=>$model->familyDoctor,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Family Doctor','value'=>$model->familyDoctor,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact 1','value'=>$model->contact1Name,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Contact 1','value'=>$model->contact1Name,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact 1','value'=>$model->contact1Name,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Contact Number 1','value'=>$contact1,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Contact Number 1','value'=>$contact1,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact Number 1','value'=>$contact1,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Contact 2','value'=>$model->contact2Name,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Contact 2','value'=>$model->contact2Name,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact 2','value'=>$model->contact2Name,'visible'=>Yii::app()->user->checkAccess('O')),
			array('label'=>'Contact Number 2','value'=>$contact2,'visible'=>Yii::app()->user->checkAccess('D')),
			array('label'=>'Contact Number 2','value'=>$contact2,'visible'=>Yii::app()->user->checkAccess('M')),
			array('label'=>'Contact Number 2','value'=>$contact2,'visible'=>Yii::app()->user->checkAccess('O')),
			
			array('label'=>'','value'=>'Patient not currently admitted','visible'=>!array_key_exists(0, $array)),			
			array('label'=>'Floor','value'=> array_key_exists(0,$array) ? $array[0]->floor : 'Patient not currently admitted','visible'=>array_key_exists(0, $array)),
			array('label'=>'Room Number','value'=>array_key_exists(0,$array) ? $array[0]->roomNum : 'Patient not currently admitted','visible'=>array_key_exists(0, $array)),
			array('label'=>'Bed Number','value'=>array_key_exists(0,$array) ? $array[0]->bedNum : 'Patient not currently admitted' ,'visible'=>array_key_exists(0,$array)),
			array('label'=>'Approved Visitors','value'=>array_key_exists(0,$array) ? $array[0]->visitors : 'Patient not currently admitted' ,'visible'=>array_key_exists(0,$array)),
		),
));
 ?>
</div>
