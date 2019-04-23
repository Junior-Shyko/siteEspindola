
@extends('layouts.site')

@section('content')
<select>
    
</select>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <select class="testselect2" multiple="multiple">
                @foreach($type as $types)
                <option value="">{{ $types->immobiles_type_immobiles }}</option>

                @endforeach
            </select>
        </div>
    </div>
</div>
@push('scripts')
<script type="text/javascript">
	  jQuery(document).ready(function($) {
  $('.testselect2').SumoSelect();
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>

@endpush
@endsection
