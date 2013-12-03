<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Search'=>array('/site/search'),
	'Create',
);
?>

<h1>Create Patient</h1>
<div class="contactForm">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
