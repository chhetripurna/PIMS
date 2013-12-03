<?php
/* @var $this DocNotesController */
/* @var $model DocNotes */

$this->breadcrumbs=array(
	'Doc Notes'=>array('index'),
	$model->noteID,
);

$this->menu=array(
	array('label'=>'List DocNotes', 'url'=>array('index')),
	array('label'=>'Create DocNotes', 'url'=>array('create')),
	array('label'=>'Update DocNotes', 'url'=>array('update', 'id'=>$model->noteID)),
	array('label'=>'Delete DocNotes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->noteID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DocNotes', 'url'=>array('admin')),
);
?>

<h1>View DocNotes #<?php echo $model->noteID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'noteID',
		'patientID',
		'visitID',
		'note',
		'doctorID',
	),
)); ?>
