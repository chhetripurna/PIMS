<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Billing';

$this->breadcrumbs=array(
	'Billing'=>array('billing', 'id'=>$model->patientID),
	'Visit',
);
?>

<?php
	echo "<h1>Visit #".$model->visitID."</h1><br>";
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
	echo "<tr><th colspan=3><b>".CHtml::link("Edit Visit",array('/visit/update','id'=>$model->visitID))."</th></tr>";
	echo "<tr><th>Admit Date</th><th>Discharge Date</th><th>Admit Reason</th></tr>";
	echo "<tr><td>".CHtml::encode($model->admitDate)."</td><td>".CHtml::encode($model->dischargeDate)."</td><td>".CHtml::encode($model->admitReason)."</td></tr>";
	echo "<tr><th colspan=5> <br> </th></tr>";
	
	echo "<tr><th colspan=5><h3><b>Facility Information</b></h3></th></tr>";
	echo "<tr><th>Facility</th><th>Floor</th><th>Room Number</th><th>Bed Number</th></tr>";
	echo "<tr><td>".CHtml::encode($model->facility)."</td><td>".CHtml::encode($model->floor)."</td><td>".CHtml::encode($model->roomNum)."</td><td>".CHtml::encode($model->bedNum)."</td><td></tr>";

	echo "<tr><th colspan=5> <br> </th></tr>";
	echo "<tr><th colspan=5><h3><b>Charges for Bill #".CHtml::encode($model->billings->billingID)."</b></h3></th></tr>";
	echo "<tr><th>".CHtml::link("Add Charges",array('/charges/create','bID'=>$model->billings->billingID))."</th></tr>";
	
if($model->billings->charges)
{	echo "<tr><th>Charge ID</th><th>Item Charged</th><th>Charge Amount</th></tr>";
	
	foreach($model->billings->charges as $row){
		$total = $total + $row['amount'];
		echo "<tr><td>".CHtml::encode($row['chargeID'])."</td><td>".CHtml::encode($row['item'])."</td><td>".CHtml::encode("\$".$row['amount'])."</td>";
	}
} else {
		echo '<tr><th colspan=5><p align=center>No charges have been accrued.</p></th></tr>';
}
	$finAmount = $total-($model->billings->amountPaidByInsurance)-($model->billings->amountPaid);
	echo "<tr><th colspan=5> <br> </th></tr>";
	echo "<tr><th colspan=5><h3><b>Final Summary</b></h3></th></tr>";
	echo "<tr><th>Bill ID</th><th>Total Charges</th><th>Amount Paid</th><th>Amount Paid By Insurance</th><th>Final Amount</th>";
	echo "<tr><td>".CHtml::encode($model->billings->billingID)."</td><td>".CHtml::encode("\$".$total)."</td><td>".CHtml::encode("\$".$model->billings->amountPaid)."</td><td>".CHtml::encode("\$".$model->billings->amountPaidByInsurance)."</td><td>".CHtml::encode("\$".$finAmount)."</td></tr>";
	echo "<tr><th>".CHtml::link("Make Payment",array('billing/update','bID'=>($model->billings->billingID)))."</th></tr>";




echo "</table>";
?>
</div>
