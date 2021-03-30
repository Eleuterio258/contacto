<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $description
 * @property string|null $email
 *
 * @package App\Models
 */
class Contacto extends Model
{
	protected $table = 'contacto';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'name',
		'address',
		'phone',
		'description',
		'email'
	];
}
