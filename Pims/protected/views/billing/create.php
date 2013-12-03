<?php
/* @var $this BillingController */
/* @var $model Billing */

$this->breadcrumbs=array(
	'Billings',
	'Visit',
	'Bill',
	'Create',
);
?>

<h1>Create Billing</h1>
<div id="contactForm">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
