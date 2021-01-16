<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Jan 2021 23:47:23 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Admin
 * 
 * @property int $id
 * @property string $username
 * @property string $password
 *
 * @package App\Models\Revisi
 */
class Admin extends Eloquent
{
	protected $table = 'admin';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password'
	];
}
