<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Search';
$this->breadcrumbs=array(
	'Search',
);
?>

<div id="menus">
<div id="mainmenu">	
<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
</div></div>

<h1>Patient Search</h1>


<p>Enter the first or last name of the patient (partial searches work as well):</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'search-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'Search'); ?>
		<?php echo $form->textField($model,'input'); ?>
		<?php echo $form->error($model,'Search'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
