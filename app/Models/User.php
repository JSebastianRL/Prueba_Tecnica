<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Tipo_id_document;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

	protected $fillable = [
		'number_id',
		'name',
		'second_name',
		'email',
		'password',
	];

	protected $hidden = [
		'password',
	];
	public function Tipo_id_document()
	{
		return $this->hasOne(Tipo_id_document::class);
	}
}
