<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Feb 2021 01:12:27 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Report
 * 
 * @property int $id
 * @property int $kelas_id
 * @property int $status
 * @property string $guru_id
 * @property int $rombel_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Revisi\Guru $guru
 * @property \App\Models\Revisi\Kela $kela
 * @property \App\Models\Revisi\Rombel $rombel
 * @property \Illuminate\Database\Eloquent\Collection $report_lessons
 *
 * @package App\Models\Revisi
 */
class Report extends Eloquent
{
	protected $casts = [
		'kelas_id' => 'int',
		'status' => 'int',
		'rombel_id' => 'int'
	];

	protected $fillable = [
		'kelas_id',
		'status',
		'guru_id',
		'rombel_id'
	];

	public function guru()
	{
		return $this->belongsTo(\App\Models\Revisi\Guru::class);
	}

	public function kela()
	{
		return $this->belongsTo(\App\Models\Revisi\Kela::class, 'kelas_id');
	}

	public function rombel()
	{
		return $this->belongsTo(\App\Models\Revisi\Rombel::class);
	}

	public function report_lessons()
	{
		return $this->hasMany(\App\Models\Revisi\ReportLesson::class);
	}
}
