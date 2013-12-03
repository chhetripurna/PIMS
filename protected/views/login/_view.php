<?php
/* @var $this LoginController */
/* @var $data Login */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('loginName')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->loginName), array('view', 'id'=>$data->loginName)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userType')); ?>:</b>
	<?php echo CHtml::encode($data->userType); ?>
	<br />


</div>