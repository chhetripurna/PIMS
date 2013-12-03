<?php
/* @var $this MedicalStaffController */
/* @var $data MedicalStaff */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->medicID), array('view', 'id'=>$data->medicID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstName')); ?>:</b>
	<?php echo CHtml::encode($data->firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middleName')); ?>:</b>
	<?php echo CHtml::encode($data->middleName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastName')); ?>:</b>
	<?php echo CHtml::encode($data->lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suffix')); ?>:</b>
	<?php echo CHtml::encode($data->suffix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loginName')); ?>:</b>
	<?php echo CHtml::encode($data->loginName); ?>
	<br />


</div>