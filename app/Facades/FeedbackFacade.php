<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class FeedbackFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'feedback';
    }
}
