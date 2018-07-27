<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DataController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'tickets' => Ticket::latest()->get(),
            'currentUser' => $request->user(),
        ]);
    }

    public function reset(Request $request)
    {
        if (env('APP_ENV') === 'testing')
        {
            Artisan::call('migrate:refresh');
            Artisan::call('db:seed', [
                '--class' => 'UserSeeder'
            ]);
            return response()->json(User::first());
        }
    }
}
