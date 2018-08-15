<?php

    namespace hxf\official;

    use Illuminate\Support\ServiceProvider;

    class OfficialServiceProvider extends ServiceProvider
    {
        /**
         * Bootstrap services.
         *
         * @return void
         */
        public function boot()
        {
            $this->loadViewsFrom(__DIR__ . '/views', 'official');
            $this->publishes([
                __DIR__ . '/views'               => base_path('resources/views'),
                __DIR__ . '/config/official.php' => config_path('official.php'),
            ]);
        }

        /**
         * Register services.
         *
         * @return void
         */
        public function register()
        {
            //
        }
    }
