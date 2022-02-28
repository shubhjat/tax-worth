<?php

try
{
	$sql='SELECT * FROM company';
	$s=$pdo->query($sql);
}
catch(PDOException $e)
{
	$error='error in fetching company profile';
	include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
	exit();
}
$row=$s->fetch();
if(isset($row['id']))
{
	$companyProfile=array(
		'id'=>$row['id'],
		'name'=>$row['name'],
		'tagline'=>$row['tagline'],
		'description'=>$row['description'],
		'url'=>$row['url'],
		'contact'=>$row['contact'],
		'email'=>$row['email'],
		'address'=>$row['address'],
		'profile'=>$row['profile'],
		'favicon'=>$row['favicon'],
		'background'=>$row['background'],
		'facebook'=>$row['facebook'],
		'twitter'=>$row['twitter'],
		'google'=>$row['google'],
		'youtube'=>$row['youtube'],
		'instagram'=>$row['instagram'],
		'telegram'=>$row['telegram'],
		'discord'=>$row['discord'],
		'linkedIn'=>$row['linkedIn'],
		'send_whatsapp'=>$row['send_whatsapp'],
		'whatsapp_number'=>$row['whatsapp_number'],
		'whatsapp_api'=>$row['whatsapp_api'],
		'send_email'=>$row['send_email'],
		'email_address'=>$row['email_address'],
		'offer'=>$row['offer'],
		'sms status'=>$row['send_sms'],
		'sms'=>$row['sms'],
		'pushID'=>$row['push_id'],
		'pushKey'=>$row['push_key'],
		'session'=>$row['session'],
		'map'=>$row['map']);

		if($row['sms']==''){
			$senderid = 'TECFIN';
		}
		else{
			$senderid = $row['sms'];
		}
}
else
{
	$companyProfile = NULL;
}

//////////////////////////////////////////////////////////////////////////////

try
{
	$sql='SELECT * FROM seo';
	$s=$pdo->query($sql);
}
catch(PDOException $e)
{
	$error='error in fetching company seo';
	include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
	exit();
}
$row=$s->fetch();
if(isset($row['id']))
{
	$companySeo=array(
		'id'=>$row['id'],
		'title'=>$row['title'],
		'description'=>$row['description'],
		'keyword'=>$row['keyword'],
		'google_site'=>$row['google_site'],
		'google_tag_head'=>$row['google_tag_head'],
		'google_tag_body'=>$row['google_tag_body'],
		'google_analytics'=>$row['google_analytics'],
		'hot_jar'=>$row['hot_jar']);
}
else
{
	$companySeo = NULL;
}


