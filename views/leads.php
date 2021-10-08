<?php
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ip = get_client_ip();
// var_dump($ip);die;
$curl = curl_init();
         curl_setopt_array($curl, array(
             CURLOPT_URL => "https://ipinfo.io/$ip?token=0c5a7cdd87fd8e",
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => "",
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 30,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => "GET",
             CURLOPT_HTTPHEADER => array(
                 'Content-Type: application/json',
             ),
         ));
         
         $responseip = curl_exec($curl);
         
        //  $data = json_decode($responseip);
        //  var_dump($data);die;

$websiteDomain = "www.thewebfounders.co.uk";
$domain = "https://www.thewebfounders.co.uk";
// $websiteDomain = "127.0.0.1:8000";
// $domain = "http://127.0.0.1:8000";

if(!isset($_SERVER['HTTP_ORIGIN']) || !isset($_SERVER['HTTP_REFERER'])){        
    var_dump('1');die;
    $data=implode(",",$_REQUEST);
    $fp = fopen("leadsp.php", 'a');
    fwrite($fp, $data);
    fclose($fp);
   
    header("Location: " .$domain);  

}

//     function contains($haystack, $needle, $caseSensitive = false) {
//     return $caseSensitive ?
//             (strpos($haystack, $needle) === FALSE ? FALSE : TRUE):
//             (stripos($haystack, $needle) === FALSE ? FALSE : TRUE);
// }


// if (contains($_SERVER['HTTP_ORIGIN'], $domain)==false  && contains($_SERVER['HTTP_REFERER'], $domain)==false  ) {
//     var_dump('2');die;
               

//         $data=implode(",",$_REQUEST);
//         $fp = fopen("leadsp.php", 'a');
//         fwrite($fp, $data);
//         fclose($fp);
//         header("Location: ".$domain);

// }else{

//         $data=implode(",",$_REQUEST);
//         $fp = fopen("leadss.php", 'a');
//         fwrite($fp, $data);
//         fclose($fp);

// }



// $domain = "www.thewebfounders.co.uk";
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$brief = $_REQUEST['brief'];
$news = $_REQUEST['news'];
$route = $_REQUEST['route'];
$brand = $_REQUEST['brand'];
$tag = $_REQUEST['tag'];
$price = $_REQUEST['price'];

$data=array(
    'name'=> $name,
    'email'=>$email,
    'phone'=>$phone,
    'brief'=>$brief,
    'news'=>$news,
    'route'=>$route,
    'brand'=>$brand,
    'tag' => $responseip,
    'price'=> $price,
    'domain' => $websiteDomain
);
$payload=json_encode($data);
if (!empty($_POST['token'])) {
    // var_dump('das');die;
    // if (hash_equals($_SESSION['token'], $_POST['token'])) {
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://dashboard.ghostwritingfounder.com/api/customer",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$decodeResponse = json_decode($response);
// $msg = $decodeResponse[1];

$msg = $decodeResponse[1];
$status=1;
// $_SESSION['thanksMsg'] = $msg;

header("location:/thank-you/?successMsg=$msg&status=$status");
// }else {
//     exit(header("location:$domain"));
// }
}else{
    exit(header("location:$domain"));
}