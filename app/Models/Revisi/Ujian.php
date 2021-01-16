<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Jan 2021 23:47:23 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ujian
 *
 * @property int $id
 * @property int $matpel_id
 * @property string $nama_ujian
 * @property \Carbon\Carbon $tgl_dibuka
 * @property \Carbon\Carbon $tgl_ditutup
 * @property int $type
 * @property int $waktu
 * @property int $pin
 * @property \Carbon\Carbon $dibuat
 *
 * @property \App\Models\Revisi\Matpel $matpel
 * @property \Illuminate\Database\Eloquent\Collection $ujian_items
 *
 * @package App\Models\Revisi
 */
class Ujian extends Eloquent
{
	protected $table = 'ujian';
	public $timestamps = false;

	protected $casts = [
		'matpel_id' => 'int',
		'type' => 'int',
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
		'type',
		'waktu',
		'pin',
		'dibuat'
	];

	public function matpel()
	{
		return $this->belongsTo(\App\Models\Revisi\Matpel::class);
	}

	public function ujian_items()
	{
		return $this->hasMany(\App\Models\Revisi\UjianItem::class);
	}
}
