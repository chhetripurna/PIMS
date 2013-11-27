<?php
/* @var $this VisitController */
/* @var $model Visit */

$this->breadcrumbs=array(
	'Visits'=>array('index'),
	$model->visitID,
);

$this->menu=array(
	array('label'=>'List Visit', 'url'=>array('index')),
	array('label'=>'Create Visit', 'url'=>array('create')),
	array('label'=>'Update Visit', 'url'=>array('update', 'id'=>$model->visitID)),
	array('label'=>'Delete Visit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->visitID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visit', 'url'=>array('admin')),
);
?>

<h1>View Visit #<?php echo $model->visitID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'visitID',
		'patientID',
		'admitDate',
		'dischargeDate',
		'admitReason',
		'facility',
		'floor',
		'roomNum',
		'bedNum',
		'visitors',
	),
)); ?>
