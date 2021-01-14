<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jan 2021 04:35:48 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VirtualClass
 * 
 * @property int $id
 * @property string $name
 * @property string $guru_id
 * @property int $kelas_id
 * @property string $link
 * @property string $downloadable
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property int $status
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $created_at
 * 
 * @property \App\Models\Revisi\Guru $guru
 * @property \App\Models\Revisi\Kela $kela
 * @property \Illuminate\Database\Eloquent\Collection $virtual_class_attendances
 *
 * @package App\Models\Revisi
 */
class VirtualClass extends Eloquent
{
	protected $casts = [
		'kelas_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'name',
		'guru_id',
		'kelas_id',
		'link',
		'downloadable',
		'start_date',
		'end_date',
		'status'
	];

	public function guru()
	{
		return $this->belongsTo(\App\Models\Revisi\Guru::class);
	}

	public function kela()
	{
		return $this->belongsTo(\App\Models\Revisi\Kela::class, 'kelas_id');
	}

	public function virtual_class_attendances()
	{
		return $this->hasMany(\App\Models\Revisi\VirtualClassAttendance::class);
	}
}
