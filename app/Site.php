<?php

namespace SiteEspindola;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $primaryKey = 'sites_id';
    protected $fillable = [
        'sites_phoneFixed',
        'sites_phoneMobile',
        'sites_email',
        'sites_addressMatrix',
        'sites_numberMatrix',
        'sites_compMatrix',
        'sites_districtMatrix',
        'sites_cityMatrix',
        'sites_stateMatrix',
        'sites_codePostalMatrix',
        'sites_addressBranch',
        'sites_numberBranch',
        'sites_compBranch',
        'sites_districtBranch',
        'sites_cityBranch',
        'sites_stateBranch',
        'sites_codePostalBranch'
    ];

    public static function getInfoSite()
    {
        $site = Site::all();
        return $site;
    }
}
