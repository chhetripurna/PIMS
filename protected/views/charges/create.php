<?php
/* @var $this ChargesController */
/* @var $model Charges */

$this->breadcrumbs=array(
	'Charges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Charges', 'url'=>array('index')),
	array('label'=>'Manage Charges', 'url'=>array('admin')),
);
?>

<h1>Create Charges</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>