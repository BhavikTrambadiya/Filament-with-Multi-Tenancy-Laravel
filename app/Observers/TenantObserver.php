<?php

namespace App\Observers;

use App\Models\Tenant;
use Illuminate\Support\Facades\Artisan;

class TenantObserver
{

    public function creating(Tenant $tenant)
    {
    }

    public function created(Tenant $tenant): void
    {
        $tenant->domains()->create([
            'domain' => $tenant->name . '.' . config('tenancy.central_domains')[2] ?? 'localhost',
        ]);
        $tenant->members()->attach(auth()->id());
        Artisan::call('app:update-host-file');
    }

    public function updated(Tenant $tenant): void
    {
        $new_domain = $tenant->name;
        $old_domain = $tenant->getOriginal('name');
        $tenant->domains()->where('domain', $old_domain . '.' . config('tenancy.central_domains')[2] ?? 'localhost')->update([
            'domain' => $new_domain . '.' . config('tenancy.central_domains')[2] ?? 'localhost',
        ]);
        Artisan::call('app:update-host-file');
    }

    public function deleted(Tenant $tenant): void
    {
        $tenant->domains()->delete();
        Artisan::call('app:update-host-file');
    }
}
