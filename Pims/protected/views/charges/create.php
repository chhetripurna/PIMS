<?php
/* @var $this ChargesController */
/* @var $model Charges */

$this->breadcrumbs=array(
	'Billing'=>array('/site/billing', 'id'=>$model->billing->visit->patientID),
	'Create',
);

?>

<h1>Add Charge</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
