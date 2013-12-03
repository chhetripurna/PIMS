<?php
/* @var $this LoginController */
/* @var $model Login */

$this->breadcrumbs=array(
	'Logins'=>array('index'),
	$model->loginName,
);

$this->menu=array(
	array('label'=>'List Login', 'url'=>array('index')),
	array('label'=>'Create Login', 'url'=>array('create')),
	array('label'=>'Update Login', 'url'=>array('update', 'id'=>$model->loginName)),
	array('label'=>'Delete Login', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->loginName),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Login', 'url'=>array('admin')),
);
?>

<h1>View Login #<?php echo $model->loginName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'loginName',
		'password',
		'userType',
	),
)); ?>
