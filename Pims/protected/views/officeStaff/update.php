<?php
/* @var $this OfficeStaffController */
/* @var $model OfficeStaff */

$this->breadcrumbs=array(
	'Office Staff'=>array('index'),
	$model->officeID=>array('view','id'=>$model->officeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List OfficeStaff', 'url'=>array('index')),
	array('label'=>'Create OfficeStaff', 'url'=>array('create')),
	array('label'=>'View OfficeStaff', 'url'=>array('view', 'id'=>$model->officeID)),
	array('label'=>'Manage OfficeStaff', 'url'=>array('admin')),
);
?>

<h1>Update OfficeStaff <?php echo $model->officeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>