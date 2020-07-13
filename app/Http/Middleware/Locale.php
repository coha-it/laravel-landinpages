<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class Locale {

  protected $locales;
  const SESSION_KEY = 'locale';

  public function __construct()
  {
    $this->locales = config('app.locales');
  }

  public function handle(Request $request, Closure $next) {
    /**
     * @var Session $session
     * */
    $session = $request->session();

    if (!$session->has(self::SESSION_KEY))
    {
        $session->put(
          self::SESSION_KEY,
          $request->getPreferredLanguage($this->locales)
        );
    }

    if ($request->has('lang'))
    {
      $lang = $request->get('lang');
      if (in_array($lang, $this->locales))
      {
        $session->put(self::SESSION_KEY, $lang);
      }
    }

    app()->setLocale($session->get(self::SESSION_KEY));

    // Check Locale
    // echo "locale ".$session->get('locale');

    return $next($request);
  }
}
