<?php
/* @var $this OfficeStaffController */
/* @var $model OfficeStaff */

$this->breadcrumbs=array(
	'Office Staff'=>array('index'),
	$model->officeID,
);

$this->menu=array(
	array('label'=>'List OfficeStaff', 'url'=>array('index')),
	array('label'=>'Create OfficeStaff', 'url'=>array('create')),
	array('label'=>'Update OfficeStaff', 'url'=>array('update', 'id'=>$model->officeID)),
	array('label'=>'Delete OfficeStaff', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->officeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OfficeStaff', 'url'=>array('admin')),
);
?>

<h1>View OfficeStaff #<?php echo $model->officeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'officeID',
		'firstName',
		'middleName',
		'lastName',
		'suffix',
		'type',
		'loginName',
	),
)); ?>
