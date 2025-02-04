<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class SalaryController extends Controller
{
    // Obtener todos los salarios
    public function index()
    {
        return Salary::all();
    }

    // Guardar un nuevo salario
    public function store(Request $request)
    {
        $salary = Salary::create($request->all());
        return response()->json($salary, 201);
    }

    // Obtener medias por región
    public function getAverages()
    {
        return Salary::selectRaw('region, AVG(salary) as avg_salary')
                    ->groupBy('region')
                    ->get();
    }
}