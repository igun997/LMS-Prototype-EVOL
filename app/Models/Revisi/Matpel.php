<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jan 2021 21:04:24 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Matpel
 * 
 * @property int $id
 * @property string $nama
 * @property int $kelas_id
 * @property string $nip
 * 
 * @property \App\Models\Revisi\Kela $kela
 * @property \App\Models\Revisi\Guru $guru
 * @property \Illuminate\Database\Eloquent\Collection $banksoals
 * @property \Illuminate\Database\Eloquent\Collection $ujians
 *
 * @package App\Models\Revisi
 */
class Matpel extends Eloquent
{
	protected $table = 'matpel';
	public $timestamps = false;

	protected $casts = [
		'kelas_id' => 'int'
	];

	protected $fillable = [
		'nama',
		'kelas_id',
		'nip'
	];

	public function kela()
	{
		return $this->belongsTo(\App\Models\Revisi\Kela::class, 'kelas_id');
	}

	public function guru()
	{
		return $this->belongsTo(\App\Models\Revisi\Guru::class, 'nip');
	}

	public function banksoals()
	{
		return $this->hasMany(\App\Models\Revisi\Banksoal::class);
	}

	public function ujians()
	{
		return $this->hasMany(\App\Models\Revisi\Ujian::class);
	}
}
