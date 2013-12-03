<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */
?>

<div class="contactForm">

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
	<table><tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'firstName'); ?></td>
		<td><?php echo $form->textField($model,'firstName',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'firstName'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'middleName'); ?></td>
		<td><?php echo $form->textField($model,'middleName',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'middleName'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'lastName'); ?></td>
		<td><?php echo $form->textField($model,'lastName',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'lastName'); ?></td></tr>
	</div>
	</tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'suffix'); ?></td>
		<td><?php echo $form->textField($model,'suffix',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'suffix'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'DOB'); ?></td>
		<td><?php echo $form->textField($model,'DOB'); ?>
		<?php echo $form->error($model,'DOB'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'street'); ?></td>
		<td><?php echo $form->textField($model,'street',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'street'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'city'); ?></td>
		<td><?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'city'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'state'); ?></td>
		<td><?php echo $form->textField($model,'state',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'state'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'zipCode'); ?></td>
		<td><?php echo $form->textField($model,'zipCode',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'zipCode'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'homePhone'); ?></td>
		<td><?php echo $form->textField($model,'homePhone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'homePhone'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'workPhone'); ?></td>
		<td><?php echo $form->textField($model,'workPhone',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'workPhone'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'cellPhone'); ?></td>
		<td><?php echo $form->textField($model,'cellPhone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cellPhone'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'contact1Name'); ?></td>
		<td><?php echo $form->textField($model,'contact1Name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'contact1Name'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'contact1Num'); ?></td>
		<td><?php echo $form->textField($model,'contact1Num',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'contact1Num'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'contact2Name'); ?></td>
		<td><?php echo $form->textField($model,'contact2Name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'contact2Name'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'contact2Num'); ?></td>
		<td><?php echo $form->textField($model,'contact2Num',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'contact2Num'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'familyDoctor'); ?></td>
		<td><?php echo $form->textField($model,'familyDoctor',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'familyDoctor'); ?></td></tr>
	</div>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
