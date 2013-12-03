<?php
/* @var $this VolunteerController */
/* @var $model Volunteer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'volunteer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'volunteerID'); ?>
		<?php echo $form->textField($model,'volunteerID',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'volunteerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middleName'); ?>
		<?php echo $form->textField($model,'middleName',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'middleName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suffix'); ?>
		<?php echo $form->textField($model,'suffix',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'suffix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loginName'); ?>
		<?php echo $form->textField($model,'loginName',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'loginName'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->