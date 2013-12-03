<?php
/* @var $this VisitController */
/* @var $model Visit */

$this->breadcrumbs=array(
	'Visits'=>array('index'),
	$model->visitID=>array('view','id'=>$model->visitID),
	'Update',
);

?>

<h1>Update Visit <?php echo $model->visitID; ?></h1>

<?php $this->renderPartial('_formE', array('model'=>$model)); ?>
