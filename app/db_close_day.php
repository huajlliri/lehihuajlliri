<?php

namespace App;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class db_close_day extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'close_day';
    public $timestamps = false;
}
