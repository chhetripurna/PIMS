<?php
/* @var $this LoginController */
/* @var $model Login */

$this->breadcrumbs=array(
	'Logins'=>array('index'),
	$model->loginName=>array('view','id'=>$model->loginName),
	'Update',
);

$this->menu=array(
	array('label'=>'List Login', 'url'=>array('index')),
	array('label'=>'Create Login', 'url'=>array('create')),
	array('label'=>'View Login', 'url'=>array('view', 'id'=>$model->loginName)),
	array('label'=>'Manage Login', 'url'=>array('admin')),
);
?>

<h1>Update Login <?php echo $model->loginName; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>