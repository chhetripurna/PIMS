<?php
/* @var $this MedicalStaffController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medical Staff',
);

$this->menu=array(
	array('label'=>'Create MedicalStaff', 'url'=>array('create')),
	array('label'=>'Manage MedicalStaff', 'url'=>array('admin')),
);
?>

<h1>Medical Staff</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
