<?php
/* @var $this InsuranceController */
/* @var $model Insurance */

$this->breadcrumbs=array(
	'Insurances'=>array('index'),
	$model->insuranceID=>array('view','id'=>$model->insuranceID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Insurance', 'url'=>array('index')),
	array('label'=>'Create Insurance', 'url'=>array('create')),
	array('label'=>'View Insurance', 'url'=>array('view', 'id'=>$model->insuranceID)),
	array('label'=>'Manage Insurance', 'url'=>array('admin')),
);
?>

<h1>Update Insurance <?php echo $model->insuranceID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>