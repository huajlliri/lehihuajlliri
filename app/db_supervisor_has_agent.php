<?php

namespace App;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class db_supervisor_has_agent extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'agent_has_supervisor';
    public $timestamps = false;
}
