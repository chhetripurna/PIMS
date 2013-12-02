<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->patientID=>array('view','id'=>$model->patientID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patient', 'url'=>array('index')),
	array('label'=>'Create Patient', 'url'=>array('create')),
	array('label'=>'View Patient', 'url'=>array('view', 'id'=>$model->patientID)),
	array('label'=>'Manage Patient', 'url'=>array('admin')),
);
?>

<h1>Update Patient <?php echo $model->patientID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>