<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'codes' => [
        'success' => [
            'code' => "1",
            'message' => 'Success'
        ],
        'unprocessableEntity' => [
            'code' => "422",
            'message' => 'validationError'
        ],
        'alreadyExist' => [
            'code' => "11",
            'message' => 'Username, gsm or email already exist'
        ],
        'missingParameters' => [
            'code' => "12",
            'message' => 'Missing required parameters'
        ],
        'userNotFound' => [
            'code' => "13",
            'message' => 'User not found'
        ],
        'codeNotValid' => [
            'code' => "14",
            'message' => 'Code not valid'
        ],
        'accountNotActive' => [
            'code' => "15",
            'message' => 'Account not active'
        ],
        'objectNotFound' => [
            'code' => "16",
            'message' => 'Object not found'
        ],
        'operationNotPermitted' => [
            'code' => "17",
            'message' => 'Operation not permitted'
        ],
        'profileNotCompleted' => [
            'code' => "18",
            'message' => 'Profile not completed'
        ],
        'paymentNotCompleted' => [
            'code' => "19",
            'message' => 'Payment Not Completed'
        ],
        'gsmNotMatch' => [
            'code' => "20",
            'message' => 'GSM must be in Saudi Arabia'
        ],
        'relationAlreadyExist' => [
            'code' => "21",
            'message' => 'Relation is already exists'
        ],
        'channelError' => [
            'code' => "22",
            'message' => 'Error creating channel'
        ],
        'alreadyRated' => [
            'code' => "23",
            'message' => 'You already rated this item'
        ],
        'privateAccount' => [
            'code' => "24",
            'message' => 'This account is private'
        ],
        'fileNotValid' => [
            'code' => "25",
            'message' => 'File not valid'
        ],
        'notAuthorized' => [
            'code' => "26",
            'message' => 'You\'re not authorized to do this action'
        ],
        'DateReserverd' => [
            'code' => "27",
            'message' => 'This Date Is Already Reserved'
        ],

        //HTTP Errors
        'unauthorized' => [
            'code' => "401",
            'message' => 'Unauthorized'
        ],
        'methodNotAllowed' => [
            'code' => "405",
            'message' => 'Method Not Allowed'
        ],
        'badRequest' => [
            'code' => "400",
            'message' => 'Bad request'
        ],
        'forbidden' => [
            'code' => "403",
            'message' => 'Forbidden'
        ],
        'resourceNotFound' => [
            'code' => "404",
            'message' => 'Resource Not Found'
        ],
        'objectCreated' => [
            'code' => "201",
            'message' => 'Object Created'
        ],
        'noContent' => [
            'code' => "204",
            'message' => 'No Content'
        ],
        'partialContent' => [
            'code' => "206",
            'message' => 'Partial Content'
        ]
    ],

];
