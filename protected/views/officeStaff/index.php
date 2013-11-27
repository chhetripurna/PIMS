<?php
/* @var $this OfficeStaffController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Office Staff',
);

$this->menu=array(
	array('label'=>'Create OfficeStaff', 'url'=>array('create')),
	array('label'=>'Manage OfficeStaff', 'url'=>array('admin')),
);
?>

<h1>Office Staff</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
