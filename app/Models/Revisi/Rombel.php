<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Feb 2021 01:12:27 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rombel
 * 
 * @property int $id
 * @property string $nama
 * @property int $semester
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $kelas
 * @property \Illuminate\Database\Eloquent\Collection $reports
 *
 * @package App\Models\Revisi
 */
class Rombel extends Eloquent
{
	protected $table = 'rombel';
	public $timestamps = false;

	protected $casts = [
		'semester' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'nama',
		'semester',
		'status'
	];

	public function kelas()
	{
		return $this->hasMany(\App\Models\Revisi\Kela::class);
	}

	public function reports()
	{
		return $this->hasMany(\App\Models\Revisi\Report::class);
	}
}
