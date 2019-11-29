<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 29 Nov 2019 17:55:05 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Jawaban
 * 
 * @property int $id
 * @property int $ujian_id
 * @property int $nis
 * @property \Carbon\Carbon $dibuat
 * 
 * @property \App\Models\Ujian $ujian
 * @property \Illuminate\Database\Eloquent\Collection $jawaban_items
 *
 * @package App\Models
 */
class Jawaban extends Eloquent
{
	protected $table = 'jawaban';
	public $timestamps = false;

	protected $casts = [
		'ujian_id' => 'int',
		'nis' => 'int'
	];

	protected $dates = [
		'dibuat'
	];

	protected $fillable = [
		'ujian_id',
		'nis',
		'dibuat'
	];

	public function ujian()
	{
		return $this->belongsTo(\App\Models\Ujian::class);
	}

	public function jawaban_items()
	{
		return $this->hasMany(\App\Models\JawabanItem::class);
	}
}
