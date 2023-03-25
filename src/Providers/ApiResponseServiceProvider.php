<?php

namespace Mohammadhammade\ApiResponse\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\ResponseFactory;

class ApiResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(ResponseFactory $factory)
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'api-response');
        $this->publishes([
            __DIR__ . '/../lang/en/custom-api.php' => $this->app->langPath('vendor/api-response/en/custom-api.php'),
            __DIR__ . '/../lang/ar/custom-api.php' => $this->app->langPath('vendor/api-response/ar/custom-api.php')
        ], 'api-lang');
        
        $factory->macro('success', function ($data = null) use ($factory) {
            if ($data == NULL)
                $data = collect();

            $format = [
                'code' => __('api-response::custom-api.codes.success.code'),
                'message' => __('api-response::custom-api.codes.success.message'),
                'data' => $data,
            ];

            return $factory->make($format);
        });

        $factory->macro('error', function ($code, $data = null) use ($factory) {
            if ($data == NULL)
                $data = collect();
            $format = [
                'code' => __('api-response::custom-api.codes.' . $code . '.code'),
                'message' => __('api-response::custom-api.codes.' . $code . '.message'),
                'data' => (object) $data,
            ];

            return $factory->make($format);
        });

        $factory->macro('customError', function ($code, $message) use ($factory) {
            $format = [
                'code' => $code,
                'message' => ucwords($message),
                'data' => null,
            ];

            return $factory->make($format);
        });

        $factory->macro('httpError', function ($code) use ($factory) {
            $format = [
                'code' => __('api-response::custom-api.codes.' . $code . '.code'),
                'message' => __('api-response::custom-api.codes.' . $code . '.message'),
                'data' => null,
            ];

            return $factory->make($format, __('api-response::custom-api.codes.' . $code . '.code') );
        });

        $factory->macro('datatables', function ($data) use ($factory) {
            if ($data == NULL)
                $data = collect();
            return $factory->make($data);
        });
    }
}
