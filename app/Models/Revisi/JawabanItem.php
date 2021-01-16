<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 15 Jan 2021 23:47:23 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class JawabanItem
 * 
 * @property int $id
 * @property int $jawaban_id
 * @property int $ujian_item_id
 * @property string $jawaban
 * 
 * @property \App\Models\Revisi\UjianItem $ujian_item
 *
 * @package App\Models\Revisi
 */
class JawabanItem extends Eloquent
{
	protected $table = 'jawaban_item';
	public $timestamps = false;

	protected $casts = [
		'jawaban_id' => 'int',
		'ujian_item_id' => 'int'
	];

	protected $fillable = [
		'jawaban_id',
		'ujian_item_id',
		'jawaban'
	];

	public function jawaban()
	{
		return $this->belongsTo(\App\Models\Revisi\Jawaban::class);
	}

	public function ujian_item()
	{
		return $this->belongsTo(\App\Models\Revisi\UjianItem::class);
	}
}
