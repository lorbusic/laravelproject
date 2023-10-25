<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/tester/{name?}/{lastName?}/{age?}', static function (string $name = '', string $lastName = '', string $age = '') {
  return view('testpage',
  [
      'name'=>'Mario',
      'lastName'=>'Rossi',
      'age' => 40
  ]);
})
//->whereNumber('age')
//->whereAlpha(['name','surname'])
//Parametri con RegEx: verifico le espressioni regolari dei parametri
->where(
    ['age','[0-9]{2,3}'],
    ['name','[a-zA-z]{2,}'],
    ['lastName','[a-zA-z]{2,}'],
);

Route::view('user-details','testpage',
    [
        'name'=>'Mario',
        'lastName'=>'Rossi'
    ]
);

//Router::redirected('user-details','tester');*/

Route::resource('users',UsersController::class);

Route::get('users/userDetail/{$user}',[UsersController::class,'userDetail']);