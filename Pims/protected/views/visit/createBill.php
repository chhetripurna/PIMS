<?php
/* @var $this BillingController */
/* @var $model Billing */

$this->breadcrumbs=array(
	'Billings'=>array('index'),
	'Create',
);

?>

<h1>Create Billing</h1>

<?php $this->renderPartial('_formB', array('model'=>$model)); ?>
