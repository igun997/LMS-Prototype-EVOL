<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jan 2021 21:04:24 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Guru
 * 
 * @property string $nip
 * @property string $nama
 * @property string $alamat
 * @property string $no_hp
 * @property string $email
 * @property string $password
 * @property \Carbon\Carbon $dibuat
 * 
 * @property \Illuminate\Database\Eloquent\Collection $matpels
 * @property \Illuminate\Database\Eloquent\Collection $virtual_classes
 *
 * @package App\Models\Revisi
 */
class Guru extends Eloquent
{
	protected $table = 'guru';
	protected $primaryKey = 'nip';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'dibuat'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nama',
		'alamat',
		'no_hp',
		'email',
		'password',
		'dibuat'
	];

	public function matpels()
	{
		return $this->hasMany(\App\Models\Revisi\Matpel::class, 'nip');
	}

	public function virtual_classes()
	{
		return $this->hasMany(\App\Models\Revisi\VirtualClass::class);
	}
}
