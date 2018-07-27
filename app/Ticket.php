<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = [];
    protected $attributes = ['status' => 'Pending'];
    protected $with = ['messages'];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
