<?php

namespace JoeriAbbo\Boilerplate\Http\Controllers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Routing\Controller as BaseController;
use JoeriAbbo\Boilerplate\Helper\ResponseUtil;

class Controller extends BaseController
{
    /**
     * @param array $result
     * @param string $message
     * @return mixed
     * @throws BindingResolutionException
     */
    public function sendResponse(array $result, string $message)
    {
        return response()->make(ResponseUtil::makeResponse($message, $result));
    }

    /**
     * @param string $error
     * @param int $code
     * @return mixed
     * @throws BindingResolutionException
     */
    public function sendError(string $error, int $code = 404)
    {
        return response()->make(ResponseUtil::makeError($error), $code);
    }
}
