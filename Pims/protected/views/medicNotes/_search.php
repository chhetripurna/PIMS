<?php
/* @var $this MedicNotesController */
/* @var $model MedicNotes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'noteID'); ?>
		<?php echo $form->textField($model,'noteID',array('size'=>20,'maxlength'=>20)); ?>
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
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicID'); ?>
		<?php echo $form->textField($model,'medicID',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->