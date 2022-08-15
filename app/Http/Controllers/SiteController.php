<?php
/*

Author: Excellence Soft - Junior Oliveira
Description: Novo Site Espindola Imobiliária
GEOIP : https://github.com/pulkitjalan/geoip
*/
namespace SiteEspindola\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use SiteEspindola\Immobile;
use SiteEspindola\Location;
use SiteEspindola\Site;
use PulkitJalan\GeoIP\GeoIP;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Sendy;
use Illuminate\Support\Facades\Mail;
use SiteEspindola\Mail\ContactMail;
use SiteEspindola\Mail\ReserveKey;

class SiteController extends Controller
{
static protected $ip;
static protected $agent;
static protected $route;
static protected $lat;
static protected $log;
static protected $city;
static protected $country;
static protected $region;
static protected $timezone;
static protected $page_previous;
static protected $date;
static protected $geoip;


/**
* //DB::enableQueryLog();
* //return  DB::getQueryLog();
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
    if(!isset($_SERVER['HTTP_REFERER']))
    {
        $refer = url('/');
    }else{
        $refer = $_SERVER['HTTP_REFERER'];
    }
    date_default_timezone_set('America/Fortaleza');
    
    self::$ip = request()->server()['REMOTE_ADDR'];
    self::$geoip = new GeoIP();
    self::$geoip->setIp(self::$ip);
    
    self::$agent = request()->userAgent();
    self::$route = request()->route()->uri;

    self::$lat = self::$geoip->getLatitude();

    self::$log = self::$geoip->getLongitude();
    self::$city = self::$geoip->getCity();;
    self::$country = self::$geoip->getCountry();;
    self::$region = self::$geoip->getRegion();;
    self::$timezone = self::$geoip->getTimezone();;
    self::$page_previous = $refer;
    self::$date = Carbon::now();
    $page_title = "Aluguel e Vendas | Espindola imobiliária";
    $immobile   = Immobile::getDistrinct();
    $type       = Immobile::getTypeImmobile();
    $city_all   = Immobile::getCityAll();
    $immobile_all = Immobile::all();
    $allDistrict = [];
    foreach ($immobile as $key => $value) {
       array_push($allDistrict, $value->immobiles_district);
    }

    $uniqueDistrict = array_unique($allDistrict);
    $site = Site::all();
    // Location::createLocation(self::$agent, self::$ip, self::$route, self::$lat, self::$log, self::$city, self::$country, self::$region, self::$timezone, self::$page_previous, self::$date);
    $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('/img/site/logo_redes.png')];

    return view('site.index' , compact('page_title' , 'immobile' , 'type' , 'meta_site' , 'city_all' , 'immobile_all', 'uniqueDistrict' , 'site'));
}

public function searchList(Request $request)
{
    
    global $immobile, $info_total_immobile, $type_rental, $query_search;

    $type_rental =  Immobile::getTypeRental( $request['opcao'] );
    $page_title = "Aluguel e vendas de Imóveis, Lista de imóveis | Espindola imobiliária";
    Location::createLocation(self::$agent, self::$ip, self::$route, self::$lat, self::$log, self::$city, self::$country, self::$region, self::$timezone, self::$page_previous, self::$date);
    $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('img/site/logo.png')];
    $order_by = Immobile::getOrderFile($request['opcao'] , $request['orderSearch']);
    //FORÇANDO A ENTRAR NA CONDIÇÃO PARA LOCAÇÃO
    $site = Site::all();
    if(($request['opcao'] == 'alugar')  && $request['region-immobile'] == "")
    {   //SE TIVER OS TIPOS DE IMOVEIS
        
        if(isset($request['typeImmobile']) ){            
            $immobile = Immobile::whereIn('immobiles_type_immobiles' , $request['typeImmobile'])
                        ->whereIn('immobiles_type_publication' , $type_rental)
                        ->orderBy($order_by[0] , $order_by[1])->get();
            $info_total_immobile = count($immobile);  
            
            return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'site', 'page_title' , 'meta_site' ));
        }//SE NAO TIVER OS TIPOS DOS IMOVEIS
        $immobile =  Immobile::getRent();     
        $info_total_immobile = count($immobile);  
       
        return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title', 'site' , 'meta_site' ));
    }
    if(($request['opcao'] == 'alugar') &&  $request['region-immobile'] !== "")
    {
       
        if(isset($request['typeImmobile']) ){
            $query_search = Immobile::getDistrictForRegion($request['region-immobile']);
           
            $immobile = Immobile::whereIn('immobiles_district' ,$query_search)
                        ->whereIn('immobiles_type_immobiles' , $request['typeImmobile'])
                        ->whereIn('immobiles_type_publication' , $type_rental)
                        ->orderBy($order_by[0] , $order_by[1])->get();
           
                        $info_total_immobile = count($immobile);
            $all_immobiles = $immobile->toArray();
            $info_total_immobile = count($immobile);  
            
            return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' ,'site', 'page_title' , 'meta_site' , 'all_immobiles'));
        }

        $query_search = Immobile::getDistrictForRegion($request['region-immobile']);
        //DB::enableQueryLog();
        $immobile = Immobile::whereIn('immobiles_district' ,$query_search)
                    ->whereIn('immobiles_type_publication' , $type_rental)
                    ->orderBy($order_by[0] , $order_by[1])->get();
                   // return DB::getQueryLog();            
        $info_total_immobile = count($immobile);
        $all_immobiles = $immobile->toArray();
        $info_total_immobile = count($immobile);
        
        return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title' , 'site', 'meta_site' , 'all_immobiles'));
   
    }

    //FORÇANDO A ENTRA NA CONDIÇÃO DE COMPRA
    if(($request['opcao'] == 'comprar')  && $request['region-immobile'] == "")
    {  //SE TIVER OS TIPOS DE IMOVEIS
       
        if(isset($request['typeImmobile']) ){            
            $immobile = Immobile::whereIn('immobiles_type_immobiles' , $request['typeImmobile'])
                        ->whereIn('immobiles_type_publication' , $type_rental)
                        ->orderBy($order_by[0] , $order_by[1])->get();
            $info_total_immobile = count($immobile);  
            $site = Site::all();
            return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' ,'site', 'page_title' , 'meta_site', 'site' ));
        }//SE NAO TIVER OS TIPOS DOS IMOVEIS
        $immobile =  Immobile::getSale();     
        $info_total_immobile = count($immobile);  
        $site = Site::all();
        return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title' , 'meta_site' , 'site' ));
    }
    if(($request['opcao'] == 'comprar') &&  $request['region-immobile'] !== "")
    {
        if(isset($request['typeImmobile']) ){
            
            $query_search = Immobile::getDistrictForRegion($request['region-immobile']);
            $immobile = Immobile::whereIn('immobiles_district' ,$query_search)
                        ->whereIn('immobiles_type_immobiles' , $request['typeImmobile'])
                        ->whereIn('immobiles_type_publication' , $type_rental)
                        ->orderBy($order_by[0] , $order_by[1])->get();                      
            $info_total_immobile = count($immobile);
            $all_immobiles = $immobile->toArray();
            $info_total_immobile = count($immobile);  
            $site = Site::all();
            return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title' , 'meta_site' , 'all_immobiles', 'site'));
        }
        //dd($order_by);
        $query_search = Immobile::getDistrictForRegion($request['region-immobile']);
       //DB::enableQueryLog();
        $immobile = Immobile::whereIn('immobiles_district' , $query_search)
                    ->whereIn('immobiles_type_publication' , $type_rental)
                    ->orderBy($order_by[0] , $order_by[1])->get();
        //return DB::getQueryLog();            
        $info_total_immobile = count($immobile);
        $all_immobiles = $immobile->toArray();
        $info_total_immobile = count($immobile);

        return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title' , 'meta_site' , 'all_immobiles', 'site'));
   
    }
    //PESQUISA PARA AMBOS
    if( ($request['opcao'] == 'ambos') && $request['region-immobile'] == "")
    {   //SE ESCOLHER O TIPO
        if(isset($request['typeImmobile']) ){            
             $immobile = Immobile::whereIn('immobiles_type_immobiles' , $request['typeImmobile'])
                        ->whereIn('immobiles_type_publication' , $type_rental)
                        ->orderBy($order_by[0] , $order_by[1])->get();                      
            $info_total_immobile = count($immobile);
            $all_immobiles = $immobile->toArray();
            $info_total_immobile = count($immobile);              
            return view('site.list' , compact('site', 'immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title' , 'meta_site' , 'all_immobiles'));
        }
        //CASO NÃO ESCOLHA O TIPO
        $query_search = Immobile::getDistrictForRegion($request['region-immobile']);
        $immobile = Immobile::whereIn('immobiles_type_publication' , $type_rental)
                    ->orderBy($order_by[0] , $order_by[1])->get();                      
        $info_total_immobile = count($immobile);
        $all_immobiles = $immobile->toArray();
        $info_total_immobile = count($immobile);  
        return view('site.list' , compact('immobile' ,'site', 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title' , 'meta_site' , 'all_immobiles'));
    }
    if( ($request['opcao'] == 'ambos') && $request['region-immobile'] !== "")
    {   //SE ESCOLHER O TIPO
        if(isset($request['typeImmobile']) ){
            $query_search = Immobile::getDistrictForRegion($request['region-immobile']);         
            $immobile = Immobile::whereIn('immobiles_district' ,$query_search)
                        ->whereIn('immobiles_type_immobiles' , $request['typeImmobile'])
                        ->whereIn('immobiles_type_publication' , $type_rental)
                        ->orderBy($order_by[0] , $order_by[1])->get();                      
            $info_total_immobile = count($immobile);
            $all_immobiles = $immobile->toArray();
            $info_total_immobile = count($immobile);              
            return view('site.list' , compact('site','immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title' , 'meta_site' , 'all_immobiles'));
        }
        //CASO NÃO ESCOLHA O TIPO
        $query_search = Immobile::getDistrictForRegion($request['region-immobile']);
        $immobile = Immobile::whereIn('immobiles_type_publication' , $type_rental)
                    ->orderBy($order_by[0] , $order_by[1])->get();                      
        $info_total_immobile = count($immobile);
        $all_immobiles = $immobile->toArray();
        $info_total_immobile = count($immobile);  
        return view('site.list' , compact('immobile' ,'site', 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title' , 'meta_site' , 'all_immobiles'));
    }
}
/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    
    $immobile = Immobile::where('immobiles_code' , $id)->first();
    if(empty($immobile))
    {
        return redirect('nao-encontrado');

    }else{
        $photo_immobile = DB::table('photo_immobiles')->where('photo_immobiles_code_immobile' , $id)->get();
        //FOTO DE DESTAQUE
        $photo_immobile_featured = DB::table('photo_immobiles')->where([
            ['photo_immobiles_code_immobile' ,'=', $id],
            ['photo_immobiles_principal' , '=', 1]
        ])->get();

        //PARA SABER O TIPO DO ALUGUEL
        $rental_type = Immobile::typeRental($immobile->immobiles_type_rental);
        //PARA O TIPO DE OFERTA
        $offer_type = Immobile::typeOffer($immobile->immobiles_type_offer);

        $recents    = Immobile::orderBy('immobiles_date_register' , 'desc')->limit(3)->get();

        $page_title = substr($immobile->immobiles_property_title , 0, 49);
        $description= substr($immobile->immobiles_ps , 0, 297);

        $type       = Immobile::getTypeImmobile();
        $district   = Immobile::getDistrinct();
        // return $district;

        Location::createLocation(self::$agent, self::$ip, self::$route, self::$lat, self::$log, self::$city, self::$country, self::$region, self::$timezone, self::$page_previous, self::$date);

        $meta_site = ['url' => url('/imovel/'.$id) , 'title' => $page_title , 'type' => 'website' , 'description' => $description , 'image' => $photo_immobile_featured[0]->photo_immobiles_url];
        //SEGURO INCENDIO
        if($immobile->immobiles_rental_price < 300){
            $price_insurance_fire = 300;
        }else{
            $price_insurance_fire = $immobile->immobiles_rental_price;
        }
        $insurance_fire_monthly = ( (100 * $price_insurance_fire) * 0.0015946667 / 12);//mensal
        $insurance_fire_annual  = ( (100 * $price_insurance_fire) * 0.0015946667);//anual
        $body_info_fire = 'Valor único e anual. Inclui proteção obrigatória contra incêndio, queda de raio ou explosão. O imóvel fica protegido e o proprietário é indenizado em casos de acidentes.  *Os valores estão sujeitas a alteração pela seguradora';
        //SE ACEITA NEGOCIAÇÃO
        $accept_negotiation = ($immobile->immobiles_accept_negotiation == 1 ? 'Sim' : 'Não');

        $key = DB::table('keys')->where('keys_cod_immobile' ,$immobile->immobiles_code )->get();
        if(count($key) > 0)
        {
            $key_cadastre = true;
        }else{
            $key_cadastre = false;
        }
        $other_immobile = Immobile::where([
            ['immobiles_type_immobiles',$immobile->immobiles_type_immobiles]  
        ])->get();
        $districtAll = DB::table('district')->get();
        // dump($immobile->immobiles_district);
        $id_agency = 0;
            foreach ($districtAll as $key => $value) {
                if(str_contains($value->district_name, $immobile->immobiles_district))
                {
                   $id_agency = $value->district_id_agency;
                }
            }

        $realtor = DB::table('realtor')->where('realtor_code_imobile', $immobile->immobiles_code)->first();
        $site = Site::all();
        // dd($district);
        return view('site.details' , compact('immobile' , 'photo_immobile' , 'rental_type' , 'recents' , 
        'offer_type' , 'page_title' , 'type' , 'district' , 'meta_site' , 'insurance_fire_monthly' ,
        'body_info_fire' , 'accept_negotiation' , 'key_cadastre' , 'insurance_fire_annual', 'other_immobile', 'districtAll',
        'id_agency' , 'realtor', 'site'));
    }    
}

/*    
RETORNO DE TODOS OS IMÓVEIS PARA O MAPA
    **/
public function allMaps()
{
    $immobile = Immobile::all();

    return response()->json($immobile);
}

public function searchAdvance(Request $request)
{
    //FORMATANDO O ARRAY
    $price = explode(";" , $request['immobiles_rental_price']);

    $immobile = Immobile::whereIn('immobiles_type_immobiles' , $request['immobiles_type_immobiles'])
    ->whereIn('immobiles_district' , $request['immobiles_district'])
    ->where('immobiles_qtd_dormitory', '<=' , $request['immobiles_qtd_dormitory'])
    ->where('immobiles_qtd_uncovered_jobs', '<=' , $request['immobiles_qtd_uncovered_jobs'])
    ->whereBetween('immobiles_rental_price' , $price)->get();
    $rental_type = 1;                        
    $offer_type = 1;
    $info_total_immobile = count($immobile);

    Location::createLocation(self::$agent, self::$ip, self::$route, self::$lat, self::$log, self::$city, self::$country, self::$region, self::$timezone, self::$page_previous, self::$date);

    $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('img/site/logo.png')];

