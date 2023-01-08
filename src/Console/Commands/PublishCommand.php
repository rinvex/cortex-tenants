<?php

declare(strict_types=1);

namespace Cortex\Tenants\Console\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Rinvex\Tenants\Console\Commands\PublishCommand as BasePublishCommand;

#[AsCommand(name: 'cortex:publish:tenants')]
class PublishCommand extends BasePublishCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cortex:publish:tenants {--f|force : Overwrite any existing files.} {--r|resource=* : Specify which resources to publish.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Cortex Tenants Resources.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        parent::handle();

        collect($this->option('resource') ?: ['config', 'lang', 'views', 'migrations'])->each(function ($resource) {
            $this->call('vendor:publish', ['--tag' => "cortex/tenants::{$resource}", '--force' => $this->option('force')]);
        });

        $this->line('');
    }
}
