<?php
/* @var $this PatientController */
/* @var $data Patient */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->patientID), array('view', 'id'=>$data->patientID)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOB')); ?>:</b>
	<?php echo CHtml::encode($data->DOB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street')); ?>:</b>
	<?php echo CHtml::encode($data->street); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipCode')); ?>:</b>
	<?php echo CHtml::encode($data->zipCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homePhone')); ?>:</b>
	<?php echo CHtml::encode($data->homePhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workPhone')); ?>:</b>
	<?php echo CHtml::encode($data->workPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cellPhone')); ?>:</b>
	<?php echo CHtml::encode($data->cellPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact1Name')); ?>:</b>
	<?php echo CHtml::encode($data->contact1Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact1Num')); ?>:</b>
	<?php echo CHtml::encode($data->contact1Num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact2Name')); ?>:</b>
	<?php echo CHtml::encode($data->contact2Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact2Num')); ?>:</b>
	<?php echo CHtml::encode($data->contact2Num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familyDoctor')); ?>:</b>
	<?php echo CHtml::encode($data->familyDoctor); ?>
	<br />

	*/ ?>

</div>