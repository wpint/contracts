<?php
namespace Wpint\Contracts\Migration;

interface MigrationContract
{

    /**
     * Creating and Altering table logic
     *
     * @return void
     */
    public static function up();

    /**
     * Droping table logic
     *
     * @return void
     */
    public static function down();
    

}