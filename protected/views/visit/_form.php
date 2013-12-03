<?php
/* @var $this VisitController */
/* @var $model Visit */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visit-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<table><tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'admitDate'); ?></td><td>
		<?php echo $form->textField($model,'admitDate'); ?>
		<?php echo $form->error($model,'admitDate'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'dischargeDate'); ?></td><td>
		<?php echo $form->textField($model,'dischargeDate'); ?>
		<?php echo $form->error($model,'dischargeDate'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'admitReason'); ?></td><td>
		<?php echo $form->textField($model,'admitReason',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'admitReason'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'facility'); ?></td><td>
		<?php echo $form->textField($model,'facility',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'facility'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'floor'); ?></td><td>
		<?php echo $form->textField($model,'floor'); ?>
		<?php echo $form->error($model,'floor'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'roomNum'); ?></td><td>
		<?php echo $form->textField($model,'roomNum'); ?>
		<?php echo $form->error($model,'roomNum'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'bedNum'); ?></td><td>
		<?php echo $form->textField($model,'bedNum'); ?>
		<?php echo $form->error($model,'bedNum'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'visitors'); ?></td><td>
		<?php echo $form->textField($model,'visitors',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'visitors'); ?></td></tr>
	</div>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
