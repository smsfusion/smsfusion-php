<?php
/**
 * SMSApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SMS Fusion API
 *
 * This is the SMS Fusion API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@smsfusion.com.au
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * SMSApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SMSApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return SMSApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation sendSMS
     *
     * Send an SMS
     *
     * @param string $key API Key as generated from the &lt;a href&#x3D;&#39;https://www.smsfusion.com.au/admin/api/&#39;&gt;admin panel&lt;/a&gt; (required)
     * @param string[] $num Comma separated list of phone numbers or &lt;a href&#x3D;&#39;https://www.smsfusion.com.au/help/msisdn/&#39;&gt;MSDISDN&lt;/a&gt;&#39;s (required)
     * @param string $msg Message content to send (required)
     * @param string $from MSISDN or vanity alphanumeric source number (optional)
     * @param string $deliverby UTC encoded time to send the SMS (optional)
     * @param string $dlrcb HTTP or HTTPS callback URL for delivery reports. Timeout for callbacks is set to 30 seconds (optional)
     * @param string $replycb HTTP or HTTPS callback URL for replies. Timeout for callbacks is set to 30 seconds (optional)
     * @param string $replyemail Email address to send replies to (optional)
     * @param int $validity Time in minutes to keep the SMS valid for (optional)
     * @param string $cc 2 character country code &lt;a href&#x3D;&#39;https://en.wikipedia.org/wiki/ISO_3166-2&#39;&gt;ISO 3166-2&lt;/a&gt; for formatting local numbers internationally (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SMSResult
     */
    public function sendSMS($key, $num, $msg, $from = null, $deliverby = null, $dlrcb = null, $replycb = null, $replyemail = null, $validity = null, $cc = null)
    {
        list($response) = $this->sendSMSWithHttpInfo($key, $num, $msg, $from, $deliverby, $dlrcb, $replycb, $replyemail, $validity, $cc);
        return $response;
    }

    /**
     * Operation sendSMSWithHttpInfo
     *
     * Send an SMS
     *
     * @param string $key API Key as generated from the &lt;a href&#x3D;&#39;https://www.smsfusion.com.au/admin/api/&#39;&gt;admin panel&lt;/a&gt; (required)
     * @param string[] $num Comma separated list of phone numbers or &lt;a href&#x3D;&#39;https://www.smsfusion.com.au/help/msisdn/&#39;&gt;MSDISDN&lt;/a&gt;&#39;s (required)
     * @param string $msg Message content to send (required)
     * @param string $from MSISDN or vanity alphanumeric source number (optional)
     * @param string $deliverby UTC encoded time to send the SMS (optional)
     * @param string $dlrcb HTTP or HTTPS callback URL for delivery reports. Timeout for callbacks is set to 30 seconds (optional)
     * @param string $replycb HTTP or HTTPS callback URL for replies. Timeout for callbacks is set to 30 seconds (optional)
     * @param string $replyemail Email address to send replies to (optional)
     * @param int $validity Time in minutes to keep the SMS valid for (optional)
     * @param string $cc 2 character country code &lt;a href&#x3D;&#39;https://en.wikipedia.org/wiki/ISO_3166-2&#39;&gt;ISO 3166-2&lt;/a&gt; for formatting local numbers internationally (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SMSResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendSMSWithHttpInfo($key, $num, $msg, $from = null, $deliverby = null, $dlrcb = null, $replycb = null, $replyemail = null, $validity = null, $cc = null)
    {
        // verify the required parameter 'key' is set
        if ($key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $key when calling sendSMS');
        }
        // verify the required parameter 'num' is set
        if ($num === null) {
            throw new \InvalidArgumentException('Missing the required parameter $num when calling sendSMS');
        }
        // verify the required parameter 'msg' is set
        if ($msg === null) {
            throw new \InvalidArgumentException('Missing the required parameter $msg when calling sendSMS');
        }
        // parse inputs
        $resourcePath = "/sms/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($key !== null) {
            $queryParams['key'] = $this->apiClient->getSerializer()->toQueryValue($key);
        }
        // query params
        if (is_array($num)) {
            $num = $this->apiClient->getSerializer()->serializeCollection($num, 'csv', true);
        }
        if ($num !== null) {
            $queryParams['num'] = $this->apiClient->getSerializer()->toQueryValue($num);
        }
        // query params
        if ($msg !== null) {
            $queryParams['msg'] = $this->apiClient->getSerializer()->toQueryValue($msg);
        }
        // query params
        if ($from !== null) {
            $queryParams['from'] = $this->apiClient->getSerializer()->toQueryValue($from);
        }
        // query params
        if ($deliverby !== null) {
            $queryParams['deliverby'] = $this->apiClient->getSerializer()->toQueryValue($deliverby);
        }
        // query params
        if ($dlrcb !== null) {
            $queryParams['dlrcb'] = $this->apiClient->getSerializer()->toQueryValue($dlrcb);
        }
        // query params
        if ($replycb !== null) {
            $queryParams['replycb'] = $this->apiClient->getSerializer()->toQueryValue($replycb);
        }
        // query params
        if ($replyemail !== null) {
            $queryParams['replyemail'] = $this->apiClient->getSerializer()->toQueryValue($replyemail);
        }
        // query params
        if ($validity !== null) {
            $queryParams['validity'] = $this->apiClient->getSerializer()->toQueryValue($validity);
        }
        // query params
        if ($cc !== null) {
            $queryParams['cc'] = $this->apiClient->getSerializer()->toQueryValue($cc);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\SMSResult',
                '/sms/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SMSResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SMSResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\HLRError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\OutOfCredit', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
