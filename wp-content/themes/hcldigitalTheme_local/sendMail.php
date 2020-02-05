<?php
echo "hai";
print_r($_REQUEST);

if (!empty($_POST)) {
    echo "coming inside";
    $email = $_REQUEST['ninja_forms_field_17'];
    //$email = $_REQUEST['ninja_forms_field_6'];  
    echo "email--- ". $email. " ".strlen($email); 
   if(strlen($email) > 0) {
    // $myObj->Body = "Thanks for Registering";
    // $myObj->to = $email;
    // $myObj->Subject = "Hackathon Registration";
    $myJSON = array(
        'Body' => 'Thanks for Registering',
        'to' => $email,
        'Subject'=> "Hackathon Registration"
    );
    //$myJSON = json_encode($myObj);
    echo "my Json--- ".$myJSON;
     //$obj = {"Body":"Thanks for Registering","to":$email,"Subject":"Hackathon Registration"};
    $url = "https://prod-60.eastus.logic.azure.com:443/workflows/12012ec9a7ec42b48f17c6d295ddc261/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=LUiEBqiOomCZ-9afNdm1OXEhtuDZdKnwGrGa73I3LEA";
    $output = httpPost($url, $myJSON);
    echo $output;
   }
   
}

function httpPost($url, $data)
{
     echo "coming inside function";
//     $curl = curl_init($url);
//     curl_setopt($curl, CURLOPT_POST, true);
//     curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($curl);
//     curl_close($curl);
//     echo "-----------------------";
//     print_r($response);
//     return $response;
// }



// // use key 'http' even if you send the request to https://...
// $options = array(
//     'http' => array(
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($data)
//     )
// );
// $context  = stream_context_create($options);
// $result = file_get_contents($url, false, $context);
// if ($result === FALSE) { /* Handle error */ }

// var_dump($result);

// $response = wp_remote_post( $url, array('body' => $data));

// if ( is_wp_error( $response ) ) {
//     echo "fail";
//     // $response->get_error_message()
// } else {
//     echo "success";
//     // $response['body']
// }

// $r = new HttpRequest($url, HttpRequest::METH_POST);
//    // $r->setOptions(array('cookies' => array('lang' => 'de')));
//     $r->addPostFields($data);

//     try {
//         echo $r->send()->getBody();
//     } catch (HttpException $ex) {
//         echo $ex;
//     }

//     echo file_get_contents($url, false, stream_context_create([
//         'http' => [
//             'method' => 'POST',
//             'header'  => "Content-type: application/x-www-form-urlencoded",
//             'content' => http_build_query($data)
//         ]
//     ]));

//Initiate cURL.

$ch = curl_init($url);
 
//The JSON data.

 
//Encode the array into JSON.
$jsonDataEncoded = json_encode($data);
 
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
 
//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
 
//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
 
//Execute the request
$result = curl_exec($ch);
}
?>