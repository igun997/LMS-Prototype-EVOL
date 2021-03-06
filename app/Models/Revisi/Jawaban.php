<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Feb 2021 01:12:27 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Jawaban
 * 
 * @property int $id
 * @property int $ujian_id
 * @property int $nis
 * @property int $essay
 * @property \Carbon\Carbon $dibuat
 * 
 * @property \Illuminate\Database\Eloquent\Collection $jawaban_items
 *
 * @package App\Models\Revisi
 */
class Jawaban extends Eloquent
{
	protected $table = 'jawaban';
	public $timestamps = false;

	protected $casts = [
		'ujian_id' => 'int',
		'nis' => 'int',
		'essay' => 'int'
	];

	protected $dates = [
		'dibuat'
	];

	protected $fillable = [
		'ujian_id',
		'nis',
		'essay',
		'dibuat'
	];

	public function jawaban_items()
	{
		return $this->hasMany(\App\Models\Revisi\JawabanItem::class);
	}
}
