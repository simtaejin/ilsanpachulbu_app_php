<?php

if (!function_exists('api_response')) {
    function api_response(bool $success, $data = null, string $message = '', int $statusCode = 200)
    {
        $messages = config('api_messages');
        $messageParts = explode('.', $message);
        $messageValue = $messages[$success ? 'success' : 'error'];

        foreach ($messageParts as $part) {
            if (isset($messageValue[$part])) {
                $messageValue = $messageValue[$part];
            } else {
                $messageValue = $success ? '성공' : '오류';
                break;
            }
        }

        return response()->json([
            'success' => $success,
            'message' => $messageValue,
            'data' => $data,
        ], $statusCode);
    }
}
