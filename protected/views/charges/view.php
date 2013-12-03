<?php
/* @var $this ChargesController */
/* @var $model Charges */

$this->breadcrumbs=array(
	'Charges'=>array('index'),
	$model->chargeID,
);

$this->menu=array(
	array('label'=>'List Charges', 'url'=>array('index')),
	array('label'=>'Create Charges', 'url'=>array('create')),
	array('label'=>'Update Charges', 'url'=>array('update', 'id'=>$model->chargeID)),
	array('label'=>'Delete Charges', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->chargeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Charges', 'url'=>array('admin')),
);
?>

<h1>View Charges #<?php echo $model->chargeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'chargeID',
		'billingID',
		'item',
		'amount',
	),
)); ?>
