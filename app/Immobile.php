<?php

namespace SiteEspindola;

use Illuminate\Database\Eloquent\Model;
use DB;

class Immobile extends Model
{

    protected $primaryKey = 'immobiles_id';

    //
    static public function getDistrinct(){
    	$immobile =  DB::table('immobiles')->select('immobiles_id','immobiles_district' , 'immobiles_city')->distinct()->orderby('immobiles_district' , 'ASC' )->get();

    	return $immobile;
    }

	static public function getTypeImmobile(){
    	$immobile =  DB::table('immobiles')->select('immobiles_type_immobiles')->distinct()->orderby('immobiles_type_immobiles' , 'ASC' )->get();

    	return $immobile;
    }

    static public function getPhotoFeatured($code)
    {
    	$photo_featured = DB::table('photo_immobiles')->where([
    							['photo_immobiles_code_immobile' , '=', $code],
    							['photo_immobiles_principal' , '=' ,  1]
    						])->first();

    	return $photo_featured->photo_immobiles_url;
    }
    //TIPO DE LOCAÇÃO
    static public function typeRental($type_rental)
    {
        switch ($type_rental) {
            case '1':
                $rental_type = "Não Informado";
                break;
            case '2':
                $rental_type = "Diária";
                break;
            case '3':
                $rental_type = "Mensal";
                break;
            case '4':
                $rental_type = "Anual";
                break;

            default:
                $rental_type = "Mensal";
                break;
        }

        return $rental_type;
    }   

    static public function typeOffer($immobiles_type_offer)
    {
        switch ($immobiles_type_offer) {
            case '1':
                $offer_type = "Normal";
                break;
            case '2':
                $offer_type = "Destaque";
                break;
            case '3':
                $offer_type = "Super Destaque";
                break;
            default:
                $rental_type = "Normal";
                break;
        }

        return $offer_type;
    }  

    static public function infoPublication($immobiles_type_publication)
    {
        switch ($immobiles_type_publication) {
            case '1':
                $infoPublication = "Venda/Locação";
                break;
            case '2':
                $infoPublication = "Venda";
                break;
            case '3':
                $infoPublication = "Locação";
                break;
            case '4':
                $infoPublication = "";
                break;
            
            default:
               $infoPublication = "Locação";
                break;

        }

        return $infoPublication;
    }

    static public function typeProperties()
    {
        $immobile =  DB::table('immobiles')->select('immobiles_type_immobiles')->distinct()->orderby('immobiles_type_immobiles' , 'ASC' )->get();

        return $immobile;
    }

    static public function getRent()
    {
        //DB::enableQueryLog();
        return Immobile::whereIn('immobiles_type_publication' , [1,3] )->get();
        // DB::getQueryLog();
    }

    static public function getSale()
    {
        return Immobile::whereIn('immobiles_type_publication' , [2,1])->get();
    }

    static public function getCityAll()
    {
        $city =  Immobile::select('immobiles_city')->distinct()->orderby('immobiles_city' , 'ASC' )->get();
        return $city;
    }

    static public function getTypeRental( $option )
    {
        $type_rental = [];
        switch ( $option ) {
            case 'alugar':
            $type_rental = [3,1];
            break;
            case 'comprar':
            $type_rental = [2,1];
            break;
            case 'ambos':
            $type_rental = [1,0];
            break;
            default:
            $type_rental = 3;
            break;
        };
        return $type_rental;
    }

    static public function getDistrictForRegion($request)
    {
        /**ADICIONANDO O NOME DA CIDADE TAMBÉM TEM QUE ADICIONAR UMA POSIÇÃO NO ARRAY $subCityrequest 
         * ATUALIZAR O ALGORITMO CONTATNDO O TOTAL DE CIDADES E ACRESCENTAR NO ARRAY $subCityrequest
        */
        $cityAllRequest = array("-(Fortaleza)", "-(Caucaia)", "-(Aquiraz)", "-(Eusebio)");
        $subCityrequest   = array("-(Fortaleza)", "-(Fortaleza)", "-(Fortaleza)","-(Fortaleza)");            
        $query = str_replace($cityAllRequest, $subCityrequest, $request);        
        $remove_setence_query = explode('-(Fortaleza),', $query);
        
        $query_search = [];
        foreach ($remove_setence_query as  $value) {
            $query_search[] = trim($value);
        }
        
        return $query_search;
    }