    return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'meta_site'));

}
//BUSCA POR CÓDIGO - BASTA REDIRECIONAMENTO
public function searchCode(Request $request)
{
    return redirect('imovel/'.$request['immobiles_code']);
}
//QUANDO NÃO ENCONTRAR O IMÓVEL
public function notImmobiles()
{

    $immobile       = Immobile::paginate(10);
    
    $page_title = "Imóvel não encontrado | Espindola imobiliária";

    $type       = Immobile::getTypeImmobile();
    $district   = Immobile::getDistrinct();
    $recents    = Immobile::orderBy('immobiles_date_register' , 'desc')->limit(3)->get();

    Location::createLocation(self::$agent, self::$ip, self::$route, self::$lat, self::$log, self::$city, self::$country, self::$region, self::$timezone, self::$page_previous, self::$date);


    $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('img/site/logo.png')];
    $site = Site::all();
    return view('site.empty' , compact('type' , 'district' , 'recents' , 'immobile' , 'page_title' , 'meta_site' , 'site'));
}

public function getIp()
{   
    $br = "<br>";
    // $location = Location::createLocation(self::$agent, self::$ip, self::$route, self::$lat, self::$log, self::$city, self::$country, self::$region, self::$timezone, self::$page_previous, self::$date);

    dump(phpinfo());
}

