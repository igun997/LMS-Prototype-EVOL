<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Feb 2021 01:12:27 +0000.
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
