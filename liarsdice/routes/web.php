<?php



use App\Http\Middleware\UpdateUserActivity;
use Illuminate\Support\Facades\DB;

Route::middleware([UpdateUserActivity::class])->get('/', function () {
    $activeUsers = DB::table('user_activities')->get();
    return view('welcome', ['activeUsers' => $activeUsers]);
});




// use App\Http\Middleware\UpdateUserActivity;

// Route::middleware([UpdateUserActivity::class])->get('/', function () {
//     return view('welcome');
// });



// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\WelcomeController;
// use App\Http\Middleware\UpdateUserActivity;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::middleware([UpdateUserActivity::class])->get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [WelcomeController::class, 'showWelcome']);



// Route::get('/', function () {
//     return view('welcome');
// });
