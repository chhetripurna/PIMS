<?php
/* @var $this DoctorController */
/* @var $model Doctor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'doctorID'); ?>
		<?php echo $form->textField($model,'doctorID',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'middleName'); ?>
		<?php echo $form->textField($model,'middleName',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suffix'); ?>
		<?php echo $form->textField($model,'suffix',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'specialization'); ?>
		<?php echo $form->textField($model,'specialization',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loginName'); ?>
		<?php echo $form->textField($model,'loginName',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->