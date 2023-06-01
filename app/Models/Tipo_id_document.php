<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tipo_id_document extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		'name'
	];
	public function User()
	{
		return $this->belongsTo(User::class);
	}
}
