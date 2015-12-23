<?php
require_once('/TwilioLib/Twilio.php');
$account_sid = $_POST['accountsid'];
$auth_token = $_POST['authtoken'];
$client = new Services_Twilio($account_sid, $auth_token);

$number = $client->account->incoming_phone_numbers->getIterator(0,1000);
foreach($number as $num)
{
$numbers = $num->sid;
$client->account->incoming_phone_numbers->delete($numbers);
echo $numbers . ' deleted.';
echo '</br>';
}
?>
