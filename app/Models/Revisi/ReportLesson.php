<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Feb 2021 01:12:27 +0000.
 */

namespace App\Models\Revisi;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReportLesson
 * 
 * @property int $id
 * @property int $matpel_id
 * @property int $point
 * @property string $grade
 * @property string $keterangan
 * @property int $report_id
 * 
 * @property \App\Models\Revisi\Matpel $matpel
 * @property \App\Models\Revisi\Report $report
 *
 * @package App\Models\Revisi
 */
class ReportLesson extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'matpel_id' => 'int',
		'point' => 'int',
		'report_id' => 'int'
	];

	protected $fillable = [
		'matpel_id',
		'point',
		'grade',
		'keterangan',
		'report_id'
	];

	public function matpel()
	{
		return $this->belongsTo(\App\Models\Revisi\Matpel::class);
	}

	public function report()
	{
		return $this->belongsTo(\App\Models\Revisi\Report::class);
	}
}
