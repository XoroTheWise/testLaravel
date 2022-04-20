<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/api/books',
        '/api/books/*',
        '/api/book-update/*',
        '/api/book-delete/*',
        '/api/authors',
        '/api/authors/*',
        '/api/author-update/*',
    ];
}
