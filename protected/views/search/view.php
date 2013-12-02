<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->patientID,
);

$this->menu=array(
	array('label'=>'List Patient', 'url'=>array('index')),
	array('label'=>'Create Patient', 'url'=>array('create')),
	array('label'=>'Update Patient', 'url'=>array('update', 'id'=>$model->patientID)),
	array('label'=>'Delete Patient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->patientID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patient', 'url'=>array('admin')),
);
?>

<h1>View Patient #<?php echo $model->patientID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'patientID',
		'firstName',
		'middleName',
		'lastName',
		'suffix',
		'DOB',
		'street',
		'city',
		'state',
		'zipCode',
		'homePhone',
		'workPhone',
		'cellPhone',
		'contact1Name',
		'contact1Num',
		'contact2Name',
		'contact2Num',
		'familyDoctor',
	),
)); ?>
