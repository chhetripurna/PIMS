<?php
/* @var $this InsuranceController */
/* @var $model Insurance */

$this->breadcrumbs=array(
	'Insurances'=>array('index'),
	$model->insuranceID,
);

$this->menu=array(
	array('label'=>'List Insurance', 'url'=>array('index')),
	array('label'=>'Create Insurance', 'url'=>array('create')),
	array('label'=>'Update Insurance', 'url'=>array('update', 'id'=>$model->insuranceID)),
	array('label'=>'Delete Insurance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->insuranceID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Insurance', 'url'=>array('admin')),
);
?>

<h1>View Insurance #<?php echo $model->insuranceID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'insuranceID',
		'patientID',
		'provider',
		'accountNum',
		'groupNum',
	),
)); ?>
