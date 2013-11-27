<?php
/* @var $this VolunteerController */
/* @var $model Volunteer */

$this->breadcrumbs=array(
	'Volunteers'=>array('index'),
	$model->volunteerID,
);

$this->menu=array(
	array('label'=>'List Volunteer', 'url'=>array('index')),
	array('label'=>'Create Volunteer', 'url'=>array('create')),
	array('label'=>'Update Volunteer', 'url'=>array('update', 'id'=>$model->volunteerID)),
	array('label'=>'Delete Volunteer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->volunteerID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Volunteer', 'url'=>array('admin')),
);
?>

<h1>View Volunteer #<?php echo $model->volunteerID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'volunteerID',
		'firstName',
		'middleName',
		'lastName',
		'suffix',
		'loginName',
	),
)); ?>
