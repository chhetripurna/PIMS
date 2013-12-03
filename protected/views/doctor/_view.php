<?php
/* @var $this DoctorController */
/* @var $data Doctor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctorID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->doctorID), array('view', 'id'=>$data->doctorID)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('specialization')); ?>:</b>
	<?php echo CHtml::encode($data->specialization); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loginName')); ?>:</b>
	<?php echo CHtml::encode($data->loginName); ?>
	<br />


</div>