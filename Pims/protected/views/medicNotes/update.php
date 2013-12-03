<?php
/* @var $this MedicNotesController */
/* @var $model MedicNotes */

$this->breadcrumbs=array(
	'Medic Notes'=>array('index'),
	$model->noteID=>array('view','id'=>$model->noteID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicNotes', 'url'=>array('index')),
	array('label'=>'Create MedicNotes', 'url'=>array('create')),
	array('label'=>'View MedicNotes', 'url'=>array('view', 'id'=>$model->noteID)),
	array('label'=>'Manage MedicNotes', 'url'=>array('admin')),
);
?>

<h1>Update MedicNotes <?php echo $model->noteID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>