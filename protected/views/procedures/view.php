<?php
/* @var $this ProceduresController */
/* @var $model Procedures */

$this->breadcrumbs=array(
	'Procedures'=>array('index'),
	$model->noteID,
);

$this->menu=array(
	array('label'=>'List Procedures', 'url'=>array('index')),
	array('label'=>'Create Procedures', 'url'=>array('create')),
	array('label'=>'Update Procedures', 'url'=>array('update', 'id'=>$model->noteID)),
	array('label'=>'Delete Procedures', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->noteID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Procedures', 'url'=>array('admin')),
);
?>

<h1>View Procedures #<?php echo $model->noteID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'noteID',
		'patientID',
		'visitID',
		'procedures',
		'doctorID',
	),
)); ?>
