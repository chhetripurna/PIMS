<?php
/* @var $this BillingController */
/* @var $model Billing */

$this->breadcrumbs=array(
	'Billings'=>array('index'),
	$model->billingID=>array('view','id'=>$model->billingID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Billing', 'url'=>array('index')),
	array('label'=>'Create Billing', 'url'=>array('create')),
	array('label'=>'View Billing', 'url'=>array('view', 'id'=>$model->billingID)),
	array('label'=>'Manage Billing', 'url'=>array('admin')),
);
?>

<h1>Update Billing <?php echo $model->billingID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>