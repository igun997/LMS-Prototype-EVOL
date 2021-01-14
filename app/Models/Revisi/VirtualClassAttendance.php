<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Jan 2021 04:35:48 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VirtualClassAttendance
 * 
 * @property int $id
 * @property int $virtual_class_id
 * @property int $present_pin
 * @property int $sick_pin
 * @property int $permission_pin
 * @property int $status
 * @property string $siswa_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Revisi\VirtualClass $virtual_class
 * @property \App\Models\Revisi\Siswa $siswa
 *
 * @package App\Models\Revisi
 */
class VirtualClassAttendance extends Eloquent
{
	protected $casts = [
		'virtual_class_id' => 'int',
		'present_pin' => 'int',
		'sick_pin' => 'int',
		'permission_pin' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'virtual_class_id',
		'present_pin',
		'sick_pin',
		'permission_pin',
		'status',
		'siswa_id'
	];

	public function virtual_class()
	{
		return $this->belongsTo(\App\Models\Revisi\VirtualClass::class);
	}

	public function siswa()
	{
		return $this->belongsTo(\App\Models\Revisi\Siswa::class);
	}
}
