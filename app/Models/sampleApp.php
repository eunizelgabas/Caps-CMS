<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sampleApp extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doc_id');
    }

    public function service(){
        return $this->belongsTo(Service::class, 'service_id');
    }

}