public function setIpLocation(Request $request)
{
    if($request->ajax())
    {
        //REGISTRANDO OS DADOS
        try {
            $request['updated_at'] = Carbon::now();
            Location::create($request->all());
            return response()->json(['message' => 'sucess']);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}

public function carousel()
{

    $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('img/site/logo.png')];

    $type       = Immobile::getTypeImmobile();
    return view('site.carousel', compact( 'meta_site', 'type'));
}

public function getDistrictCity()
{
    $city = Input::get('term');
    $result = [];
    //DB::enableQueryLog();
    $district = Immobile::select('immobiles_district')->where('immobiles_district' ,  'LIKE', '%'.$city.'%')->distinct()->orderby('immobiles_district' , 'ASC' )->get();
    //return DB::getQueryLog();
    foreach ($district as $query)
    {
        $result[] =  $query->immobiles_district ;

    }

    return $result;
}

public function getDistrict()
{
    $result = [];
    $district = Immobile::select('immobiles_district', 'immobiles_city')->distinct()->get();
    foreach ($district as $query)
    {
        $result[] = $query->immobiles_district .'-(' .$query->immobiles_city.')' ;
    }
    $nova_str = "";
    foreach($result as $strings){
	$nova_str = preg_replace(array("/(á|à|ã|â|ä)/",
							  "/(Á|À|Ã|Â|Ä)/",
							  "/(é|è|ê|ë)/",
							  "/(É|È|Ê|Ë)/",
							  "/(í|ì|î|ï)/",
							  "/(Í|Ì|Î|Ï)/",
							  "/(ó|ò|õ|ô|ö)/",
							  "/(Ó|Ò|Õ|Ô|Ö)/",
							  "/(ú|ù|û|ü)/",
							  "/(Ú|Ù|Û|Ü)/",
							  "/(ñ)/","/(Ñ)/"),
						explode(" ","a A e E i I o O u U n N"),$result);

    }
    return $nova_str;
}

public function notfound()
{
        $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('img/site/logo.png')];
        $site = Site::all();
    return view('site.404', compact('meta_site', 'site'));
}

