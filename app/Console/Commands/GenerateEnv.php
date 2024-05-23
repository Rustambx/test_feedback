<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateEnv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:env';

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
        $sourceFilePath = '.env.example';

        $destinationFilePath = '.env';

        $sourceContent = file_get_contents($sourceFilePath);

        if (file_put_contents($destinationFilePath, $sourceContent) !== false) {
            echo "Файл .env успешно создан на основе .env.example\n";
        } else {
            echo "Ошибка при создании файла .env\n";
        }
    }
}
