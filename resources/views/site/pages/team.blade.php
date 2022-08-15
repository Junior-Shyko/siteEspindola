@extends('layouts.site')
@section('title', 'Espíndola Imobiliária')
@section('sidebar')
@parent
@endsection
@section('content')
<section class="subheader_page">
    <div class="container">
        <h1>Equipe Espíndola</h1>
        <div class="clear"></div>
    </div>
    <div class="container">
        <div>
            Home <i class="fa fa-angle-right"></i>
            <a href="#" class="">A Espíndola</a>
            <i class="fa fa-angle-right"></i>
            <a href="#" class="">Equipe Espíndola</a>
        </div>
        <div class="clear"></div>
    </div>
</section>
<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!--
                    <div class="property-listing-header">
                        <span class="property-count left">8 agents found</span>
                        <form action="#" method="get" class="right">
                            <select name="sort_by" onchange="this.form.submit();" style="display: none;">
                                <option value="date_desc">New to Old</option>
                                <option value="date_asc">Old to New</option>
                                <option value="price_desc">Properties (High to Low)</option>
                                <option value="price_asc">Properties (Low to High)</option>
                            </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 204px;" title=""><a class="chosen-single"><span>New to Old</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
                        </form>
                        <div class="property-layout-toggle right">
                            <a href="agent-listing-grid-sidebar.html" class="property-layout-toggle-item"><i class="fa fa-th-large"></i></a>
                            <a href="agent-listing-row-sidebar.html" class="property-layout-toggle-item active"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="clear"></div>
                    </div>end agent listing header -->
                <div class="row">
                  
                </div>
                <!-- end row -->
            </div>

</section>
@push('scripts')
    <script src="/js/team.js"></script>
@endpush

@include('site.footer')
@endsection