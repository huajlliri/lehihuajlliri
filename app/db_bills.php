<?php

namespace App;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class db_bills extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'bills';
    public $timestamps = false;
}
