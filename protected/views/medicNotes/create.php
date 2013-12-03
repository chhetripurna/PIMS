<?php
/* @var $this MedicNotesController */
/* @var $model MedicNotes */

$this->breadcrumbs=array(
	'Medic Notes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MedicNotes', 'url'=>array('index')),
	array('label'=>'Manage MedicNotes', 'url'=>array('admin')),
);
?>

<h1>Create MedicNotes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>