<?php

  /////////////////////////////////MASTER///////////////////////////////////////

  try
	{
		$sql="SELECT COUNT(*) FROM customer";
		$result= $pdo->query($sql);
	}
	catch(PDOException $e)
	{
		$error='error in counting customer';
		include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
		exit();
	}
	$totalSupplier = $result->fetch();

	try
	{
		$sql="SELECT COUNT(*) FROM customer WHERE (date(created) = curdate() OR date(updated) = curdate())";
		$result= $pdo->query($sql);
	}
	catch(PDOException $e)
	{
		$error='error in counting supplier';
		include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
		exit();
	}
	$todaySupplier = $result->fetch();

	//////////////////////////////////////////////////////////////////////////////

	try
	{
		$sql="SELECT COUNT(*) FROM prescription";
		$result= $pdo->query($sql);
	}
	catch(PDOException $e)
	{
		$error='error in counting lens order';
		include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
		exit();
	}
	$totalPrescription = $result->fetch();

	try
	{
		$sql="SELECT COUNT(*) FROM prescription WHERE (date(created) = curdate() OR date(updated) = curdate())";
		$result= $pdo->query($sql);
	}
	catch(PDOException $e)
	{
		$error='error in counting indents';
		include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
		exit();
	}
	$todayPrescription = $result->fetch();

	////////////////////////////////SMS///////////////////////////////////////////

	try
	{
		$sql="SELECT COUNT(*) FROM sms";
		$result= $pdo->query($sql);
	}
	catch(PDOException $e)
	{
		$error='error in counting sms';
		include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
		exit();
	}
	$totalSMS = $result->fetch();

	try
	{
		$sql="SELECT COUNT(*) FROM `sms` WHERE date(created) = curdate() AND session=:session";
		$s=$pdo->prepare($sql);
		$s->bindValue(':session',$companyProfile['session']);
		$s->execute();
	}
	catch(PDOException $e)
	{
		$error='error in counting youtubes';
		include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
		exit();
	}
	$result= $s->fetchAll();
	$todaySMS = $result[0];
