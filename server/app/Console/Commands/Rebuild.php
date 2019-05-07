<?php

namespace App\Console\Commands;

use App\Concerns\DropsAllTables;
use Illuminate\Console\Command;

/**
 * Rebuild Console Command class.
 *
 * @author Ryan Hein <me@ryanhein.com>
 */
class Rebuild extends Command
{
    use DropsAllTables;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:rebuild {--seeder=DatabaseSeeder}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Quickly rebuild application state while developing.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (app()->environment('production')) {
            return $this->error('Unsafe to run in production environments.');
        }

        $this->info('Removing locally stored files...');

        $disk = app('filesystem')->disk('local');
        foreach ($disk->allDirectories('public') as $directory) {
            $disk->deleteDirectory($directory);
        }
        foreach ($disk->allDirectories('private') as $directory) {
            $disk->deleteDirectory($directory);
        }

        $this->info('Rebuilding database...');
        $this->dropAllTables();

        $this->call('migrate');
        $this->call('db:seed', [
            '--class' => $this->option('seeder')
        ]);
        // $this->call('passport:install');
    }
}