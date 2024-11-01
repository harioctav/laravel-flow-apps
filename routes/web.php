<?php

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
  return Inertia::render('Questions/Index', [
    'questions' => QuestionResource::collection(
      Question::with('user')->latest()->paginate(15)
    )
  ]);
})->name('questions.index');

Route::get('/questions/{id}', function ($id) {
  return Inertia::render('Questions/Show', [
    'question' => [
      'id' => $id,
      'title' => 'Question ' . $id
    ]
  ]);
})->name('questions.show');
