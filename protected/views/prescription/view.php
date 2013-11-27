<?php
/* @var $this PrescriptionController */
/* @var $model Prescription */

$this->breadcrumbs=array(
	'Prescriptions'=>array('index'),
	$model->noteID,
);

$this->menu=array(
	array('label'=>'List Prescription', 'url'=>array('index')),
	array('label'=>'Create Prescription', 'url'=>array('create')),
	array('label'=>'Update Prescription', 'url'=>array('update', 'id'=>$model->noteID)),
	array('label'=>'Delete Prescription', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->noteID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prescription', 'url'=>array('admin')),
);
?>

<h1>View Prescription #<?php echo $model->noteID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'noteID',
		'patientID',
		'visitID',
		'prescriptions',
		'doctorID',
	),
)); ?>
