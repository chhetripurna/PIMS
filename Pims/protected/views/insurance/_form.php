<?php
/* @var $this InsuranceController */
/* @var $model Insurance */
/* @var $form CActiveForm */
?>

<div class="contactForm">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'insurance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provider'); ?>
		<?php echo $form->textField($model,'provider',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'provider'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accountNum'); ?>
		<?php echo $form->textField($model,'accountNum',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'accountNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groupNum'); ?>
		<?php echo $form->textField($model,'groupNum',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'groupNum'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
