<?php
/* @var $this ProceduresController */
/* @var $model Procedures */

$this->breadcrumbs=array(
	'Procedures'=>array('index'),
	$model->noteID=>array('view','id'=>$model->noteID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Procedures', 'url'=>array('index')),
	array('label'=>'Create Procedures', 'url'=>array('create')),
	array('label'=>'View Procedures', 'url'=>array('view', 'id'=>$model->noteID)),
	array('label'=>'Manage Procedures', 'url'=>array('admin')),
);
?>

<h1>Update Procedures <?php echo $model->noteID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>