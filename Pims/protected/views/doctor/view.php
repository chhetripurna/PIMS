<?php
/* @var $this DoctorController */
/* @var $model Doctor */

$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	$model->doctorID,
);

$this->menu=array(
	array('label'=>'List Doctor', 'url'=>array('index')),
	array('label'=>'Create Doctor', 'url'=>array('create')),
	array('label'=>'Update Doctor', 'url'=>array('update', 'id'=>$model->doctorID)),
	array('label'=>'Delete Doctor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->doctorID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doctor', 'url'=>array('admin')),
);
?>

<h1>View Doctor #<?php echo $model->doctorID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'doctorID',
		'firstName',
		'middleName',
		'lastName',
		'suffix',
		'specialization',
		'loginName',
	),
)); ?>
