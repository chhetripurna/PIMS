<?php
/* @var $this MedicalStaffController */
/* @var $model MedicalStaff */

$this->breadcrumbs=array(
	'Medical Staff'=>array('index'),
	$model->medicID=>array('view','id'=>$model->medicID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicalStaff', 'url'=>array('index')),
	array('label'=>'Create MedicalStaff', 'url'=>array('create')),
	array('label'=>'View MedicalStaff', 'url'=>array('view', 'id'=>$model->medicID)),
	array('label'=>'Manage MedicalStaff', 'url'=>array('admin')),
);
?>

<h1>Update MedicalStaff <?php echo $model->medicID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>