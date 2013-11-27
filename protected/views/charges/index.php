<?php
/* @var $this ChargesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Charges',
);

$this->menu=array(
	array('label'=>'Create Charges', 'url'=>array('create')),
	array('label'=>'Manage Charges', 'url'=>array('admin')),
);
?>

<h1>Charges</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
