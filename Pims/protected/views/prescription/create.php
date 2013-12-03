<?php
/* @var $this PrescriptionController */
/* @var $model Prescription */

$this->breadcrumbs=array(
	'Visits'=>array('/site/visitDoc','id'=>$model->visitID),
	'Create',
);

?>

<h1>Create Prescription</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
