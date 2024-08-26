<?php
namespace Demo\App\Assignments;

use Exception;

class HttpClient
{
    /**
     * Makes a GET request to the given URL.
     *
     * @param string $url The URL to make the request to.
     * @return string The response body.
     * @throws Exception If the request fails or returns an error.
     */
    public function get(string $url)
    {
        // Initialize cURL session
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);  // Timeout after 10 seconds


        // Execute the request and get the response
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            throw new Exception('Request Error: ' . curl_error($ch));
        }

        // Get the HTTP status code
        $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        // Close cURL session
        curl_close($ch);

        // Handle non-200 status codes
        if ($httpStatusCode !== 200) {
            throw new Exception('Unexpected HTTP Status Code: ' . $httpStatusCode);
        }

        // Return the response body
        return $response;
    }
}