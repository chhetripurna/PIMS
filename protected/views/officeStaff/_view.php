<?php
/* @var $this OfficeStaffController */
/* @var $data OfficeStaff */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('officeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->officeID), array('view', 'id'=>$data->officeID)); ?>
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