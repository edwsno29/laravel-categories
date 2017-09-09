<?php

declare(strict_types=1);

namespace Rinvex\Categories\Console\Commands;

use Illuminate\Console\Command;

class MigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:migrate:categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate Rinvex Categories Tables.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->warn('Migrate rinvex/categories:');
        $this->call('migrate', ['--step' => true, '--path' => 'vendor/rinvex/categories/database/migrations']);
    }
}
