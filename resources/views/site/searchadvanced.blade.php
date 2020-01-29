<div class="widget widget-sidebar advanced-search">
    <h4><span>Busca Avançada</span> <img src="{{ url('img/site/divider-half-white.png') }}" alt="" /></h4>
    {{ Form::open(['url' => 'searchadvance']) }}
    <div class="widget-content box">

        <div class="form-block border">
            <label for="property-location">Tipo de Imóvel</label>
            <select  class="select-form type-immobile" id="immobile-type-advanced" name="immobiles_type_immobiles[]"  data-placeholder="Tipo de imóvel" multiple="multiple" style=" width: 100% !important;">
                @foreach($type as $types)
                <option value="{{ $types->immobiles_type_immobiles }}">{{ $types->immobiles_type_immobiles }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-block border">
            <label for="property-status">Bairros</label>
           
            <select name="immobiles_district[]" class="select-form type-immobile" id="immobiles_district"  title="Escolha um ou mais de um bairro" data-placeholder="Escolha um ou mais de um" multiple="multiple">
                @foreach($district as $districts)
                <option value="{{ $districts->immobiles_district }}">{{ $districts->immobiles_district }} - {{ $districts->immobiles_city }}</option>
                @endforeach   
            </select>
        </div>

        <div class="form-block">
            <label>Preço do aluguel</label>                               
            <input type="text" id="input-range-prince" name="immobiles_rental_price">                                
        </div>
        <div class="form-block border">
            <label>Dormitórios</label>
            {{ Form::selectRange('immobiles_qtd_dormitory', 0, 10 , 2, ['class' => 'form-control', 'required' => 'true']) }}
        </div>
        <div class="form-block border">
            <label>vagas</label>
            {{ Form::selectRange('immobiles_qtd_uncovered_jobs', 0, 10 , 2, ['class' => 'form-control', 'required' => 'true']) }}
        </div>
        <div class="form-block">
            <label>Area</label>
            <input type="number" name="areaMin" class="area-filter border" placeholder="Min" />
            <input type="number" name="areaMax" class="area-filter border" placeholder="Max" />
            <div class="clear"></div>
        </div>
        <div class="form-block">

            {{ Form::submit('Buscar!' , ['class' => 'button', 'id' => 'submitSearch']) }}
        </div>
    </div>
    {{ Form::close() }}
    <!-- end widget content -->
</div>