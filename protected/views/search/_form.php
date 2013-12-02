<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patient-form',
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
		<?php echo $form->labelEx($model,'DOB'); ?>
		<?php echo $form->textField($model,'DOB'); ?>
		<?php echo $form->error($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street'); ?>
		<?php echo $form->textField($model,'street',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zipCode'); ?>
		<?php echo $form->textField($model,'zipCode',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'zipCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homePhone'); ?>
		<?php echo $form->textField($model,'homePhone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'homePhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workPhone'); ?>
		<?php echo $form->textField($model,'workPhone',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'workPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cellPhone'); ?>
		<?php echo $form->textField($model,'cellPhone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cellPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact1Name'); ?>
		<?php echo $form->textField($model,'contact1Name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'contact1Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact1Num'); ?>
		<?php echo $form->textField($model,'contact1Num',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'contact1Num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact2Name'); ?>
		<?php echo $form->textField($model,'contact2Name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'contact2Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact2Num'); ?>
		<?php echo $form->textField($model,'contact2Num',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'contact2Num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familyDoctor'); ?>
		<?php echo $form->textField($model,'familyDoctor',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'familyDoctor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->