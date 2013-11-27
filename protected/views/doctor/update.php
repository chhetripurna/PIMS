<?php
/* @var $this DoctorController */
/* @var $model Doctor */

$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	$model->doctorID=>array('view','id'=>$model->doctorID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doctor', 'url'=>array('index')),
	array('label'=>'Create Doctor', 'url'=>array('create')),
	array('label'=>'View Doctor', 'url'=>array('view', 'id'=>$model->doctorID)),
	array('label'=>'Manage Doctor', 'url'=>array('admin')),
);
?>

<h1>Update Doctor <?php echo $model->doctorID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>