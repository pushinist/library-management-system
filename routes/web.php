<?php

use App\Http\Controllers\Book\CreateController as BookCreateController;
use App\Http\Controllers\Book\DestroyController as BookDestroyController;
use App\Http\Controllers\Book\EditController as BookEditController;
use App\Http\Controllers\Book\IndexController as BookIndexController;
use App\Http\Controllers\Book\SearchController as BookSearchController;
use App\Http\Controllers\Book\ShowController as BookShowController;
use App\Http\Controllers\Book\StoreController as BookStoreController;
use App\Http\Controllers\Book\UpdateController as BookUpdateController;
use App\Http\Controllers\Reader\CreateController as ReaderCreateController;
use App\Http\Controllers\Reader\EditController as ReaderEditController;
use App\Http\Controllers\Reader\IndexController as ReaderIndexController;
use App\Http\Controllers\Reader\ShowController as ReaderShowController;
use App\Http\Controllers\Reader\StoreController as ReaderStoreController;
use App\Http\Controllers\Reader\UpdateController as ReaderUpdateController;
use App\Http\Controllers\Transaction\BookHistoryController as TransactionBookHistoryController;
use App\Http\Controllers\Transaction\CreateController as TransactionCreateController;
use App\Http\Controllers\Transaction\IndexController as TransactionIndexController;
use App\Http\Controllers\Transaction\ReaderHistoryController as TransactionReaderHistoryController;
use App\Http\Controllers\Transaction\ShowController as TransactionShowController;
use App\Http\Controllers\Transaction\StoreController as TransactionStoreController;
use App\Http\Controllers\Transaction\UpdateController as TransactionUpdateController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Cache::put('key', 'value', 600);
    dd(Cache::get('key'));
});

Route::group([], function () {
    Route::get('/books', BookIndexController::class)->name('books.index');
    Route::get('/books/create', BookCreateController::class)->name('books.create');
    Route::get('/books/search', BookSearchController::class)->name('books.search');
    Route::get('/books/{book}', BookShowController::class)->name('books.show');
    Route::post('/books', BookStoreController::class)->name('books.store');
    Route::get('/books/{book}/edit', BookEditController::class)->name('books.edit');
    Route::patch('/books/{book}', BookUpdateController::class)->name('books.update');
    Route::delete('books/{book}', BookDestroyController::class)->name('books.destroy');
});

Route::group([], function () {
    Route::get('/readers', ReaderIndexController::class)->name('readers.index');
    Route::get('/readers/create', ReaderCreateController::class)->name('readers.create');
    Route::post('/readers', ReaderStoreController::class)->name('readers.store');
    Route::get('/readers/{reader}', ReaderShowController::class)->name('readers.show');
    Route::get('/readers/{reader}/edit', ReaderEditController::class)->name('readers.edit');
    Route::patch('/readers/{reader}', ReaderUpdateController::class)->name('readers.update');
});

Route::group([], function () {
    Route::get('/transactions', TransactionIndexController::class)->name('transactions.index');
    Route::get('transactions/create', TransactionCreateController::class)->name('transactions.create');
    Route::post('/transactions', TransactionStoreController::class)->name('transactions.store');
    Route::get('/transactions/books/{book}', TransactionBookHistoryController::class);
    Route::get('/transactions/readers/{reader}', TransactionReaderHistoryController::class);
    Route::get('transactions/{transaction}', TransactionShowController::class)->name('transactions.show');
    Route::patch('/transactions/{transaction}', TransactionUpdateController::class)->name('transactions.update');
});




