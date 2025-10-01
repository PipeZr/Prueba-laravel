<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $json = file_get_contents(database_path('data/ejemplo.json'));
        $employees = json_decode($json, true);

        foreach ($employees as $emp) {
    // Si "skills" viene como array, lo convertimos a JSON
    if (isset($emp['skills']) && is_array($emp['skills'])) {
        $emp['skills'] = json_encode($emp['skills']);
    }

    Employee::create($emp);
}
    }
}
