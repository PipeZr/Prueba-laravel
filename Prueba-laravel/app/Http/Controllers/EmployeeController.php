<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    /**
     * Mostrar listado de empleados con Inertia
     */
    public function index()
    {
        $employees = Employee::all();

        return Inertia::render('Employees/Index', [
            'employees' => $employees,
        ]);
    }

    /**
     * Mostrar detalle de un empleado
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);

        return Inertia::render('Employees/Show', [
            'employee' => $employee,
        ]);
    }

    /**
     * Consultar empleados dentro de un rengo de salario 
     */
    public function filter()
{
    $min = request()->query('min', 0);
    $max = request()->query('max', 999999);

    $employees = Employee::whereBetween('salary', [$min, $max])->get();

    return response()->json($employees);
}
}
