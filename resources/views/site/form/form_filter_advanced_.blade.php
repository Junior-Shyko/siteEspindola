
       <div class="form-group col-md-4 col-xs-12">
         <label>Tipo</label>
         <select name="immobiles_type_immobiles[]" id="" class="form-control typefilteradvanced" multiple="multiple" 
         data-placeholder="Qual o tipo?">
           @foreach($type as $types)
            <option>{{ $types->immobiles_type_immobiles }}</option>
           @endforeach
         </select>
       </div>
        <div class="form-group col-md-4 col-xs-12">
         <label>Cidade</label>
         <select name="immobiles_city[]" class="form-control cityfilteradvanced" multiple="multiple" 
         data-placeholder="Qual a cidade?" >
           @foreach($city_all as $cities)
            <option>{{ $cities->immobiles_city }}</option>
           @endforeach
         </select>
       </div>
 
       <div class="form-group col-md-4 col-xs-12">

         <label>Bairro</label>
         
         <select name="immobiles_district[]" id="" multiple="multiple" class="form-control districtfilteradvanced"
         data-placeholder="Qual a bairro?">
           @foreach($uniqueDistrict as $immobiles)
            <option>{{ $immobiles }}</option>
           @endforeach
         </select>
       </div>
       <div class="form-group col-md-1 col-xs-12">
         <label>Dormitório</label>
         <select name="immobiles_qtd_dormitory" id="immobiles_qtd_dormitory" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>+5</option>
         </select>
       </div>       

      <div class="form-group col-md-2 col-xs-12">
         <label>Garagem</label>
         <select name="immobiles_qtd_uncovered_jobs" id="immobiles_qtd_uncovered_jobs" class="form-control">
            <option value="0">Quantas vagas?</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">+5</option>
         </select>
       </div>
       
        <div class="form-group col-md-3 col-xs-12">
          <label for="">Tamanho desejado</label>
          <div class="input-group col-md-6 pull-left">
              <span class="input-group-addon" id="basic-addon2">Min.</span>
               <input type="number" name="area_min" class="form-control" placeholder="Área mínima" aria-describedby="basic-addon2">
               
             </div> 
             <div class="input-group col-md-6 pull-right">
                <span class="input-group-addon" id="basic-addon2">Máx.</span>
               <input type="number" name="area_max" class="form-control" placeholder="Área Máximo" aria-describedby="basic-addon2">
               
             </div>
         </div>
       
         <div class="form-group col-md-3 col-xs-12">
            <label for="">Faixa de preço</label>
            <div class="input-group col-md-6 pull-left">
                <span class="input-group-addon" id="basic-immobiles_rental_price1">R$ </span>
                 <input type="number" name="price_min" class="form-control" placeholder="Menor" aria-describedby="basic-immobiles_rental_price1">
                 
               </div> 
               <div class="input-group col-md-6 pull-right">
                  <span class="input-group-addon" id="basic-immobiles_rental_price2">R$ </span>
                 <input type="number" name="price_max" class="form-control" placeholder="Maior" aria-describedby="basic-immobiles_rental_price2">
                 
               </div>
           </div>
          

        

        <div class="col-md-3 col-xs-12">
          <label class="label-submit">Submit</label>
          <br>
          <input type="submit" class="button alt" value="Buscar Imóvel">  
        </div>
