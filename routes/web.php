<?php

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

  return QuestionResource::collection(
    Question::with('user')->latest()->paginate(15)
  );

  // return Inertia::render('Questions/Index', [
  //   'questions' => [
  //     [
  //       'id' => 1,
  //       'title' => 'Question 1'
  //     ],
  //     [
  //       'id' => 2,
  //       'title' => 'Question 2'
  //     ],
  //     [
  //       'id' => 3,
  //       'title' => 'Question 3'
  //     ]
  //   ]
  // ]);
})->name('questions.index');

Route::get('/questions/{id}', function ($id) {
  return Inertia::render('Questions/Show', [
    'question' => [
      'id' => $id,
      'title' => 'Question ' . $id
    ]
  ]);
})->name('questions.show');
