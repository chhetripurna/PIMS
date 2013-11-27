<?php
/* @var $this ProceduresController */
/* @var $model Procedures */

$this->breadcrumbs=array(
	'Procedures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Procedures', 'url'=>array('index')),
	array('label'=>'Manage Procedures', 'url'=>array('admin')),
);
?>

<h1>Create Procedures</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>