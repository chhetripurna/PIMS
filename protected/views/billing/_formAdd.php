<?php
/* @var $this BillingController */
/* @var $model Billing */
/* @var $form CActiveForm */
?>

<div class="form">

<h1>Payment</h1>

<?php 
	echo CHtml::beginForm();
	echo "Please enter the amount paid by the customer: ";
	echo CHtml::textField($cpaid, $cpaid='0')."<br>";
	echo CHtml::error();
	echo "Please enter the amount paid by insurnace: ";
	echo CHtml::textField($ipaid, $ipaid='0')."<br>";
	
foreach($model->charges as $row){
	$total = $total + $row['amount'];
	echo "<tr><td>".CHtml::encode($row['chargeID'])."</td><td>".CHtml::encode($row['item'])."</td><td>".CHtml::encode("\$".$row['amount'])."</td>";
	}

	echo CHtml::endForm();


</div><!-- form -->
