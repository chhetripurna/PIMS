<?php
/* @var $this VisitController */
/* @var $model Visit */

$this->breadcrumbs=array(
	'Billing'=>array('/site/billing', 'id'=>$model->patientID),
	'Create',
);
?>

<h1>Create Visit</h1>
<div class="contactForm">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
