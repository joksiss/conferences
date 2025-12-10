<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;


Route::get('/', [ConferenceController::class, 'index'])
    ->name('conferences.index');

Route::middleware('auth')->group(function () {

    Route::get('/conferences/create', [ConferenceController::class, 'create'])
        ->name('conferences.create');

    Route::post('/conferences', [ConferenceController::class, 'store'])
        ->name('conferences.store');

    Route::get('/conferences/{conference}/edit', [ConferenceController::class, 'edit'])
        ->name('conferences.edit');

    Route::put('/conferences/{conference}', [ConferenceController::class, 'update'])
        ->name('conferences.update');

    Route::delete('/conferences/{conference}', [ConferenceController::class, 'destroy'])
        ->name('conferences.destroy');
});
Route::get('/conferences/{conference}', [ConferenceController::class, 'show'])
    ->name('conferences.show');


require __DIR__.'/auth.php';
