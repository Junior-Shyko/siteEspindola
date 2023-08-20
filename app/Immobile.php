<?php

namespace SiteEspindola;

use Illuminate\Database\Eloquent\Model;
use DB, Auth;
use Carbon\Carbon;

class Immobile extends Model
{

    protected $primaryKey = 'immobiles_id';

    //
    static public function getDistrinct()
    {
        $immobile =  DB::table('immobiles')->select('immobiles_id', 'immobiles_district', 'immobiles_city')
            ->orderby('immobiles_district', 'ASC')->distinct()->get();

        return $immobile;
    }

    static public function getTypeImmobile()
    {
        $immobile =  DB::table('immobiles')->select('immobiles_type_immobiles')->distinct()->orderby('immobiles_type_immobiles', 'ASC')->get();

        return $immobile;
    }

    static public function getPhotoFeatured($code)
    {
        //adicionar condição em casos de não ter a foto de destaque
        $feature = '';
        $photo_featured = DB::table('photo_immobiles')->where([
            ['photo_immobiles_code_immobile', '=', $code],
            ['photo_immobiles_principal', '=',  1]
        ])->first();

        if (count((array)$photo_featured) > 1) {
            $feature = $photo_featured->photo_immobiles_url;
        } else {
            $feature = $code;
        }
        return $feature;
    }

    static public function getRealtor($code)
    {
        $realtor = DB::table('realtor')->where('realtor_code_imobile', '=', $code)->first();

        return $realtor;
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
        $immobile =  DB::table('immobiles')->select('immobiles_type_immobiles')->distinct()->orderby('immobiles_type_immobiles', 'ASC')->get();

        return $immobile;
    }

    static public function getRent()
    {
        //DB::enableQueryLog();
        return Immobile::whereIn('immobiles_type_publication', [1, 3])->get();
        // DB::getQueryLog();
    }

    static public function getSale()
    {
        return Immobile::whereIn('immobiles_type_publication', [2, 1])->get();
    }

    static public function getCityAll()
    {
        $city =  Immobile::select('immobiles_city')->distinct()->orderby('immobiles_city', 'ASC')->get();
        return $city;
    }

