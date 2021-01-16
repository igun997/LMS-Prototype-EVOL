<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Jan 2021 23:47:23 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Siswa
 * 
 * @property string $nis
 * @property string $nama
 * @property string $alamat
 * @property string $no_hp
 * @property int $jk
 * @property string $foto
 * @property string $email
 * @property string $password
 * @property int $kelas_id
 * @property \Carbon\Carbon $dibuat
 * 
 * @property \App\Models\Revisi\Kela $kela
 * @property \Illuminate\Database\Eloquent\Collection $virtual_class_attendances
 *
 * @package App\Models\Revisi
 */
class Siswa extends Eloquent
{
	protected $table = 'siswa';
	protected $primaryKey = 'nis';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'jk' => 'int',
		'kelas_id' => 'int'
	];

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
		'jk',
		'foto',
		'email',
		'password',
		'kelas_id',
		'dibuat'
	];

	public function kela()
	{
		return $this->belongsTo(\App\Models\Revisi\Kela::class, 'kelas_id');
	}

	public function virtual_class_attendances()
	{
		return $this->hasMany(\App\Models\Revisi\VirtualClassAttendance::class);
	}
}
