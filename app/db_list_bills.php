<?php

namespace App;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class db_list_bills extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'list_bill';
    public $timestamps = false;
}
