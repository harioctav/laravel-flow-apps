<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
  return Inertia::render('Questions/Index', [
    'questions' => [
      [
        'id' => 1,
        'title' => 'Question 1'
      ],
      [
        'id' => 2,
        'title' => 'Question 2'
      ],
      [
        'id' => 3,
        'title' => 'Question 3'
      ]
    ]
  ]);
});

Route::get('/questions/{id}', function ($id) {
  return Inertia::render('Questions/Show', [
    'question' => [
      'id' => $id,
      'title' => 'Question ' . $id
    ]
  ]);
});
