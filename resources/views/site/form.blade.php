

{{ Form::text('region-immobile' , '', 
[
'id' => "district" , 
'class' => 'form-control select-form input-autocomplet ', 
'placeholder' => "Digite os bairros ou a cidade"
]) }}
{{-- <select name="region-immobile[]" class="select-form type-immobile" id="district"  title="Escolha um ou mais de um bairro" data-placeholder="Escolha um ou mais de um" multiple="multiple"> 
</select> --}}

{{-- {{Form::select('region-immobile[]', $immobile->pluck('immobile_district', 'immobiles_id'), null, ['id' => 'selectDistrictForm','placeholder' => 'Pick a size...'])}} --}}

<button type="submit" class="btn btn-success btn-buscar"> Buscar </button>