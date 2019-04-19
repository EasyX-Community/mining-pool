<?php

namespace App\Concerns;

use RuntimeException;

/**
 * Drops all Tables trait.
 *
 * @author Ryan Hein <me@ryanhein.com>
 */
trait DropsAllTables
{
    /**
     * Drop all tables from database.
     *
     * @param  string $connection Database connection name.
     * @return void
     */
    public function dropAllTables($connection = null)
    {
        if (app()->environment('production')) {
            throw new RuntimeException('Cannot drop tables in production environments.');
        }

        $db = app('db')->connection($connection);
        $db_name = $db->getDatabaseName();

        $db->statement('set FOREIGN_KEY_CHECKS=0');

        collect($db->select('show tables'))->map(function ($table) use ($db, $db_name) {
            return $table->{"Tables_in_{$db_name}"};
        })->each(function ($table) use ($db) {
            $db->statement("drop table {$table}");
        });

        $db->statement('set FOREIGN_KEY_CHECKS=1');
    }
}