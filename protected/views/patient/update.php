<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->patientID=>array('view','id'=>$model->patientID),
	'Update',
);
?>

<h1>Update Patient <?php echo $model->patientID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
