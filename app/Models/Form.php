<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = ['doc_id', 'pat_id', 'date'];

    public function patient(){
        return $this->belongsTo(Patient::class, 'pat_id');
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doc_id');
    }

    public function medicalhistory(){
        return $this->hasMany(MedicalHistory::class);
    }

    public function history(){
        return $this->hasMany(History::class);
    }

    public function physicalexamination(){
        return $this->hasMany(PhysicalExamination::class);
    }

    public function radiologic(){
        return $this->hasMany(Radiologic::class);
    }

    public function remark(){
        return $this->hasMany(Remarks::class);
    }
}
