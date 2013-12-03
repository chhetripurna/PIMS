<?php
/* @var $this VisitController */
/* @var $data Visit */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->visitID), array('view', 'id'=>$data->visitID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientID')); ?>:</b>
	<?php echo CHtml::encode($data->patientID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admitDate')); ?>:</b>
	<?php echo CHtml::encode($data->admitDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dischargeDate')); ?>:</b>
	<?php echo CHtml::encode($data->dischargeDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admitReason')); ?>:</b>
	<?php echo CHtml::encode($data->admitReason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facility')); ?>:</b>
	<?php echo CHtml::encode($data->facility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floor')); ?>:</b>
	<?php echo CHtml::encode($data->floor); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('roomNum')); ?>:</b>
	<?php echo CHtml::encode($data->roomNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bedNum')); ?>:</b>
	<?php echo CHtml::encode($data->bedNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitors')); ?>:</b>
	<?php echo CHtml::encode($data->visitors); ?>
	<br />

	*/ ?>

</div>