<?php
$url = "dev-process.sendinblue.com/process/startsubprocess/server_id/1000470/message_id/";
for($i=4964;$i<5060;$i++)
{
$curl = $url.$i;
print '<br>started: '.$curl.'<br><pre>';
$ch = curl_init($curl);                                                                      
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
$result = curl_exec($ch);
curl_close($ch);
print_r($result);
print '<br>executed: '.$curl.'<br></pre>';
}
    
?>
