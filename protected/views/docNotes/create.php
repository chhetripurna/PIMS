<?php
/* @var $this DocNotesController */
/* @var $model DocNotes */

$this->breadcrumbs=array(
	'Doc Notes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DocNotes', 'url'=>array('index')),
	array('label'=>'Manage DocNotes', 'url'=>array('admin')),
);
?>

<h1>Create DocNotes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>