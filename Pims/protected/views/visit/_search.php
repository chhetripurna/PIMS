<?php
/* @var $this VisitController */
/* @var $model Visit */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'visitID'); ?>
		<?php echo $form->textField($model,'visitID',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'patientID'); ?>
		<?php echo $form->textField($model,'patientID',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admitDate'); ?>
		<?php echo $form->textField($model,'admitDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dischargeDate'); ?>
		<?php echo $form->textField($model,'dischargeDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admitReason'); ?>
		<?php echo $form->textField($model,'admitReason',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'facility'); ?>
		<?php echo $form->textField($model,'facility',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floor'); ?>
		<?php echo $form->textField($model,'floor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'roomNum'); ?>
		<?php echo $form->textField($model,'roomNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bedNum'); ?>
		<?php echo $form->textField($model,'bedNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visitors'); ?>
		<?php echo $form->textField($model,'visitors',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->