<?php

namespace App\Http\Controllers\Agent\helpdesk;

// controllers
use App\Http\Controllers\Controller;
// models
use App\User;
// classes
use Auth;
use DB;
use Exception;
use View;

/**
 * DashboardController
 * This controlleris used to fetch dashboard in the agent panel.
 *
 * @author      Ladybird <info@ladybirdweb.com>
 */
class TicketsDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     * constructor to check
     * 1. authentication
     * 2. user roles
     * 3. roles must be agent.
     *
     * @return void
     */
    public function __construct()
    {
        // checking for authentication
        $this->middleware('auth');
        // checking if the role is agent
        $this->middleware('role.agent');
    }

    /**
     * Get the dashboard page.
     *
     * @return type view
     */
    public function index()
    {
        // if(Auth::user()->role == "user"){
        // return \Redirect::route('home');
        // }
        try {
            return View::make('themes.default1.agent.helpdesk.dashboard.dashboard');
        } catch (Exception $e) {
            return View::make('themes.default1.agent.helpdesk.dashboard.dashboard');
        }
    }
}
