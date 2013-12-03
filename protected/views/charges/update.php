<?php
/* @var $this ChargesController */
/* @var $model Charges */

$this->breadcrumbs=array(
	'Charges'=>array('index'),
	$model->chargeID=>array('view','id'=>$model->chargeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Charges', 'url'=>array('index')),
	array('label'=>'Create Charges', 'url'=>array('create')),
	array('label'=>'View Charges', 'url'=>array('view', 'id'=>$model->chargeID)),
	array('label'=>'Manage Charges', 'url'=>array('admin')),
);
?>

<h1>Update Charges <?php echo $model->chargeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>