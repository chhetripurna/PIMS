<?php
/* @var $this BillingController */
/* @var $model Billing */

$this->breadcrumbs=array(
	'Billing'=>array('/site/visit','id'=>$model->visitID),
	'Update',
);

?>

<h1>Update Bill #<?php echo $model->billingID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
