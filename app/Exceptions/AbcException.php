<?php

namespace App\Exceptions;

use Exception;

class AbcException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        \Log::info('Reporting AbcException');
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        // return response(...);
        return 'Hey, I am an AbcException from xyz!';
        // return false;
    }
}
