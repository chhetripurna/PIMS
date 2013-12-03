<?php
/* @var $this MedicNotesController */
/* @var $model MedicNotes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medic-notes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'patientID'); ?>
		<?php echo $form->textField($model,'patientID',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'patientID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visitID'); ?>
		<?php echo $form->textField($model,'visitID',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'visitID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicID'); ?>
		<?php echo $form->textField($model,'medicID',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'medicID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->