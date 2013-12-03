<?php
/* @var $this BillingController */
/* @var $model Billing */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'billingID'); ?>
		<?php echo $form->textField($model,'billingID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'patientID'); ?>
		<?php echo $form->textField($model,'patientID',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visitID'); ?>
		<?php echo $form->textField($model,'visitID',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amountPaid'); ?>
		<?php echo $form->textField($model,'amountPaid',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amountPaidByInsurance'); ?>
		<?php echo $form->textField($model,'amountPaidByInsurance',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->