<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Feb 2021 01:12:27 +0000.
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
 * @property \Illuminate\Database\Eloquent\Collection $kelas
 * @property \Illuminate\Database\Eloquent\Collection $matpels
 * @property \Illuminate\Database\Eloquent\Collection $reports
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

	public function kelas()
	{
		return $this->hasMany(\App\Models\Revisi\Kela::class,"guru_id");
	}

	public function matpels()
	{
		return $this->hasMany(\App\Models\Revisi\Matpel::class, 'nip');
	}

	public function reports()
	{
		return $this->hasMany(\App\Models\Revisi\Report::class);
	}

	public function virtual_classes()
	{
		return $this->hasMany(\App\Models\Revisi\VirtualClass::class);
	}
}