    static public function getTypeRental($option)
    {

        $type_rental = [];
        switch ($option) {
            case 'alugar':
                $type_rental = [1, 3];
                break;
            case 'comprar':
                $type_rental = [2, 1];
                break;
            case 'ambos':
                $type_rental = [1, 0];
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
        $subCityrequest   = array("-(Fortaleza)", "-(Fortaleza)", "-(Fortaleza)", "-(Fortaleza)");
        $query = str_replace($cityAllRequest, $subCityrequest, $request);
        $remove_setence_query = explode('-(Fortaleza),', $query);

        $query_search = [];
        foreach ($remove_setence_query as  $value) {
            $query_search[] = trim($value);
        }

        return $query_search;
    }

    static public function getOrderFile($type_search, $order)
    {
        if ($type_search == 'alugar') {
            $file = 'immobiles_rental_price';
        } else {
            $file = 'immobiles_selling_price';
        }
        $list = "";
        switch ($order) {
            case '1': //menos área
                $file = 'immobiles_total_area';
                $list = 'asc';
                break;
            case '2': #maior área
                $file = 'immobiles_total_area';
                $list = 'desc';
                break;
            case '3': #menor valor                    
                $list = 'asc';
                break;
            case '4': #maior valor                   
                $list = 'desc';
                break;
        }

        return [$file, $list];
    }

    static function searchAdvanced($request,  $typePublication)
    {
        $price = [$request['price_min'], $request['price_max']];
        $area  = [$request['area_min'],  $request['area_max']];
        //CONVERTENDOS OS INDICES DO ARRAY PARA INTEIRO
        $area = array_map('intval', $area);
        $immobile = Immobile::when($request, function ($query) use ($request) {
            //TIPO DE IMOVEL
            if (count($request['immobiles_type_immobiles']) == 1) {
                return $query->where('immobiles_type_immobiles', $request['immobiles_type_immobiles']);
            } elseif (count($request['immobiles_type_immobiles']) >= 1) {
                return $query->whereIn('immobiles_type_immobiles', $request['immobiles_type_immobiles']);
            }
        })->when($request, function ($query) use ($request) {
            //PESQUISANDO POR CIDADE
            if (isset($request['immobiles_city'])) {
                if (count($request['immobiles_city']) == 1) {
                    return $query->where('immobiles_city', $request['immobiles_city']);
                } elseif (count($request['immobiles_city']) >= 1) {
                    return $query->whereIn('immobiles_city', $request['immobiles_city']);
                }
            }
        })->when($request, function ($query) use ($request) {
            //PESQUISANDO POR DOMITÓRIO        
            if (isset($request['immobiles_qtd_dormitory'])) {
                if ($request['immobiles_qtd_dormitory'] == 1) {
                    return $query->where('immobiles_qtd_dormitory', $request['immobiles_qtd_dormitory']);
                }
                if ($request['immobiles_qtd_dormitory'] == '+5') {
                    return $query->where('immobiles_qtd_dormitory', '>', 5);
                } else {
                    return $query->where('immobiles_qtd_dormitory', '<=', $request['immobiles_qtd_dormitory']);
                }
            }
        })->when($request, function ($query) use ($request) {
            //PESQUISANDO POR VAGAS DE GARAGEM
            if (isset($request['immobiles_qtd_uncovered_jobs'])) {
                if ($request['immobiles_qtd_uncovered_jobs'] == 1) {
                    return $query->where('immobiles_qtd_uncovered_jobs', $request['immobiles_qtd_uncovered_jobs']);
                }
                if ($request['immobiles_qtd_uncovered_jobs'] == '5') {
                    return $query->where('immobiles_qtd_uncovered_jobs', '>', 5);
                } else {
                    return $query->where('immobiles_qtd_uncovered_jobs', '<=', $request['immobiles_qtd_uncovered_jobs']);
                }
            }
        })->when($request, function ($query) use ($price) {
            //PESQUISANDO POR VAGAS DE GARAGEM
            if (in_array(null, $price)) {
                unset($price);
            } else {
                return $query->whereBetween('immobiles_rental_price', $price);
            }
        })->when($request, function ($query) use ($area) {
            //PESQUISANDO POR VAGAS DE GARAGEM
            if (in_array(null, $area)) {
                unset($area);
            } else {
                return $query->whereBetween('immobiles_total_area', $area);
            }
        })->whereIn('immobiles_type_publication', $typePublication)->get();

        return $immobile;
    }

    //FORMATANDO A DATA PARA PADÃO AMERICANO
    static public function DataBRtoMySQL($DataBR)
    {

        $DataBR = str_replace(array(" – ", "-", " ", " "), " ", $DataBR);
        list($data) = explode(" ", $DataBR);
        return implode("-", array_reverse(explode("/", $data)));
    }

    static public function xml()
    {
        $carbon = Carbon::now();
        // $url = "https://imob.valuegaia.com.br/integra/midia.ashx?midia=GaiaWebServiceImovel&p=5n9UCbUpZaPJa4ffzP%2bSZQdXvGH%2bBktSruRMsJ6O1aw%3d";
        $url = "http://www.valuegaia.com.br/integra/midia.ashx?midia=GaiaWebServiceImovel&p=00%2Flzqjgm%2BFEk6fq3ROvWw%3D%3D";
        // $data = file_get_contents($url);
        // $xml = simplexml_load_string($data);
        $xml = simplexml_load_file($url, "SimpleXMLElement", LIBXML_NOCDATA);
        $br = "<br/>";
        //$xml->Imoveis->Imovel->pluck('CodigoImovel');
        //APAGANDO TODOS OS REGISTROS
        DB::table('immobiles')->delete(); //limpando imoveis
        DB::table('photo_immobiles')->delete(); //limpando fotos dos imoveis
        DB::table('realtor')->delete();
        //DB::table('relation_guarantee_immobile')->delete();//limpando relação de imovel e garantias
        $imovel = [];
        //VARIÁVEL PARA SOMAR O TOTAL DE NÓS DO XML
        $totalImmobile = 0;
        echo "<p>Aguarde um momento...</p>";
        try {
            foreach ($xml->Imoveis->Imovel as $value) {
                $totalImmobile = ($totalImmobile + 1);
                foreach ($value->corretor as $dataCorretor) {
                    DB::table('realtor')->insert([
                        'realtor_name' => $dataCorretor->nome,
                        'realtor_fixo' => $dataCorretor->telefone,
                        'realtor_mobile' => $dataCorretor->celular,
                        'realtor_email' => $dataCorretor->email,
                        'realtor_photo' => $dataCorretor->foto,
                        'realtor_code_imobile' => $value->CodigoImovel
                    ]);
                }
                //$dt = Carbon::createFromFormat('Y-m-d H:i:s', $value->DataCadastro);
                // echo "Codigo: ".$value->CodigoImovel." | Bairro: ".$value->Bairro. " | Finalizade: ".$value->Finalidade." para ".$value->TipoLocacao;
                //    echo "PreçoVenda = ".gettype($value->PrecoVenda)."\n";
                //    echo "Valor da venda = ".$value->PrecoVenda.' do imóvel '.$value->CodigoImovel;
                if ($value->PrecoVenda == "") {
                    $precoVenda = 0.00;
                    $temporada = $value->PrecoLocacaoTemporada;
                    //echo "venda" . $precoVenda;
                } else {
                    $precoVenda = $value->PrecoVenda;
                }
                if ($value->PrecoLocacaoTemporada == "") {
                    $temporada = 0.00;
                    //echo "temporada" . $temporada;
                } else {
                    $temporada = $value->PrecoLocacaoTemporada;
                }
                if ($value->FrenteMar == "") {
                    $frenteMar = 0;
                } else {
                    $frenteMar = $value->FrenteMar;
                }
                if ($value->BeiraMar == "") {
                    $BeiraMar = 0;
                } else {
                    $BeiraMar = $value->BeiraMar;
                }
                if ($value->Adega == "") {
                    $adega = 0;
                } else {
                    $adega = $value->Adega;
                }
                if ($value->QuadraPoliEsportiva == "") {
                    $quadraPoliEsportiva = 0;
                } else {
                    $quadraPoliEsportiva = $value->QuadraPoliEsportiva;
                }
                if ($value->CampoFutebol == "") {
                    $campoFutebol = 0;
                } else {
                    $campoFutebol = $value->CampoFutebol;
                }
                if ($value->Mobiliado == "") {
                    $mobiliado = 0;
                } else {
                    $mobiliado = $value->Mobiliado;
                }
                if ($value->PrecoLocacao == "") {
                    $precoLocacao = 0;
                } else {
                    $precoLocacao = $value->PrecoLocacao;
                }
                if ($value->PrecoIptu == "") {
                    $precoIptu = 0;
                } else {
                    $precoIptu = $value->PrecoIptu;
                }
                if ($value->PrecoCondominio == "") {
                    $precoCondominio = 0;
                } else {
                    $precoCondominio = $value->PrecoCondominio;
                }
                if ($value->PortaoEletronico == "") {
                    $portaoEletronico = 0;
                } else {
                    $portaoEletronico = $value->PortaoEletronico;
                }
                if ($value->QtdAndar == "") {
                    $qutdAndar = 0;
                } else {
                    $qutdAndar = $value->QtdAndar;
                }
                if ($value->Churrasqueira == "") {
                    $churrasqueira = 0;
                } else {
                    $churrasqueira = $value->Churrasqueira;
                }
                if ($value->Piscina == "") {
                    $piscina = 0;
                } else {
                    $piscina = $value->Piscina;
                }
                if ($value->NumeroAndar == "") {
                    $numeroAndar = 0;
                } else {
                    $numeroAndar = $value->NumeroAndar;
                }
                Immobile::insert(
                    [
                        'immobiles_cep' => $value->CEP,
                        'immobiles_address' => $value->Endereco,
                        'immobiles_number' => $value->Numero,
                        'immobiles_complement' => $value->ComplementoEndereco,
                        'immobiles_district' => $value->Bairro,
                        'immobiles_city' => $value->Cidade,
                        'immobiles_state' => $value->Estado,
                        'immobiles_reference_point' => $value->PontoReferenciaEndereco,
                        'immobiles_code' => $value->CodigoImovel,
                        'immobiles_status' => "Ativo",
                        'immobiles_date_register' => Immobile::DataBRtoMySQL($value->DataCadastro),
                        'immobiles_date_update' => Immobile::DataBRtoMySQL($value->DataAtualizacao),
                        'immobiles_property_title' => $value->TituloImovel,
                        'immobiles_finality' => $value->Finalidade,
                        'immobiles_publish' => $value->Publicar,
                        'immobiles_type_publication' => $value->PublicaValores,
                        'immobiles_name_condo' => $value->NomeCondominio,
                        'immobiles_business_status' => $value->StatusComercial,
                        'immobiles_type_offer' => $value->TipoOferta,
                        'immobiles_selling_price' => $precoVenda,
                        'immobiles_type_rental' => $value->TipoLocacao,
                        'immobiles_rental_price' => $precoLocacao,
                        'immobiles_rental_warranty' => $value->GarantiaLocacao,
                        'immobiles_board_on_site' => $value->PlacaNoLocal,
                        'immobiles_useful_area' => $value->AreaUtil,
                        'immobiles_total_area' => $value->AreaTotal,
                        'immobiles_metrica_unit' => $value->UnidadeMetrica,
                        'immobiles_property_default' => $value->PadraoImovel,
                        'immobiles_property_localization' => $value->PadraoLocalizacao,
                        'immobiles_ocupacion' => $value->Ocupacao,
                        'immobiles_accept_negotiation' => $value->AceitaNegociacao,
                        'immobiles_face_immobile' => $value->FaceImovel,
                        'immobiles_qtd_dormitory' => $value->QtdDormitorios,
                        'immobiles_qtd_suite' => $value->QtdSuites,
                        'immobiles_qtd_toilet' => $value->QtdBanheiros,
                        'immobiles_qtd_uncovered_jobs' => $value->QtdVagas, 'immobiles_ps' => $value->Observacao,
                        'immobiles_latitude' => $value->latitude,
                        'immobiles_longitude' => $value->longitude,
                        'immobiles_iptu_price' => $precoIptu,
                        'immobiles_condominium_price' => $precoCondominio,
                        'immobiles_type_immobiles' => $value->TipoImovel,
                        'immobiles_tour_virtual' => $value->TourVirtual,
                        'created_at' => $carbon->now(), 'updated_at' => $carbon->now(),
                        'immobiles_price_season' => $temporada,
                        'immobiles_face' => $value->FaceImovel,
                        'immobiles_electronic_door' => $portaoEletronico,
                        'immobiles_front_sea' => $frenteMar,
                        'immobiles_sea_shore' => $BeiraMar,
                        'immobiles_wine_house' => $adega,
                        'immobiles_elevator' => $qutdAndar, //estou registrando o total de andar
                        'immobiles_barbecue_grill' => $churrasqueira,
                        'immobiles_poll' => $piscina,
                        'immobiles_sports_court' => $quadraPoliEsportiva,
                        'immobiles_soccer_field' => $campoFutebol,
                        'immobiles_furnished' => $mobiliado,
                        'immobiles_floors' => $numeroAndar
                    ]
                );
                //   $count_gaarantia = count($value->GarantiaLocacao->Garantia);
                // for ($i=0; $i < $count_gaarantia; $i++) { 
                //    // echo ' Guarantia: '.$value->GarantiaLocacao->Garantia[$i].' - ';
                //     //LeaseGuarantee::createLeaseGuarantee($value->CodigoImovel, $value->GarantiaLocacao->Garantia[$i]);                 
                // }             

                foreach ($value->Fotos->Foto as $photo) {
                    //echo 'Foto: <img src="'.$photo->URLArquivo.'" style="height:128px; width:128px; "></img>';
                    DB::table('photo_immobiles')->insert([
                        'photo_immobiles_name'          => $photo->NomeArquivo,
                        'photo_immobiles_type'          => $photo->FotoTipo,
                        'photo_immobiles_url'           => $photo->URLArquivo,
                        'photo_immobiles_principal'     => $photo->Principal,
                        'photo_immobiles_code_immobile' => $value->CodigoImovel
                    ]);
                }
            }
            $idUser = 0;
            (Auth::user() == null) ? $idUser = 0 : $idUser = Auth::user()->id;
            DB::table('settings')->update(['settings_date_last_sync' => $carbon->now(), 'settings_total_immobile_sync' => $totalImmobile, 'settings_id_user_sync' =>  $idUser]);
            return redirect('sincronismo');
        } catch (Exception $e) {
            return redirect()->back()->with(['error', 'Ocorreu um erro de conexão, tente mais tarde']);
        }
    }
}
