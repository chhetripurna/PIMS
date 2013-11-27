<?php
/* @var $this BillingController */
/* @var $data Billing */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('billingID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->billingID), array('view', 'id'=>$data->billingID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientID')); ?>:</b>
	<?php echo CHtml::encode($data->patientID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitID')); ?>:</b>
	<?php echo CHtml::encode($data->visitID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amountPaid')); ?>:</b>
	<?php echo CHtml::encode($data->amountPaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amountPaidByInsurance')); ?>:</b>
	<?php echo CHtml::encode($data->amountPaidByInsurance); ?>
	<br />


</div>