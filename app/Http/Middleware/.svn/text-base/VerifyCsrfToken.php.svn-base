<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
		'/wechat',
		'system/index/getMenu',
        '/api/demo',
        '/api/register',
        '/api/getUserRank',
        '/api/taskSign',
        '/api/gettaskSigndate',
        '/api/getUserIntegral',
        '/api/userDetail',
        '/getGifts',
        '/giftTrade',
        '/getIntegralRecord',
        '/getExchangeRecord',
        '/api/getMemberRank',
        '/api/shareMessage',
        '/api/getSignPackage',
        '/uploadThumbUp',
        '/getDoctor',
        '/api/uploadSuggest',
        '/api/getQrCode',
        '/api/plastic',
        '/uploadUserInfo',
        '/uploadZMD',
        '/api/appointment',
        '/api/cancelappointment',
        '/api/appointmentdoctor'
    ];
}
