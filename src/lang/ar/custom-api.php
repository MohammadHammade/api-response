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
            'message' => 'نجاح'
        ],
        'unprocessableEntity' => [
            'code' => "422",
            'message' => 'خطأ في البيانات المرسلة'
        ],
        'alreadyExistEmail' => [
            'code' => "11",
            'message' => 'البريد الالكتروني مستعمل سابقاً'
        ],
        'alreadyExistPhone' => [
            'code' => "20",
            'message' => 'رقم الموبايل مستعمل سابقاً'
        ],
        'missingParameters' => [
            'code' => "12",
            'message' => 'حقل مطلوب ناقص'
        ],
        'userNotFound' => [
            'code' => "13",
            'message' => 'لم يتم إيجاد المستخدم'
        ],
        'codeNotValid' => [
            'code' => "14",
            'message' => 'الرمز غير صالح'
        ],
        'accountNotActive' => [
            'code' => "15",
            'message' => 'الحساب غير فعال'
        ],
        'objectNotFound' => [
            'code' => "16",
            'message' => 'لم يتم إيجاد العنصر'
        ],
        'operationNotPermitted' => [
            'code' => "17",
            'message' => 'عملية غير مسموحة'
        ],
        'profileNotCompleted' => [
            'code' => "18",
            'message' => 'حساب غير مكتمل'
        ],
        'paymentNotCompleted' => [
            'code' => "19",
            'message' => 'دفعة غير مكتملة'
        ],
        'relationAlreadyExist' => [
            'code' => "21",
            'message' => 'Relation is already exists'
        ],
        'alreadyRated' => [
            'code' => "23",
            'message' => 'You already rated this item'
        ],
        'privateAccount' => [
            'code' => "24",
            'message' => 'الحساب خاص'
        ],
        'fileNotValid' => [
            'code' => "25",
            'message' => 'الملف غير صالح'
        ],
        'notAuthorized' => [
            'code' => "26",
            'message' => 'You\'re not authorized to do this action'
        ],
        'DateReserverd' => [
            'code' => "27",
            'message' => 'هذا التاريخ محجوز مسبقاً'
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
