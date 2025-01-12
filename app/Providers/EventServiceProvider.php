<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        // Ketika pengguna baru mendaftar, kirim email selamat datang
        'App\Events\UserRegistered' => [
            'App\Listeners\SendWelcomeEmail',
        ],

        // Ketika order selesai, kirim notifikasi ke admin
        'App\Events\OrderCompleted' => [
            'App\Listeners\NotifyAdmin',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // Aktifkan penemuan event secara otomatis (opsional)
        $this->discoverEvents();
    }
}