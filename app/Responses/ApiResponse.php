<?php

namespace App\Responses;

use App\Constants\HttpStatus;

class ApiResponse
{
    public static function success($data = null, string $message = '', int $statusCode = HttpStatus::OK)
    {
        return api_response(true, $data, $message, $statusCode);
    }

    public static function error($message = '', $data = null, int $statusCode = HttpStatus::SERVER_ERROR)
    {
        return api_response(false, $data, $message, $statusCode);
    }

    public static function validationError($errors)
    {
        return api_response(false, $errors, 'validation.default', HttpStatus::VALIDATION_ERROR);
    }

    public static function notFound($message = 'not_found')
    {
        return api_response(false, null, $message, HttpStatus::NOT_FOUND);
    }

    public static function unauthorized($message = 'auth.unauthorized')
    {
        return api_response(false, null, $message, HttpStatus::UNAUTHORIZED);
    }

    public static function forbidden($message = 'auth.forbidden')
    {
        return api_response(false, null, $message, HttpStatus::FORBIDDEN);
    }

    public static function noContent($message = '')
    {
        return api_response(true, null, $message, HttpStatus::NO_CONTENT);
    }

    public static function created($data = null, $message = '')
    {
        return api_response(true, $data, $message, HttpStatus::CREATED);
    }
}
