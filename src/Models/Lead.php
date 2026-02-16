<?php

namespace CarlVallory\KrayinWoocommerce\Models;

use Webkul\Lead\Models\Lead as BaseLead;

class Lead extends BaseLead
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'lead_value',
        'status',
        'lost_reason',
        'expected_close_date',
        'closed_at',
        'user_id',
        'person_id',
        'lead_source_id',
        'lead_type_id',
        'lead_pipeline_id',
        'lead_pipeline_stage_id',
        'created_at',
    ];
}