public function immobileAdvanced(Request $request)
{
    
    //DB::enableQueryLog();
    if($request['immobiles_qtd_uncovered_jobs'] == 0){
        unset($request['immobiles_qtd_uncovered_jobs']);
    }    
    if($request['immobiles_city'] == 0){
        unset($request['immobiles_city']);
    }    
  
    switch ($request['immobiles_type_publication']) {
        case 'alugar':
            $typePublication = [3,1];
            $immobile = Immobile::searchAdvanced($request->all(), $typePublication);
            break;
        case 'comprar':
            $typePublication = [2,1];
            $immobile = Immobile::searchAdvanced($request->all(),  $typePublication);
            break;
        case 'ambos':
            $typePublication = [1,0];
            $immobile = Immobile::searchAdvanced($request->all(), $typePublication);
            break;
    }
   
    $page_title = "Aluguel e vendas de Imóveis, Lista de imóveis | Espindola imobiliária";

    Location::createLocation(self::$agent, self::$ip, self::$route, self::$lat, self::$log, self::$city, self::$country, self::$region, self::$timezone, self::$page_previous, self::$date);

    $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('img/site/logo.png')];
    $info_total_immobile = count($immobile);     
    $site = Site::all();
    return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' , 'page_title' , 'meta_site' , 'site'));

    
}

