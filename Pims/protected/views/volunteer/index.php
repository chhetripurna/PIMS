<?php
/* @var $this VolunteerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Volunteers',
);

$this->menu=array(
	array('label'=>'Create Volunteer', 'url'=>array('create')),
	array('label'=>'Manage Volunteer', 'url'=>array('admin')),
);
?>

<h1>Volunteers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
