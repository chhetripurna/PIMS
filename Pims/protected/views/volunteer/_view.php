<?php
/* @var $this VolunteerController */
/* @var $data Volunteer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('volunteerID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->volunteerID), array('view', 'id'=>$data->volunteerID)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('loginName')); ?>:</b>
	<?php echo CHtml::encode($data->loginName); ?>
	<br />


</div>