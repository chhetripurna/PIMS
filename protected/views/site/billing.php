<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Billing';
$this->breadcrumbs=array(
	$model->firstName." ".$model->lastName,
	'Billing',
);
?>

<h1>Financial Information</h1><br>
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
	echo "<table bordercolor=#FFFFFF border=2>";

	echo "<tr><th colspan=5><h3><b>Patient Information</b></h3></th></tr>";
	echo "<tr><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Suffix</th></tr>";

	echo "<tr><td>".CHtml::encode($model->firstName)."</td>";
	echo "<td>".CHtml::encode($model->middleName)."</td>";
	echo "<td>".CHtml::encode($model->lastName)."</td>";
	echo "<td>".CHtml::encode($model->suffix)."</td></tr>";

	echo "<tr><th colspan=5><h3><b>Insurance Information</b></h3></th></tr>";
	echo "<tr><th>Insurance ID</th><th>Provider</th><th>Account Number</th><th>Group Number</th></tr>";
foreach($model->insurances as $row){
	echo "<tr><td>".CHtml::encode($row['insuranceID'])."</td><td>".CHtml::encode($row['provider'])."</td><td>".CHtml::encode($row['accountNum'])."</td><td>".CHtml::encode($row['groupNum'])."</td></tr>";
}

	echo "<tr><th colspan=5><h3><b>Visits</b></h3></th></tr>";
	echo "<tr><th>Visit ID</th><th>Admit Date</th><th>Discharge Date</th></tr>";
	
foreach($model->visits as $row){
		echo "<tr><td>".CHtml::link(CHtml::encode($row['visitID']),array('visit','id'=>$row['visitID']))."</td><td>".CHtml::encode($row['admitDate'])."</td><td>".CHtml::encode($row['dischargeDate'])."</td></tr>";
	}
	echo "</table>" ?>
</div>

