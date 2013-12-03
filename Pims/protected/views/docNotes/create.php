<?php
/* @var $this DocNotesController */
/* @var $model DocNotes */

$this->breadcrumbs=array(
	'Visits'=>array('/site/visitDoc','id'=>$model->visitID),
	'Create',
);

?>

<h1>Create DocNotes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
