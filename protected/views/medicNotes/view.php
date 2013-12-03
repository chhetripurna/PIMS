<?php
/* @var $this MedicNotesController */
/* @var $model MedicNotes */

$this->breadcrumbs=array(
	'Medic Notes'=>array('index'),
	$model->noteID,
);

$this->menu=array(
	array('label'=>'List MedicNotes', 'url'=>array('index')),
	array('label'=>'Create MedicNotes', 'url'=>array('create')),
	array('label'=>'Update MedicNotes', 'url'=>array('update', 'id'=>$model->noteID)),
	array('label'=>'Delete MedicNotes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->noteID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedicNotes', 'url'=>array('admin')),
);
?>

<h1>View MedicNotes #<?php echo $model->noteID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'noteID',
		'patientID',
		'visitID',
		'note',
		'medicID',
	),
)); ?>
