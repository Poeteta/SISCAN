<?php

namespace Carbon\Laravel;

use Carbon\Carbon;
use Illuminate\Events\EventDispatcher;
use Symfony\Component\Translation\Translator;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $service = $this;
<<<<<<< HEAD
        /** @var EventDispatcher $events */
        $events = $this->app['events'];
        $events->listen(version_compare(\App::version(), '5.5') >= 0 ? 'Illuminate\Foundation\Events\LocaleUpdated' : 'locale.changed', function () use ($service) {
            $service->updateLocale();
        });
        $service->updateLocale();
=======
        if (($events = $this->app['events']) instanceof EventDispatcher) {
            $events->listen(version_compare($this->app->version(), '5.5') >= 0 ? 'Illuminate\Foundation\Events\LocaleUpdated' : 'locale.changed', function () use ($service) {
                $service->updateLocale();
            });
            $service->updateLocale();
        }
>>>>>>> 3eac928c67e11a3a5f38a5e0c7e24a9f55aff603
    }

    public function updateLocale()
    {
<<<<<<< HEAD
        /** @var Translator $translator */
        $translator = $this->app['translator'];
        $locale = $translator->getLocale();
        Carbon::setLocale($locale);
=======
        if (($translator = $this->app['translator']) instanceof Translator) {
            Carbon::setLocale($translator->getLocale());
        }
>>>>>>> 3eac928c67e11a3a5f38a5e0c7e24a9f55aff603
    }
}
