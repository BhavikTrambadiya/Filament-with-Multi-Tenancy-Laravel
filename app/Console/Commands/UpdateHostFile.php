<?php

namespace App\Console\Commands;

use App\Models\Tenant;
use Illuminate\Console\Command;

class UpdateHostFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-host-file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Windows hosts file with subdomains from the tenants table';

    private $hostsFile = 'C:\Windows\System32\drivers\etc\hosts'; // Windows hosts file path
    private $baseDomain = '';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->baseDomain = config('tenancy.central_domains', [])[2] ?? '';
        if (!$this->isRunningAsAdmin()) {
            $this->error('You need to run this command as Administrator.');
            return;
        }

        // Fetch all tenant domains from the database
        $tenants = Tenant::pluck('name')->toArray();

        // Read the current hosts file content
        $hostsContent = \File::get($this->hostsFile);

        // Prepare new entries
        $entriesToAdd = [];
        foreach ($tenants as $domain) {
            $entry = "127.0.0.1   {$domain}.{$this->baseDomain}";
            if (!str_contains($hostsContent, $entry)) {
                $entriesToAdd[] = $entry;
            }
        }

        // Append new entries if needed
        if (!empty($entriesToAdd)) {
            \File::append($this->hostsFile, PHP_EOL . implode(PHP_EOL, $entriesToAdd) . PHP_EOL);
            $this->info('Hosts file updated successfully!');
        } else {
            $this->info('No new entries were added. Everything is up to date.');
        }
    }

    private function isRunningAsAdmin(): bool
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $output = [];
            exec('NET SESSION', $output, $status);
            return $status === 0;
        }
        return true;
    }
}
