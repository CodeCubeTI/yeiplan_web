<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaymentsController extends Controller
{
    private static $CONNECTION_ESTABLISHED_HEADERS = array(
        "HTTP/1.0 200 Connection established\r\n\r\n",
        "HTTP/1.1 200 Connection established\r\n\r\n",
    );
    public function comproPago($price, $service_name){
    $auth= env('COMPROPAGO_KEY');
    $URL = 'https://api.compropago.com/v1/charges';
    $data = array(
        "order_price" => $price,
        "order_name" => $service_name,
        "customer_name" => "Username",
        "customer_email" => "email@prueba.com",
        "payment_type" => "OXXO"
    );
    $headers = array(
        'Content-Type: application/json'
    );
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $URL);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curl, CURLOPT_USERAGENT, 'compropago-php-sdk/1.1.1');
    curl_setopt($curl, CURLOPT_USERPWD, $auth);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    $response = curl_exec($curl);
    $headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    list($responseHeaders, $responseBody) = $this->parseHttpResponse($response, $headerSize);
    $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    $objResponse = json_decode($responseBody, true);
    $date = date('Y-m-d');
    $view =  \View::make('compropago.pdf', compact('date', 'objResponse'))->render();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    return $pdf->stream('nota');

}

    public function parseHttpResponse($respData, $headerSize)
{
    // check proxy header
    foreach (self::$CONNECTION_ESTABLISHED_HEADERS as $established_header) {
        if (stripos($respData, $established_header) !== false) {

            $respData = str_ireplace($established_header, '', $respData);

            if (!$this->needsQuirk()) {
                $headerSize -= strlen($established_header);
            }
            break;
        }
    }
    if ($headerSize) {
        $responseBody = substr($respData, $headerSize);
        $responseHeaders = substr($respData, 0, $headerSize);
    } else {
        $responseSegments = explode("\r\n\r\n", $respData, 2);
        $responseHeaders = $responseSegments[0];
        $responseBody = isset($responseSegments[1]) ? $responseSegments[1] :
            null;
    }
    return array($responseHeaders, $responseBody);
}
}
