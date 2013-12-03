<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Visits';
$this->breadcrumbs=array(
	'Treatment'=>array('treatment', 'id'=>$model->patientID),
	'Visit',
);
?>

<?php
	echo "<h1>Visit #".$model->visitID."</h1><br>";
	$doctor=Doctor::model()->findByAttributes(array('loginName'=>Yii::app()->user->id));
	$medic=MedicalStaff::model()->findByAttributes(array('loginName'=>Yii::app()->user->id));
?>
<h3>                     </h3><br>

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

<div class="view">
<?php

	$total = 0;

	echo "<table border=#000000 border=2>";
	echo "<tr><th colspan=5><h3><b>Patient Information</b></h3></th></tr>";
	echo "<tr><th>Patient ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Suffix</th></tr>";
	echo "<tr><td>".CHtml::encode($model->patientID)."</td><td>".CHtml::encode($model->patient->firstName)."</td><td>".CHtml::encode($model->patient->middleName)."</td><td>".CHtml::encode($model->patient->lastName)."</td><td>".CHtml::encode($model->patient->suffix)."</td></tr>";

	echo "<tr><th colspan=5>  <br>  </th></tr>";

	echo "<tr><th colspan=5><h3><b>Visit Information</b></h3></th></tr>";
	echo "<tr><th>Admit Date</th><th>Discharge Date</th><th>Admit Reason</th></tr>";
	echo "<tr><td>".CHtml::encode($model->admitDate)."</td><td>".CHtml::encode($model->dischargeDate)."</td><td>".CHtml::encode($model->admitReason)."</td></tr>";
	echo "<tr><th colspan=5> <br> </th></tr>";
	
	echo "<tr><th colspan=5><h3><b>Facility Information</b></h3></th></tr>";
	echo "<tr><th>Facility</th><th>Floor</th><th>Room Number</th><th>Bed Number</th></tr>";
	echo "<tr><td>".CHtml::encode($model->facility)."</td><td>".CHtml::encode($model->floor)."</td><td>".CHtml::encode($model->roomNum)."</td><td>".CHtml::encode($model->bedNum)."</td><td></tr>";

	/*Entering Prescription Part*
	 *			    *
	 ****************************/

	echo "<tr><th colspan=5> <br> </th></tr>";
	echo "<tr><th colspan=5><h3><b>Prescription Information</b></h3></th></tr>";
	
	if(Yii::app()->user->checkAccess('D'))
	{	
		echo "<tr><th>".CHtml::link("Add Prescription",array('prescription/create','vID'=>$model->visitID))."</th></tr>";
	}

if($model->prescriptions)
{	
	echo "<tr><th colspan=2>Prescription ID</th><th colspan=2>Prescription</th><th>Doctor Name</th></tr>";
	
	
	foreach($model->prescriptions as $row){
		echo "<tr><td colspan=2>".CHtml::encode($row['noteID'])."</td><td colspan=2>".CHtml::encode($row['prescriptions'])."</td><td>".CHtml::encode($row->doctor->firstName." ".$row->doctor->lastName)."</td>";
	}
} else {
		echo '<tr><th colspan=5><p align=center>No prescriptions administered.</p></th></tr>';
}
	

	/*Entering Doctors Notes*
	 *			*
	 ***********************/

	echo "<tr><th colspan=5> <br> </th></tr>";
	echo "<tr><th colspan=5><h3><b>Doctor's Notes</b></h3></th></tr>";
	
	if(Yii::app()->user->checkAccess('D'))
	{
		echo "<tr><th>".CHtml::link("Add Doctor Note",array('docNotes/create','vID'=>$model->visitID))."</th></tr>";
	}

if($model->docNotes)
{	
	echo "<tr><th colspan=2>Note ID</th><th colspan=2>Note</th><th>Doctor Name</th></tr>";
	
	
	foreach($model->docNotes as $row){
		echo "<tr><td colspan=2>".CHtml::encode($row['noteID'])."</td><td colspan=2>".CHtml::encode($row['note'])."</td><td>".CHtml::encode($row->doctor->firstName." ".$row->doctor->lastName)."</td>";
	}
} else {
		echo '<tr><th colspan=5><p align=center>No notes added.</p></th></tr>';
}
	


	/*Entering Nurses Notes*
	 *			*
	 ***********************/

	echo "<tr><th colspan=5> <br> </th></tr>";
	echo "<tr><th colspan=5><h3><b>Medic Notes</b></h3></th></tr>";
	
	if(Yii::app()->user->checkAccess('M'))
	{	
		echo "<tr><th>".CHtml::link("Add Medic Note",array('medicNotes/create','vID'=>$model->visitID))."</th></tr>";
	}

if($model->medicNotes)
{	
	echo "<tr><th colspan=2>Note ID</th><th colspan=2>Note</th><th>Doctor Name</th></tr>";
	
	
	foreach($model->medicNotes as $row){
		echo "<tr><td colspan=2>".CHtml::encode($row['noteID'])."</td><td colspan=2>".CHtml::encode($row['note'])."</td><td>".CHtml::encode($row->medic->firstName." ".$row->medic->lastName)."</td>";
	}
} else {
		echo '<tr><th colspan=5><p align=center>No notes added.</p></th></tr>';
}


	/*Entering Procedure Notes*
	 *			*
	 ***********************/

	echo "<tr><th colspan=5> <br> </th></tr>";
	echo "<tr><th colspan=5><h3><b>Scheduled Procedures</b></h3></th></tr>";

	if(Yii::app()->user->checkAccess('D'))
	{
		echo "<tr><th>".CHtml::link("Add Procedure",array('procedures/create','vID'=>$model->visitID))."</th></tr>";
	}

if($model->procedures)
{	
	echo "<tr><th colspan=2>Procedure ID</th><th colspan=2>Note</th><th>Doctor Name</th></tr>";
	
	
	foreach($model->procedures as $row){
		echo "<tr><td colspan=2>".CHtml::encode($row['noteID'])."</td><td colspan=2>".CHtml::encode($row['procedures'])."</td><td>".CHtml::encode($row->doctor->firstName." ".$row->doctor->lastName)."</td>";
	}
} else {
		echo '<tr><th colspan=5><p align=center>No procedures scheduled.</p></th></tr>';
}





echo "</table>";
?>
</div>
