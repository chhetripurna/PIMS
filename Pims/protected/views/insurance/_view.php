<?php
/* @var $this InsuranceController */
/* @var $data Insurance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('insuranceID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->insuranceID), array('view', 'id'=>$data->insuranceID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientID')); ?>:</b>
	<?php echo CHtml::encode($data->patientID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provider')); ?>:</b>
	<?php echo CHtml::encode($data->provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accountNum')); ?>:</b>
	<?php echo CHtml::encode($data->accountNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupNum')); ?>:</b>
	<?php echo CHtml::encode($data->groupNum); ?>
	<br />


</div>