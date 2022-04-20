<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'company_name',
        'no_of_employees',
        'project_title',
        'business_type',
        'url_link',
        'special_note',
        'completion_date',
        'consultation_charges',
        'status',
        'start_date',
        'weeks'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    //    $table->integer('user_id')->nullable();
    //         $table->integer('service_id')->nullable();
    //         $table->text('company_name')->nullable();
    //         $table->text('no_of_employees')->nullable();
    //         $table->text('project_title')->nullable();
    //         $table->text('business_type')->nullable();
    //         $table->text('url_link')->nullable();
    //         $table->text('special_note')->nullable();

}
