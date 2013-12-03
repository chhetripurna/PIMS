<?php
/* @var $this PrescriptionController */
/* @var $model Prescription */

$this->breadcrumbs=array(
	'Prescriptions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Prescription', 'url'=>array('index')),
	array('label'=>'Manage Prescription', 'url'=>array('admin')),
);
?>

<h1>Create Prescription</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>