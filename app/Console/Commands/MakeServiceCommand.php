<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $stub = file_get_contents(__DIR__.'/stubs/service.stub');
        $content = str_replace('{{ServiceName}}', $name, $stub);
        
        if (!is_dir(app_path('Services'))) {
            mkdir(app_path('Services'));
        }
        
        file_put_contents(app_path("Services/{$name}.php"), $content);
        $this->info("Service {$name} created successfully!");
        }
}
