<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }

  /**
   * Get the questions associated with the user.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function questions(): HasMany
  {
    return $this->hasMany(User::class);
  }

  /**
   * Get the URL of the user's avatar.
   *
   * @return string The URL of the user's avatar.
   */
  public function avatarUrl(): string
  {
    // return "https://www.gravatar.com/avatar/" . hash('sha256', strtolower(trim($this->email)));
    return "https://avatar.iran.liara.run/public/" . $this->id;
  }
}
