<?php
/* @var $this InsuranceController */
/* @var $model Insurance */

$this->breadcrumbs=array(
	'Billing'=>array('site/billing','id'=>$model->patientID),
	'Add Insurance',
);

?>

<h1>Add Insurance</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
