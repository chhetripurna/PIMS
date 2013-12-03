<?php
/* @var $this DocNotesController */
/* @var $model DocNotes */

$this->breadcrumbs=array(
	'Doc Notes'=>array('index'),
	$model->noteID=>array('view','id'=>$model->noteID),
	'Update',
);

$this->menu=array(
	array('label'=>'List DocNotes', 'url'=>array('index')),
	array('label'=>'Create DocNotes', 'url'=>array('create')),
	array('label'=>'View DocNotes', 'url'=>array('view', 'id'=>$model->noteID)),
	array('label'=>'Manage DocNotes', 'url'=>array('admin')),
);
?>

<h1>Update DocNotes <?php echo $model->noteID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>