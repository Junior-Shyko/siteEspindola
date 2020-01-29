<?php

namespace SiteEspindola;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    
	protected $primaryKey = 'newsletters_id';

    protected $fillable = [
    	'newsletters_email' , 'newsletters_name' , 'newsletters_fone'
    ];


}