public function sendContact(Request $request)
{
       
    $immobile = Immobile::where('immobiles_code' , '=' , $request['immobiles_code'])->first();
    $contact = $request->all();
   
    $date_send = Carbon::now('America/Fortaleza');
    $date = Carbon::parse($date_send, 'UTC');
    $date = $date->format('d \d\e F \d\e Y H:m');
    $agency = "Ag. Aldeota";
    $mail = \Mail::to('meajuda@espindolaimobiliaria.com.br')->send(new ContactMail($immobile, $contact, $date, $agency ));
   
    if($mail)
    {
        return response()->json(['message' => 'success']);

    }else{
        return response()->json(['message' => 'error']);
    }
}

public function searchKey($code)
{
    $key = DB::table('keys')->where('keys_cod_immobile' , $code)->first();
    
    // $agencia = strstr($key->keys_code, 'f');// stristr - sem diferenciar maiúsculas e minúsculas
    //PERCORRENDO OS 3 PRIMEIROS CARACTERES E EXTRAINDO ESSES VALORES
    $iniciais = substr($key->keys_code, 0, 3);
    //deixando tudo maiusculas
    $maiusculas = strtoupper($iniciais);
    //OBTENDO A LETRA INICIAL DA AGENCIA
    $agencia = substr($maiusculas, -1);
    
    if($agencia == 'F'){
    $agency = 'Fátima';
    $address = 'Rua Monsenho Otávio de Castro, 781, Fátima';
    }else{
    $agency = 'Aldeota';
    $address = 'Av. Santos Dumont, 2828, Loja 12, Aldeota';
    }

    return response()->json(['keys_code' => $key->keys_code , 'agency' => $agency , 'address' => $address , 'keys_cod_immobile' => $key->keys_cod_immobile]);
}

