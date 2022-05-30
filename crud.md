CONTROLLER CRUD

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Animals;



class AnimalsController extends Controller
{
    public function create(){
        $create = Animals::all();
        return view('pages.animalNew', compact('create'));
    }

    public function store(Request $request){
        $store = new Animals();
        $store->type = $request->type;
        $store->name = $request->name;
        $store->age = $request->type;
        $store-> save();
        return redirect('/animals');
    }

    public function destroy($id){
        $delete = Animals::find($id);
        $delete->delete();
        return redirect('/');
    }

    public function edit($id){
        $edit = Animals::find($id);
        return view('edit', compact('edit'));
    }

    public function update($id, Request $request){
        $update = Animals::find($id);
        $update->type = $request->type;
        $update->name = $request->name;
        $update->age = $request->age;
        $update->save();
        return redirect('/animals');
    }
}



ROUTE CRUD

<?php

use App\Http\Controllers\AnimalsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/create', [AnimalsController::class, 'create'])->name('create');

Route::post('/admin/post', [AnimalsController::class, 'store']);

Route::delete('/delete/{id}', [AnimalsController::class, 'destroy']);

Route::get('/admin/{id}/edit', [AnimalsController::class, 'edit']);

Route::put('/admin/{id}/update', [AnimalsController::class, 'update']);