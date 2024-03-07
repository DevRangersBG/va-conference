<?php

namespace App\Models\Conference;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'surname',
        'last_name',
        'email',
        'phone',
        'participant_type_id',
        'report_title',
        'report_file_path',
        'report_details',
        'keywords',
        'thematic_area_id',
        'has_certificate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function participantType()
    {
        return $this->belongsTo(ParticipantType::class);
    }

    public function thematicArea()
    {
        return $this->belongsTo(ThematicArea::class);
    }
}
