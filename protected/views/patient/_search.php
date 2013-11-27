<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'patientID'); ?>
		<?php echo $form->textField($model,'patientID',array('size'=>8,'maxlength'=>8)); ?>
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
		<?php echo $form->label($model,'DOB'); ?>
		<?php echo $form->textField($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street'); ?>
		<?php echo $form->textField($model,'street',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zipCode'); ?>
		<?php echo $form->textField($model,'zipCode',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homePhone'); ?>
		<?php echo $form->textField($model,'homePhone',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workPhone'); ?>
		<?php echo $form->textField($model,'workPhone',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cellPhone'); ?>
		<?php echo $form->textField($model,'cellPhone',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact1Name'); ?>
		<?php echo $form->textField($model,'contact1Name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact1Num'); ?>
		<?php echo $form->textField($model,'contact1Num',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact2Name'); ?>
		<?php echo $form->textField($model,'contact2Name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact2Num'); ?>
		<?php echo $form->textField($model,'contact2Num',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familyDoctor'); ?>
		<?php echo $form->textField($model,'familyDoctor',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->