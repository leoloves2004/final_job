<?php

use Illuminate\Support\Facades\Route;
use App\Models\ListJobs;

Route::get('/', function () {
    $jobs = ListJobs::all();
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function () {
    return view('create-job');
});

Route::post('/jobs', function () {
    ListJobs::create(request()->only([
        'title',
        'description',
        'company',
        'location',
        'salary'
    ]));

    return redirect('/');
});

Route::get('/jobs/{id}', function ($id) {
    $job = ListJobs::findOrFail($id);
    return view('job-details', ['job' => $job]);
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = ListJobs::findOrFail($id);
    return view('edit-job', ['job' => $job]);
});

Route::put('/jobs/{id}', function ($id) {
    $job = ListJobs::findOrFail($id);

    $job->update(request()->only([
        'title',
        'description',
        'company',
        'location',
        'salary'
    ]));

    return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{id}', function ($id) {
    $job = ListJobs::findOrFail($id);
    $job->delete();

    return redirect('/');
});