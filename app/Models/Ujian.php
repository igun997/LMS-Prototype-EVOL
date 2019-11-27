<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Nov 2019 16:17:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ujian
 * 
 * @property int $id
 * @property int $matpel_id
 * @property string $nama_ujian
 * @property \Carbon\Carbon $tgl_dibuka
 * @property \Carbon\Carbon $tgl_ditutup
 * @property int $waktu
 * @property int $pin
 * @property \Carbon\Carbon $dibuat
 * 
 * @property \App\Models\Matpel $matpel
 * @property \Illuminate\Database\Eloquent\Collection $ujian_items
 *
 * @package App\Models
 */
class Ujian extends Eloquent
{
	protected $table = 'ujian';
	public $timestamps = false;

	protected $casts = [
		'matpel_id' => 'int',
		'waktu' => 'int',
		'pin' => 'int'
	];

	protected $dates = [
		'tgl_dibuka',
		'tgl_ditutup',
		'dibuat'
	];

	protected $fillable = [
		'matpel_id',
		'nama_ujian',
		'tgl_dibuka',
		'tgl_ditutup',
		'waktu',
		'pin',
		'dibuat'
	];

	public function matpel()
	{
		return $this->belongsTo(\App\Models\Matpel::class);
	}

	public function ujian_items()
	{
		return $this->hasMany(\App\Models\UjianItem::class);
	}
}
