<?php
/* @var $this VisitController */
/* @var $model Visit */

$this->breadcrumbs=array(
	'Visits'=>array('index'),
	$model->visitID=>array('view','id'=>$model->visitID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Visit', 'url'=>array('index')),
	array('label'=>'Create Visit', 'url'=>array('create')),
	array('label'=>'View Visit', 'url'=>array('view', 'id'=>$model->visitID)),
	array('label'=>'Manage Visit', 'url'=>array('admin')),
);
?>

<h1>Update Visit <?php echo $model->visitID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>