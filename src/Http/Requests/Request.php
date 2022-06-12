<?php

namespace JoeriAbbo\Boilerplate\Http\Requests;

use JoeriAbbo\Boilerplate\Helper\ResponseUtil;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\UnauthorizedException;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class APIRequest
 * @package App\Generator\Request
 */
class Request extends FormRequest
{
    /**
     * Get the proper failed validation response for the request.
     *
     * @param array $errors
     *
     * @param int $status
     * @return Response
     */
    public function response(array $errors, $status = 400)
    {
        $messages = collect($errors)->flatten()->join(' ');
        return response()->json(ResponseUtil::makeError($messages), $status);
    }

    /**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws UnauthorizedException
     */
    protected function failedAuthorization()
    {
        abort(403, 'Unauthorized action.');
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();
        throw new HttpResponseException($this->response($errors));
    }
}
