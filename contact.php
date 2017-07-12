<?php
/**
 * Created by PhpStorm.
 * User: chrisgrant
 * Date: 11/11/16
 * Time: 2:12 PM
 */
session_start();
define("MANDRIL_KEY", "W0Q6BSAB9PjbhNmlQo1yQQ");
include '../plugin/mandril.php';
//include '../EWG-Rosterfy/lib/mandril.php';

$fomr_type = "X";
$fields_in = array();
foreach($_POST['fields'] as $p) {
    if(isset($p['name'])) {
        if($p['name'] == 'form_type') {
            $fomr_type = $p['value'];
        }
        $fields_in[$p['name']] = $p['value'];
    }
}
$result = array("result"=>true,"type"=>"warning","message","Cheers mate");
$template = 1;
if(isset($fields_in['email_template'])) {
	$template = $fields_in['email_template'];
}

$email_message = "";
$subject = "Comment Received";
switch ($fomr_type) {
    case "demo_request":
        $form_desc = "Main Contact Form";
        $name = $fields_in['name'];
        $phone = $fields_in['phone'];
        $email = $fields_in['email'];
        $name_prts = explode(" ", $name);
if (count($name_prts) > 1) {
    $firstname = $name_prts[0];
} else {
    $firstname = $name;
}
     $message = "Hi " . $firstname . "<br/>Thank you for sending us an inquiry. This is just to let you know we have received the following: <br/><br/><em>" . str_replace(array("'","\"",),"",$fields_in['message']) . "</em><br/><br/>We will be in touch soon,<br/><br/>Regards<br/><br/>The Event Workforce Group Team";
        break;
    case "contact_us":
        $form_desc = "Central Landing Page";
        $name = $fields_in['name'];
        $choice = $fields_in['option_select'];
        $phone = $fields_in['phone'];
        $email = $fields_in['email'];
        $name_prts = explode(" ", $name);
if (count($name_prts) > 1) {
    $firstname = $name_prts[0];
} else {
    $firstname = $name;
}
    $message = "Hi " . $firstname . "<br/>Thank you for sending us an inquiry. This is just to let you know we have received the following: <br/><br/><em>" . str_replace(array("'","\"",),"",$fields_in['message']) . "</em><br/><br/>We will be in touch soon,<br/><br/>Regards<br/><br/>The Event Workforce Group Team";
        break;
    case "new_talent":
        $form_desc = "New Talent Page";
        $name = $fields_in['name'];
        $email_message = "<br/><b>Question 1: </b>";
        foreach($_SESSION['question_1'] as $q1) {
        	$email_message = $email_message.$q1.",";
        }
        $email_message = substr($email_message,0,-1)."<br/>";
        $email_message = $email_message."<b>Company</b>: {$fields_in['company']}<br/>";
        $phone = $fields_in['phone'];
        $company = $fields_in['company'];
        $email = $fields_in['email'];
    	$street_numer = $fields_in['street_number'];
        $route = $fields_in['route'];
        $position = $fields_in['position'];
        $locality = $fields_in['locality'];
        $postcode = $fields_in['postal_code'];
        $address_in = $fields_in['address'];
        $state = $fields_in['administrative_area_level_1'];
        $country = $fields_in['country'];
        $password = $fields_in['password'];
        
        $send = json_encode(array("client_name"=>$company,"email"=>$email,"phone"=>$phone,"contact"=>$name,"address"=>$street_numer." ".$route,"city"=>$locality,"region"=>$state,"country"=>$country,"postcode"=>$postcode,"password"=>$password));
        
        $postdata = http_build_query(
    array(
        'r' => $send
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$subject = "Welcome to EWG Talent";

$context  = stream_context_create($opts);

$result = file_get_contents('https://rosterfy.co/api/create_client', false, $context);
        
        $name_prts = explode(" ", $name);
if (count($name_prts) > 1) {
    $firstname = $name_prts[0];
} else {
    $firstname = $name;
}
    $message = "<p>Hi " . $firstname . "</p><p>Thanks for registering, you're now a step closer to gaining access to our motivated and determined staff that will be sure to make your next event a huge success.</p><p>If you have any questions please don't hesitate to give our team a call on (03) 8362 5040, we are here to help :)</p><p>To get you started, simply log in to your portal <a href='https://ew.rosterfy.co/client_login'>HERE</a></p><p>The team at EWG Talent.</p>";
        break;
}


// $email = $_POST['e'];
$var_in = $email_message.print_r($fields_in,true);
$admin_to = "front_end@eventworkforcegroup.com";
    
    sendRosterfyEmail(array("to" => $email, "id" => "-1"), $name, $subject, $subject, $message, '0',$template);
    sendRosterfyEmail(array("to" =>$admin_to, "id" => "-1"), $name, "Comment From Website", 'Comment From Website', "From: " . $name . "<br/>" . "Email: " . $email . "<br/>Phone: " . $phone . "<br/>Regarding: {$var_in}", '0',$template);
echo json_encode($result);
