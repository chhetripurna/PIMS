<?php
/* @var $this BillingController */
/* @var $model Billing */
/* @var $form CActiveForm */
?>

<div class="contactForm">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'billing-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'amountPaid'); ?>
		<?php echo $form->textField($model,'amountPaid',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'amountPaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amountPaidByInsurance'); ?>
		<?php echo $form->textField($model,'amountPaidByInsurance',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'amountPaidByInsurance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
