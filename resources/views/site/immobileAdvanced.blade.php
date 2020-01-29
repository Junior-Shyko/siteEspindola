<style type="text/css">
  
.select_filter{
  margin-top: -20px !important;
}
</style>

<section class="module no-padding-top filter" id="filterAdvancedImmobile">

  <div class="tabs ui-tabs ui-corner-all ui-widget ui-widget-content" style="display: block;">

    <div class="filter-header">
      <div class="container">
          <ul role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
            <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1">Alugar</a></li>
          <li role="tab" id="tab-2-li" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2">Comprar</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#tabs-3" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3">Ambos</a></li>
          </ul>
      </div><!-- end container -->
    </div><!-- end filter header -->

    <div class="container">

      <div id="tabs-1" class="ui-tabs-hide ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
        {{ Form::open(['url' => 'busca-avancada' , 'method' => 'get']) }}
        {{ Form::hidden('immobiles_type_publication' , 'alugar') }}
        @include('site.form.form_filter_advanced')
        {{ Form::close() }}

      </div><!-- end tab 1 -->

      <div id="tabs-2" class="ui-tabs-hide ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">
        {{ Form::open(['url' => 'busca-avancada' , 'method' => 'get']) }}
        {{ Form::hidden('immobiles_type_publication' , 'comprar') }}
         @include('site.form.form_filter_advanced')
        {{ Form::close() }}
      </div><!-- end tab 2 -->

      <div id="tabs-3" class="ui-tabs-hide ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
        {{ Form::open(['url' => 'busca-avancada' , 'method' => 'get']) }}
        {{ Form::hidden('immobiles_type_publication' , 'ambos') }}
        @include('site.form.form_filter_advanced')
        {{ Form::close() }}
      </div><!-- end tab 3 -->

    </div><!-- end container -->
  </div><!-- end tabs -->
</section>