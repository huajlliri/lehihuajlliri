<?php

namespace App;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class db_summary extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'summary';
}
