<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index()
    {
        $companiesCount = Company::count();
        $employeesCount = Employee::count();

        return view('dashboard', compact('companiesCount', 'employeesCount'));
    }
}
