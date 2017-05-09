<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 01.05.2017
 * Time: 17:59
 */

namespace app\Http\Middleware;


use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Closure;

class LocaleCarbon
{

    public function handle($request, Closure $next)
    {
        Carbon::setLocale(config('app.locale'));
        setlocale(LC_TIME, "ru_RU");

        return $next($request);
    }

}