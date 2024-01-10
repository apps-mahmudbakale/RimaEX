<?php

use App\Models\Commodity;
use App\Events\SellOrderEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CommodityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WareHouseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class,'welcome'])->name('welcome');


Route::get('/about', function () {
    return view('about', ['commodities' => Commodity::all()]);
})->name('about');
Route::get('/portfolio/orders', [OrderController::class, 'create'])->name('test');
Auth::routes(['verify' => true]);

// Route::get('/broadcast', function () {
//     broadcast(new SellOrderEvent());
// });

Route::get('/backupdb', function () {
    $DbName             = env('DB_DATABASE');
    $get_all_table_query = "SHOW TABLES ";
    $result = DB::select(DB::raw($get_all_table_query));

    $prep = "Tables_in_$DbName";
    foreach ($result as $res){
        $tables[] =  $res->$prep;
    }



    $connect = DB::connection()->getPdo();

    $get_all_table_query = "SHOW TABLES";
    $statement = $connect->prepare($get_all_table_query);
    $statement->execute();
    $result = $statement->fetchAll();


    $output = '';
    foreach($tables as $table)
    {
        $show_table_query = "SHOW CREATE TABLE " . $table . "";
        $statement = $connect->prepare($show_table_query);
        $statement->execute();
        $show_table_result = $statement->fetchAll();

        foreach($show_table_result as $show_table_row)
        {
            $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
        }
        $select_query = "SELECT * FROM " . $table . "";
        $statement = $connect->prepare($select_query);
        $statement->execute();
        $total_row = $statement->rowCount();

        for($count=0; $count<$total_row; $count++)
        {
            $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
            $table_column_array = array_keys($single_result);
            $table_value_array = array_values($single_result);
            $output .= "\nINSERT INTO $table (";
            $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
            $output .= "'" . implode("','", $table_value_array) . "');\n";
        }
    }
    $file_name = 'database_backup_on_' . date('y-m-d') . '.sql';
    $file_handle = fopen($file_name, 'w+');
    fwrite($file_handle, $output);
    fclose($file_handle);
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file_name));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_name));
    ob_clean();
    flush();
    readfile($file_name);
    unlink($file_name);

});

/* Route Dashboards */
Route::group(['prefix' => 'app', 'as' => 'app.', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('updates', UpdateController::class);
    Route::resource('market', MarketController::class);
    Route::resource('commodities', CommodityController::class);
    Route::resource('warehouses', WareHouseController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('banks', BankController::class)->except('index');
    Route::get('profile/{id}', [PortfolioController::class, 'profile'])->name('profile');
    Route::get('/porfolio/orders', [PortfolioController::class, 'orders'])->name('porfolio.orders');
    Route::get('/porfolio/securities', [PortfolioController::class, 'securities'])->name('porfolio.securities');
    Route::resource('orders', OrderController::class);
    Route::get('orders/approve/{id}', [OrderController::class, 'approve'])->name('orders.approve');
    Route::resource('settings', SettingController::class);
});



