<?php

namespace App;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class db_not_pay extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'not_pay';
    public $timestamps = false;
}
