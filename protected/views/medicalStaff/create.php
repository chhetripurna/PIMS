<?php
/* @var $this MedicalStaffController */
/* @var $model MedicalStaff */

$this->breadcrumbs=array(
	'Medical Staff'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MedicalStaff', 'url'=>array('index')),
	array('label'=>'Manage MedicalStaff', 'url'=>array('admin')),
);
?>

<h1>Create MedicalStaff</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>