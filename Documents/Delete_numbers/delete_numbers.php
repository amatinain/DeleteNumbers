<?php
require_once('/Twilio.php');

$account_sid = 'AC57b9409c70ce7d5280253e6dc03292e1';
$auth_token = '3f82c768a0f5ff34fdfe4bee1629bfa2';
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
