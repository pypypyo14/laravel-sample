<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //CSRF対策不要な場合はここにフォームの存在するパスを指定する(ワイルドカード可)
        //アプリケーション全体でOFFにするときはkernek.phpからこのミドルウェア自身を削除
    ];
}
