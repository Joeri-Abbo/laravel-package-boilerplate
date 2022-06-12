<?php

namespace JoeriAbbo\Boilerplate\Helper;

class ResponseUtil
{
    /**
     * @param string $message
     * @param mixed $data
     * @param array $pagination
     * @return array
     */
    public static function makeResponse(string $message, $data, $pagination = []): array
    {
        $result = [
            'success' => true,
            'message' => $message,
            'data' => $data,
        ];

        if (empty($pagination)) {
            return $result;
        }

        return array_merge($result, [
            'pagination' => $pagination
        ]);
    }

    /**
     * @param string $message
     * @param array $data
     * @return array
     */
    public static function makeError(string $message, array $data = []): array
    {
        $res = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}
