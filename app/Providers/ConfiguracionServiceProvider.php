<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Configuracion;
use Illuminate\Support\Facades\Schema;

class ConfiguracionServiceProvider extends ServiceProvider
{
    public static $configuraciones = [];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('configuraciones')) {
            self::$configuraciones = Configuracion::all()->pluck('valor', 'variable')->toArray();
        }
    }

    public static function get($key)
    {
        return self::$configuraciones[$key] ?? null;
    }
}
