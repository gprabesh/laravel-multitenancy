<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tenant::checkCurrent()
            ? $this->runTenantSpecificSeeders()
            : $this->runLandlordSpecificSeeders();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
    public function runTenantSpecificSeeders()
    {
        // run tenant specific seeders
    }

    public function runLandlordSpecificSeeders()
    {
        $tenant1 = new Tenant();
        $tenant1->name = 'Tenant1';
        $tenant1->domain = 'tenant1';
        $tenant1->database = 'tenant1';
        $tenant1->database_host = '127.0.0.1';
        $tenant1->database_port = 3306;
        $tenant1->database_user = 'root';
        $tenant1->database_password = 'root';
        $tenant1->save();
        $tenant1->createDatabase();

        $tenant2 = new Tenant();
        $tenant2->name = 'Tenant2';
        $tenant2->domain = 'tenant2';
        $tenant2->database = 'tenant2';
        $tenant2->database_host = '127.0.0.1';
        $tenant2->database_port = 3306;
        $tenant2->database_user = 'root';
        $tenant2->database_password = 'root';
        $tenant2->save();
        $tenant2->createDatabase();
    }
}
