<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['name', 'surname', 'team', 'year_of_birth', 'number_card', 'cover' ];
}
