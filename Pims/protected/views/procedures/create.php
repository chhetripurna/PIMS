<?php
/* @var $this ProceduresController */
/* @var $model Procedures */

$this->breadcrumbs=array(
	'Visits'=>array('/site/visitDoc','id'=>$model->visitID),
	'Create',
);

?>

<h1>Create Procedures</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
