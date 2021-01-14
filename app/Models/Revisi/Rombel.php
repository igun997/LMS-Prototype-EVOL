<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jan 2021 21:04:24 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rombel
 * 
 * @property int $id
 * @property string $nama
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $kelas
 *
 * @package App\Models\Revisi
 */
class Rombel extends Eloquent
{
	protected $table = 'rombel';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'nama',
		'status'
	];

	public function kelas()
	{
		return $this->hasMany(\App\Models\Revisi\Kela::class);
	}
}