if(isset($_GET['action']) and $_GET['action']=='send-enquiry')
{
	echo "<script>alert('We'll be in touch shortly.');</script>" ;

	// $EmailFrom = $companyProfile['email'];
	// $name = $_POST["name"];
	// $subject = $_POST["name"]." From ". $_POST["email"];
	// $EmailTo = $companyProfile['email'];
	// if(isset($_POST['message'])){
	// 	$body = "Contact Email From ".$_POST["name"]." Contact Number - ".$_POST["contact"]." Message - ".$_POST["message"];
	// }
	// else{
	// 	$body = "Quotation Email From ".$_POST["name"]." Contact Number - ".$_POST["contact"]." From - ".$_POST["from"]." To - ".$_POST["to"];
	// }
	//
	// $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	//
	// try {
	// 		//Server settings
	// 		$mail->SMTPDebug = 2;                                 // Enable verbose debug output
	// 		$mail->isSMTP();                                      // Set mailer to use SMTP
	// 		$mail->Host = 'smtp.hostinger.com';  // Specify main and backup SMTP servers
	// 		$mail->SMTPAuth = true;                               // Enable SMTP authentication
	// 		$mail->Username = $companyProfile['email'];                 // SMTP username
	// 		$mail->Password = '@Dmin!ogin246';                           // SMTP password
	// 		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	// 		$mail->Port = 465;                                    // TCP port to connect to
	//
	// 		//Recipients
	// 		$mail->setFrom($EmailFrom, $name);
	// 		$mail->addAddress($EmailTo);               // Name is optional
	//
	// 		//Content
	// 		$mail->isHTML(true);                                  // Set email format to HTML
	// 		$mail->Subject = $subject;
	// 		$mail->Body    = $body;
	// 		$mail->AltBody = $body;
	//
	// 		$mail->send();
	//
	// } catch (Exception $e) {
	// 	$error='error in sending email';
	// 	include $_SERVER['DOCUMENT_ROOT'].'/techeffin/includes/error.html.php';
	// 	exit();
	// }
	//
	// $transaction = rand(111, 999) . rand(111,999) . rand(11, 99) . rand(11, 99);;

	try
	{
		$sql='INSERT INTO enquiry SET
			name=:name,
			contact=:contact,
			email=:email,
			address=:address,
			message=:message,
			session=:session,
			created=NOW()';

		$s= $pdo->prepare($sql);
		$s->bindValue(':name',$_POST['name']);
		$s->bindValue(':contact',$_POST['contact']);
		$s->bindValue(':email',$_POST['email']);
		$s->bindValue(':address',$_POST['address']);
		$s->bindValue(':message',$_POST['message']);
		$s->bindValue(':session',$companyProfile['session']);
		$s->execute();
	}
	catch(PDOException $e)
	{
		$error='error in inserting enquiry'.$e->getmessage();;
		include $_SERVER['DOCUMENT_ROOT'].'/techeffin/includes/error.html.php';
		exit();
	}

	if($companyProfile['send_whatsapp']=='ON'){
		$name = $_POST['name'];
		$contact = "91".$_POST['contact'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$message = $_POST['message'];

		$company = $companyProfile['name'];
		$type = 'enquiry';
		$whatsapp_api = $companyProfile['whatsapp_api'];
		$companyContact = $companyProfile['whatsapp_number'];
		$companyWebsite = $companyProfile['url'];

		$message1 = "Hello $name,\nWe have received your enquiry. We will get back to you shortly.\nWe are One Stop Destination for all your Tech Support Needs. \nWe provide Website, Mobile Apps, Customised Software, Digital Marketing etc. \nRegards, \n$company \nContact: $companyContact \nWebsite: $companyWebsite";

		whatsapp($contact,$message1,$whatsapp_api,$type,'client');

		$message1 = "NEW ENQUIRY!!! \nName: $name,\nContact: $contact, \nEmail: $email, \nAddress: $address, \nMessage: $message.";

		whatsapp($companyContact,$message1,$whatsapp_api,$type,'client');
	}

	echo "<script>
	window.location.href = '..';</script>" ;
	exit();
}

function whatsapp($contact,$message,$whatsapp_api,$type,$parent){

  include $_SERVER['DOCUMENT_ROOT'].'/techeffin/includes/db.inc.php';
  // create a new cURL resource

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.whatsdesk.in/v1/text.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 1,
    CURLOPT_NOSIGNAL => 1,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('message' => $message,'key' => $whatsapp_api,'number' => $contact),
  ));

  $response = curl_exec($curl);

  curl_close($curl);

  $transaction = rand(111, 999) . rand(111,999) . rand(11, 99) . rand(11, 99);

  try
  {
    $sql='SELECT * FROM company';
    $s=$pdo->query($sql);
  }
  catch(PDOException $e)
  {
    $error='error in fetching company profile';
    include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
    exit();
  }
  $row=$s->fetch();
  if($row[0]>0)
  {
    $session=$row['session'];
  }

  try
  {
    $sql='INSERT INTO whatsapp SET
      transaction=:transaction,
      contact=:contact,
      message=:message,
      type=:type,
      session=:session,
      parent=:parent,
      created=NOW()';

      $s=$pdo->prepare($sql);
      $s->bindValue(':transaction',$transaction);
      $s->bindValue(':contact',$contact);
      $s->bindValue(':message',$message);
      $s->bindValue(':type',$type);
      $s->bindValue(':session',$session);
      $s->bindValue(':parent',$parent);
      $s->execute();
  }
  catch(PDOException $e)
  {
    $error='error in inserting whatsapp';
    include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
    exit();
  }
}
