<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Jan 2021 23:47:23 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UjianItem
 * 
 * @property int $id
 * @property int $ujian_id
 * @property int $banksoal_id
 * @property int $poin
 * 
 * @property \App\Models\Revisi\Ujian $ujian
 * @property \App\Models\Revisi\Banksoal $banksoal
 * @property \Illuminate\Database\Eloquent\Collection $jawaban_items
 *
 * @package App\Models\Revisi
 */
class UjianItem extends Eloquent
{
	protected $table = 'ujian_item';
	public $timestamps = false;

	protected $casts = [
		'ujian_id' => 'int',
		'banksoal_id' => 'int',
		'poin' => 'int'
	];

	protected $fillable = [
		'ujian_id',
		'banksoal_id',
		'poin'
	];

	public function ujian()
	{
		return $this->belongsTo(\App\Models\Revisi\Ujian::class);
	}

	public function banksoal()
	{
		return $this->belongsTo(\App\Models\Revisi\Banksoal::class);
	}

	public function jawaban_items()
	{
		return $this->hasMany(\App\Models\Revisi\JawabanItem::class);
	}
}
