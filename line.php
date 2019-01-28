 <?php
  

function send_LINE($msg){
 $access_token = '4IYIQ+rbApF9bRIi1PmfbaG2Tp901+T+9Qh7UsVxsp5cQ/8Hd+RYYn+5UV8y+JEdqUWQRVm+eOqGUYV4xhlw27sjRB42NEfVgZc/UQ6kSQf9PD7ooCQqDV2EI3vTdr8JhyHjpv82/4sTwi93m/ygoQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U857cece0f471d189abad6aae7bdacd9f',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
