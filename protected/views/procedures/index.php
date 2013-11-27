<?php
/* @var $this ProceduresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Procedures',
);

$this->menu=array(
	array('label'=>'Create Procedures', 'url'=>array('create')),
	array('label'=>'Manage Procedures', 'url'=>array('admin')),
);
?>

<h1>Procedures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
