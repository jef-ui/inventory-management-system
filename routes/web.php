    <?php

    use App\Http\Controllers\InventoryController;
    use App\Http\Controllers\ProfileController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/flower', function () {
        return view('flower');
    });


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        

        //Overall Inventory
        Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
        Route::post('/inventory',[InventoryController::class, 'store'])->name('inventory.store');


    });

    require __DIR__.'/auth.php';
