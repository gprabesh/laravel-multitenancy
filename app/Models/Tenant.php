<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Spatie\Multitenancy\Models\Tenant as ModelsTenant;

class Tenant extends ModelsTenant
{
    public function createDatabase()
    {
        DB::unprepared('CREATE DATABASE ' . $this->database);
    }
}
