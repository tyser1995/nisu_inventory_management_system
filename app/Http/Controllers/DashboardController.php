<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;

use App\Models\PushSubscription;
use App\Models\User;
use App\Models\Role;
use App\Models\Announcement;
use App\Models\BookingModel;

use App\Events\MyEvent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $totals = [
            'usercount' => User::count()
        ];

        if (view()->exists("pages.dashboard")) {
            return view("pages.dashboard", [
                'totals'        => $totals,
                'subscriptions' => PushSubscription::all(),
            ]);
        }

        return abort(404);
    }
}
