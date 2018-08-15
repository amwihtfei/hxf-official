<?php

    namespace hxf\official\Facades;

    use Illuminate\Support\Facades\Facade;

    class official extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'official';
        }
    }
