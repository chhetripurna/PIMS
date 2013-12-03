<?php
/* @var $this InsuranceController */
/* @var $model Insurance */

$this->breadcrumbs=array(
	'Insurances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Insurance', 'url'=>array('index')),
	array('label'=>'Manage Insurance', 'url'=>array('admin')),
);
?>

<h1>Create Insurance</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>