<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Config\Services;

class AuthFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();
        $token = $session->get('token'); // First check session

        // If no session token, check Authorization header
        if (!$token) {
            $authHeader = $request->getHeaderLine('Authorization');
            if (!$authHeader) {
                return redirect()->to('/auth/login')->with('error', 'Please login first.');
            }

            $authParts = explode(' ', $authHeader, 2);
            if (count($authParts) !== 2 || strtolower($authParts[0]) !== 'bearer') {
                return Services::response()->setStatusCode(401, 'Invalid Authorization Header');
            }

            $token = $authParts[1];
        }

        try {
            $key = getenv('JWT_SECRET');
            $decoded = JWT::decode($token, new Key($key, 'HS256'));

            // Store user in session
            $session->set('user', (array) $decoded);

        } catch (\Exception $e) {
            return redirect()->to('/auth/login')->with('error', 'Session expired. Please login again.');
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return ResponseInterface|void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
