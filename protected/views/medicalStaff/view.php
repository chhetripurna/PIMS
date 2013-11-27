<?php
/* @var $this MedicalStaffController */
/* @var $model MedicalStaff */

$this->breadcrumbs=array(
	'Medical Staff'=>array('index'),
	$model->medicID,
);

$this->menu=array(
	array('label'=>'List MedicalStaff', 'url'=>array('index')),
	array('label'=>'Create MedicalStaff', 'url'=>array('create')),
	array('label'=>'Update MedicalStaff', 'url'=>array('update', 'id'=>$model->medicID)),
	array('label'=>'Delete MedicalStaff', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->medicID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedicalStaff', 'url'=>array('admin')),
);
?>

<h1>View MedicalStaff #<?php echo $model->medicID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'medicID',
		'firstName',
		'middleName',
		'lastName',
		'suffix',
		'type',
		'loginName',
	),
)); ?>
