<?php
/* @var $this ChargesController */
/* @var $data Charges */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('chargeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->chargeID), array('view', 'id'=>$data->chargeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billingID')); ?>:</b>
	<?php echo CHtml::encode($data->billingID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item')); ?>:</b>
	<?php echo CHtml::encode($data->item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />


</div>