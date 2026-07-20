<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    /*
    |--------------------------------------------------------------------------
    | Extra CRM Methods
    |--------------------------------------------------------------------------
    */

    public function followUp(string $id)
    {
        //
    }

    public function saveFollowUp(Request $request)
    {
        //
    }

    public function changeStatus(Request $request)
    {
        //
    }

    public function convertCustomer(string $id)
    {
        //
    }

    public function print(string $id)
    {
        //
    }
}