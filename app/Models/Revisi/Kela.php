<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jan 2021 21:04:24 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Kela
 * 
 * @property int $id
 * @property string $nama
 * @property int $rombel_id
 * @property int $kelas_id
 * 
 * @property \App\Models\Revisi\Rombel $rombel
 * @property \App\Models\Revisi\Kela $kela
 * @property \Illuminate\Database\Eloquent\Collection $kelas
 * @property \Illuminate\Database\Eloquent\Collection $matpels
 * @property \Illuminate\Database\Eloquent\Collection $siswas
 * @property \Illuminate\Database\Eloquent\Collection $virtual_classes
 *
 * @package App\Models\Revisi
 */
class Kela extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'rombel_id' => 'int',
		'kelas_id' => 'int'
	];

	protected $fillable = [
		'nama',
		'rombel_id',
		'kelas_id'
	];

	public function rombel()
	{
		return $this->belongsTo(\App\Models\Revisi\Rombel::class);
	}

	public function kela()
	{
		return $this->belongsTo(\App\Models\Revisi\Kela::class, 'kelas_id');
	}

	public function kelas()
	{
		return $this->hasMany(\App\Models\Revisi\Kela::class, 'kelas_id');
	}

	public function matpels()
	{
		return $this->hasMany(\App\Models\Revisi\Matpel::class, 'kelas_id');
	}

	public function siswas()
	{
		return $this->hasMany(\App\Models\Revisi\Siswa::class, 'kelas_id');
	}

	public function virtual_classes()
	{
		return $this->hasMany(\App\Models\Revisi\VirtualClass::class, 'kelas_id');
	}
}
