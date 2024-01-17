<?php 
namespace Wpint\Contracts\Console;

interface ConsoleContract
{
    
    /**
     * Execute console command logic 
     *
     * @return void
     */
    public function handle($args, $assoc_args); 

}