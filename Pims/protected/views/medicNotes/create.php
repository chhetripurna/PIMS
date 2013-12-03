<?php
/* @var $this MedicNotesController */
/* @var $model MedicNotes */

$this->breadcrumbs=array(
	'Visits'=>array('/site/visitDoc','id'=>$model->visitID),
	'Create',
);
?>

<h1>Create MedicNotes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