    static public function getOrderFile($type_search, $order){
            if($type_search == 'alugar'){
                $file = 'immobiles_rental_price';
            }else{
                $file = 'immobiles_selling_price';
            }
            $list = "";
            switch ($order) {
                case '1'://menos área
                    $file = 'immobiles_total_area';
                    $list = 'asc';
                    break;
                case '2':#maior área
                    $file = 'immobiles_total_area';
                    $list = 'desc';
                    break;
                case '3':#menor valor                    
                    $list = 'asc';
                    break;
                case '4':#maior valor                   
                    $list = 'desc';
                    break;                
               
            }
     
        return [ $file, $list];
    }

    static function searchAdvanced($request,  $typePublication)
    {
        $price = [ $request['price_min'], $request['price_max'] ];
        $area  = [ $request['area_min'],  $request['area_max']  ];
        //CONVERTENDOS OS INDICES DO ARRAY PARA INTEIRO
        $area = array_map('intval',$area);
        $immobile = Immobile::when($request, function ($query) use ($request) {            
            //TIPO DE IMOVEL
            if( count($request['immobiles_type_immobiles']) == 1){
                return $query->where('immobiles_type_immobiles', $request['immobiles_type_immobiles']);
            }elseif( count($request['immobiles_type_immobiles']) >= 1 ){
                return $query->whereIn('immobiles_type_immobiles', $request['immobiles_type_immobiles']);
            }
          
        })->when($request, function ($query) use ($request) {
            //PESQUISANDO POR CIDADE
            if(isset($request['immobiles_city'])){
                if( count($request['immobiles_city']) == 1){
                    return $query->where('immobiles_city', $request['immobiles_city']);
                }elseif( count($request['immobiles_city']) >= 1 ){
                    return $query->whereIn('immobiles_city', $request['immobiles_city']);
                }
            }
        })->when($request, function ($query) use ($request) {
            //PESQUISANDO POR DOMITÓRIO        
            if(isset($request['immobiles_qtd_dormitory'])){
                if( $request['immobiles_qtd_dormitory'] == 1){
                    return $query->where('immobiles_qtd_dormitory', $request['immobiles_qtd_dormitory']);
    
                }if( $request['immobiles_qtd_dormitory'] == '+5'){
                    return $query->where('immobiles_qtd_dormitory','>', 5);
    
                }else{
                    return $query->where('immobiles_qtd_dormitory', '<=',$request['immobiles_qtd_dormitory']);
                }
            }    
          
        })->when($request, function ($query) use ($request) {
            //PESQUISANDO POR VAGAS DE GARAGEM
            if(isset($request['immobiles_qtd_uncovered_jobs'])){
                if( $request['immobiles_qtd_uncovered_jobs'] == 1){
                    return $query->where('immobiles_qtd_uncovered_jobs', $request['immobiles_qtd_uncovered_jobs']);
    
                }if( $request['immobiles_qtd_uncovered_jobs'] == '5'){
                    return $query->where('immobiles_qtd_uncovered_jobs','>', 5);
                }else{
                    return $query->where('immobiles_qtd_uncovered_jobs', '<=',$request['immobiles_qtd_uncovered_jobs']);
                }
            }    
          
        })->when($request, function ($query) use ($price) {
            //PESQUISANDO POR VAGAS DE GARAGEM
            if (in_array(null, $price)) { 
               unset($price);
            }else{
                return $query->whereBetween('immobiles_rental_price' , $price);
            }
           
          
        })->when($request, function ($query) use ($area) {
            //PESQUISANDO POR VAGAS DE GARAGEM
            if (in_array(null, $area)) { 
               unset($area);
            }else{
                return $query->whereBetween('immobiles_total_area' , $area);
            }
           
          
        })->whereIn('immobiles_type_publication' , $typePublication)->get();
        
        return $immobile;
    }
    


 
}
