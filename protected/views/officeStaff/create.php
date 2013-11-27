<?php
/* @var $this OfficeStaffController */
/* @var $model OfficeStaff */

$this->breadcrumbs=array(
	'Office Staff'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OfficeStaff', 'url'=>array('index')),
	array('label'=>'Manage OfficeStaff', 'url'=>array('admin')),
);
?>

<h1>Create OfficeStaff</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>