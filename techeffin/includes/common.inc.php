<?php

  try
  {
    $sql='SELECT * FROM role';
    $result=$pdo->query($sql);
  }
  catch(PDOException $e)
  {
    $error='error in fetching role';
    include $_SERVER['DOCUMENT_ROOT'].'/includes/shikshabell/error.html.php';
    exit();
  }
  $i=1;
  foreach($result as $row)
  {
    $roles[]=array(
      'serial'=>$i,
      'id'=>$row['id'],
      'code'=>$row['code'],
      'name'=>$row['name'],
      'type'=>$row['type']);
      $i++;
  }

  ////////////////PROJECT SPECIFIC//////////////////////////////////////////////

  
