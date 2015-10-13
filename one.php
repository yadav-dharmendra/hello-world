<?php
$url = "http://dev-process.sendinblue.com/process/startsubprocess/server_id/1000470/message_id/";
for($i=5064;$i<5074;$i++)
{
$curl = $url.$i;
print 'started: '.$curl.'<pre>';
$ch = curl_init($curl);                                                                      
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_TIMEOUT, 1);
$result = curl_exec($ch);
if($result){
print_r($result);
}else{
	print 'Nothing';
}			
curl_close($ch);

print 'executed: '.$curl.'</pre>';
}
    
?>
