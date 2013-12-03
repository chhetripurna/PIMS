<?php
/* @var $this BillingController */
/* @var $model Billing */

$this->breadcrumbs=array(
	'Billings'=>array('index'),
	$model->billingID,
);

$this->menu=array(
	array('label'=>'List Billing', 'url'=>array('index')),
	array('label'=>'Create Billing', 'url'=>array('create')),
	array('label'=>'Update Billing', 'url'=>array('update', 'id'=>$model->billingID)),
	array('label'=>'Delete Billing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->billingID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Billing', 'url'=>array('admin')),
);
?>

<h1>View Billing #<?php echo $model->billingID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'billingID',
		'patientID',
		'visitID',
		'amountPaid',
		'amountPaidByInsurance',
	),
)); ?>
