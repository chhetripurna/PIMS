<?php
/* @var $this MedicNotesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medic Notes',
);

$this->menu=array(
	array('label'=>'Create MedicNotes', 'url'=>array('create')),
	array('label'=>'Manage MedicNotes', 'url'=>array('admin')),
);
?>

<h1>Medic Notes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
