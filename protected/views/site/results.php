<div id="menus">
<div id="mainmenu">	
<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
</div></div>

<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Search Results';
$this->breadcrumbs=array(
	'Search Results',
);
?>



<p align="center">
<h1>Search Results</h1>
<?php
/* var $dataReader is from SiteController*/
if($result!=false){
	echo "<p align='center'>";
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>Patient ID</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th>";
	echo "</tr>";
	
	while(($row=$result->read())!==false)
	{
		echo "<tr>";
		echo "<td>".CHtml::link(CHtml::encode($row['patientID']),array('patientInformation','id'=>$row['patientID']))."</td>";
		echo "<td>".CHtml::encode($row['firstName'])."</td>";
		echo "<td>".CHtml::encode($row['lastName'])."</td>";
		echo "<td>".CHtml::encode($row['DOB'])."</td>";
		echo "<tr>";
	}
	echo "</table>";
	echo "</p>";
} else {
	echo "<p align='center'>".CHtml::link('Search failed to find any results. Please try again', array('/site/search'))."</p>";
}
?>
</p>