//ENVIAR EMAIL DE RESERVA DE CHAVES
//PARA O USUÁRIO
public function reserveKey(Request $request)
{
    $key = DB::table('keys')->where([
                                    ['keys_cod_immobile', '=', $request['keys_cod_immobile'] ], 
                                    ['keys_code' ,   '=', $request['keys_code'] ]   
                                    ])->first();

    $immobile = Immobile::where('immobiles_code' , '=' , $request['keys_cod_immobile'])->first();                                 
    $contact = new Request;
    $contact->name_reserve      = $request['name_reserve'];       
    $contact->email_reserve     = $request['email_reserve'];
    $contact->phone_reserve     = $request['phone_reserve'];
    $contact->date_prev         = $request['date_prev'];
    $contact->date_entr         = $request['date_entr'];
    $contact->keys_code         = $request['keys_code'];
    $contact->keys_cod_immobile = $request['keys_cod_immobile'];
    $contact->agency            = $request['agency'];

    try {
        \Mail::to('meajuda@espindolaimobiliaria.com.br')->send(new ReserveKey($immobile , $contact));
        
        Mail::send('email.confirmReserve', ['contact' => $contact, 'immobile' => $immobile ], function ($message) use ($contact,$immobile )
        {

            $message->to($contact->email_reserve)->subject('PRÉ-AGENDAMENTO PARA VISITAÇÃO DE IMÓVEL');

        });

        return redirect('confirmacao-reserva-chave')->with('message', 'E-mail enviado para '.$contact->email_reserve);
    } catch (Exception $e) {
        return redirect('404')->with('message', 'Erro de E-mail! '.$e->getMessage());
    }
    
}

