<?php
/* @var $this VolunteerController */
/* @var $model Volunteer */

$this->breadcrumbs=array(
	'Volunteers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Volunteer', 'url'=>array('index')),
	array('label'=>'Manage Volunteer', 'url'=>array('admin')),
);
?>

<h1>Create Volunteer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>