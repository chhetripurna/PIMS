<?php
/* @var $this DocNotesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Doc Notes',
);

$this->menu=array(
	array('label'=>'Create DocNotes', 'url'=>array('create')),
	array('label'=>'Manage DocNotes', 'url'=>array('admin')),
);
?>

<h1>Doc Notes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