public function confirmReserve()
{
    $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('img/site/logo.png')];
    return view('site.confirm_reserve' , compact('meta_site'));
}

public function allType($type)
{
    $immobile =  Immobile::where('immobiles_type_immobiles' , $type)->get();
    $info_total_immobile = count($immobile);  
    $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('img/site/logo.png')];
    $site = Site::all();
    $page_title =  ucfirst($type). " - Aluguel e Vendas | Espindola imobiliária";
    return view('site.list' , compact('immobile' , 'rental_type' , 'offer_type' , 'info_total_immobile' ,'site', 'meta_site', 'page_title'));

}
    
    public function sync()
    {
        $sync = Immobile::xml();
        return $sync;
    } 

    public function espindola()
    {
        $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('public/img/site/logo.png')];
        $site = Site::all();
        $page_title =  "Aluguel e Vendas | ";
        return view('site.pages.espindola' , compact('site', 'meta_site', 'page_title'));
    }

    public function services()
    {
        $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('public/img/site/logo.png')];
        $page_title = "Serviços | ";
        $site = Site::all();
        return view('site.pages.services' , compact('site', 'meta_site' , 'page_title'));
    }

    public function team()
    {
        $meta_site = ['url' => url('/') , 'title' => "Aluguel e Vendas | Espindola imobiliária" , 'type' => 'website' , 'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 'image' => url('public/img/site/logo.png')];
        $page_title = "Equipe | ";
        $team = DB::table('teamSites')->get();
        $site = Site::all();
        return view('site.pages.team' , compact('site', 'meta_site' , 'page_title', 'team'));
    }

    public function client()
    {
        $meta_site = ['url' => url('/') , 
            'title' => "Aluguel e Vendas | Espindola imobiliária" , 
            'type' => 'website' , 
            'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 
            'image' => url('public/img/site/logo.png')];
        $page_title = "Cliente | ";
        $site = Site::all();
        return view('site.pages.client' , compact('site', 'meta_site' , 'page_title'));
    }

    public function contact()
    {
        $meta_site = ['url' => url('/') , 
            'title' => "Aluguel e Vendas | Espindola imobiliária" , 
            'type' => 'website' , 
            'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 
            'image' => url('public/img/site/logo.png')];
        $page_title = "Contato | ";
        $site = Site::all();
        return view('site.pages.contact' , compact( 'meta_site' , 'page_title', 'site'));
    }

    public function synchronize()
    {
        $meta_site = ['url' => url('/') , 
            'title' => "Aluguel e Vendas | Espindola imobiliária" , 
            'type' => 'website' , 
            'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 
            'image' => url('public/img/site/logo.png')];
        $page_title = "Sincronismo | ";
        $site = Site::all();
        //INFORMAÇÃO DO SINCRONISMO
        $sync = DB::table('settings')->get();
        return view('site.pages.synchronize', compact( 'meta_site' , 'page_title', 'site', 'immobile', 'sync'));
    }
    
    public function policy() 
    {
        $meta_site = ['url' => url('/') , 
            'title' => "Aluguel e Vendas | Espindola imobiliária" , 
            'type' => 'website' , 
            'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 
            'image' => url('public/img/site/logo.png')];
        $page_title = "Politica e privacidade | ";
        $site = Site::all();
        return view('site.pages.policy' , compact( 'meta_site' , 'page_title', 'site'));
    }

    public function friend() {
        $meta_site = ['url' => url('/') , 
            'title' => "Aluguel e Vendas | Espindola imobiliária" , 
            'type' => 'website' , 
            'description' => 'Espindola imobiliaria - Imobiliária, Casas, Apartamentos, Terrenos, Compra, Venda, Locação de Imóveis , Fortaleza, CE' , 
            'image' => url('public/img/site/logo.png')];
        $page_title = "Indique um amigo | ";
        $site = Site::all();
        return view('site.pages.indicate_friend' , compact( 'meta_site' , 'page_title', 'site'));
    }
}
