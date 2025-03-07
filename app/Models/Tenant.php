<?php

namespace App\Models;

use App\Observers\TenantObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Stancl\Tenancy\Database\Concerns\CentralConnection;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

#[ObservedBy(TenantObserver::class)]
class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains, CentralConnection;

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'name',
        ];
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

}
