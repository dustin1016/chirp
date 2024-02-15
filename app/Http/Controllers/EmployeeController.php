<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\EmployeeModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

use Inertia\Response;


class EmployeeController extends Controller
{
    public function index()
    {
        //
        return Inertia::render('Employees/index', [

            'employees' => EmployeeModel::with('user:id,name')->latest()->get(),

        ]);
    }
}
