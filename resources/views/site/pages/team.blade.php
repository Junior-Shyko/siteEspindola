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
                        @foreach ($team as $item)
                            @if($item->teamSites_office == 'Gestor')
                                <div class="col-lg-12">
                                    <div class="agent agent-row agent-row-sidebar shadow-hover">
                                        <a href="#" class="agent-img">
                                            <div class="img-fade"></div>
                                            <img src="{{url('public/img/site/'.$item->teamSites_photo)}}"
                                                 alt="{{$item->teamSites_name}}">
                                        </a>
                                        <div class="agent-content">
                                            <div class="agent-details">
                                                <h4><a href="#">{{$item->teamSites_name}}</a></h4>
                                                @php
                                                    if ($item->teamSites_name == 'Yara Pereira') {
                                                        echo '<p><i class="fa fa-tag icon"></i>Gerente Agência Aldeota</p>';
                                                    }elseif ($item->teamSites_name == 'Bernadete Espíndola'){
                                                        echo '<p><i class="fa fa-tag icon"></i>Diretora</p>';
                                                    }else{
                                                        echo '<p><i class="fa fa-tag icon"></i>Gestor Executivo</p>';
                                                    }
                                                @endphp
                                                <p><i class="fa fa-phone icon"></i>{{$item->teamSites_phoneOne}}</p>
                                            </div>
                                            <div class="agent-text">
                                                <p>{{$item->teamSites_text}}</p>
                                            </div>
                                            @if ($item->teamSites_linkedin != '')
                                                <div class="agent-footer center">
                                                    <ul class="social-icons circle">
                                                        <li><a href="{{$item->teamSites_linkedin}}"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            @endif

                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            @endif
                            {{--                        @if($item->teamSites_office == 'Comercial')--}}
                            {{--                        <div class="col-lg-12">--}}
                            {{--                            <h4>Comercial.</h4>--}}
                            {{--                            <img src="public/img/site/divider-half-blue.png" alt=""><br><br>--}}
                            {{--                            <div class="agent agent-row agent-row-sidebar shadow-hover">--}}
                            {{--                                <a href="#" class="agent-img">--}}
                            {{--                                    <div class="img-fade"></div>--}}
                            {{--                                    <img src="{{url('public/img/site/'.$item->teamSites_photo)}}" alt="{{$item->teamSites_name}}">--}}
                            {{--                                </a>--}}
                            {{--                                <div class="agent-content">--}}
                            {{--                                    <div class="agent-details">--}}
                            {{--                                        <h4><a href="#">{{$item->teamSites_name}}</a></h4>--}}
                            {{--                                        <p><i class="fa fa-tag icon"></i>Comercial</p>--}}
                            {{--                                        <p><i class="fa fa-phone icon"></i>{{$item->teamSites_phoneOne}}</p>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="agent-text">--}}
                            {{--                                        <p>{{$item->teamSites_text}}</p>--}}
                            {{--                                    </div>--}}
                            {{--                                    @if ($item->teamSites_linkedin != '')--}}
                            {{--                                    <div class="agent-footer center">--}}
                            {{--                                        <ul class="social-icons circle">--}}
                            {{--                                            <li><a href="{{$item->teamSites_linkedin}}"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--                                        </ul>--}}
                            {{--                                    </div>--}}
                            {{--                                    @endif--}}
                            {{--                                </div>--}}
                            {{--                                <div class="clear"></div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        @endif--}}

                            @if ($item->teamSites_office == 'Administração de Imóveis')
                                <div class="col-lg-12">
                                    <h4>Administração de Imóveis</h4>
                                    <img src="public/img/site/divider-half-blue.png" alt=""><br><br>
                                    <div class="agent agent-row agent-row-sidebar shadow-hover">
                                        <a href="#" class="agent-img">
                                            <div class="img-fade"></div>
                                            <img src="{{url('public/img/site/'.$item->teamSites_photo)}}"
                                                 alt="{{$item->teamSites_name}}">
                                        </a>
                                        <div class="agent-content">
                                            <div class="agent-details">
                                                <h4><a href="#">{{$item->teamSites_name}} </a></h4>
                                                <p><i class="fa fa-tag icon"></i>Administração de Imóveis</p>
                                                <p><i class="fa fa-phone icon"></i>{{$item->teamSites_phoneOne}}</p>
                                            </div>
                                            <div class="agent-text">
                                                <p>{{$item->teamSites_text}}</p>
                                            </div>
                                            @if ($item->teamSites_linkedin != '')
                                                <div class="agent-footer center">
                                                    <ul class="social-icons circle">
                                                        <li><a href="{{$item->teamSites_linkedin}}"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            @endif

{{--                            @if ($item->teamSites_office == 'Administrativo e Financeiro')--}}
{{--                                @php $infoFinan = 0; @endphp--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <h4>Administrativo & Financeiro</h4>--}}
{{--                                    <img src="public/img/site/divider-half-blue.png" alt=""><br><br>--}}
{{--                                    <div class="agent agent-row agent-row-sidebar shadow-hover">--}}
{{--                                        <a href="#" class="agent-img">--}}
{{--                                            <div class="img-fade"></div>--}}
{{--                                            <img src="{{url('public/img/site/'.$item->teamSites_photo)}}"--}}
{{--                                                 alt="{{$item->teamSites_name}}">--}}
{{--                                        </a>--}}
{{--                                        <div class="agent-content">--}}
{{--                                            <div class="agent-details">--}}
{{--                                                <h4><a href="#">{{$item->teamSites_name}} </a></h4>--}}
{{--                                                <p><i class="fa fa-tag icon"></i>Administrativo & Financeiro</p>--}}
{{--                                                <p><i class="fa fa-phone icon"></i>{{$item->teamSites_phoneOne}}</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="agent-text">--}}
{{--                                                <p>{{$item->teamSites_text}}</p>--}}
{{--                                            </div>--}}
{{--                                            @if ($item->teamSites_linkedin != '')--}}
{{--                                                <div class="agent-footer center">--}}
{{--                                                    <ul class="social-icons circle">--}}
{{--                                                        <li><a href="{{$item->teamSites_linkedin}}"><i--}}
{{--                                                                        class="fa fa-linkedin"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                        <div class="clear"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}

                            @if ($item->teamSites_office == 'Equipe Jurídico')
                                <div class="col-lg-12">
                                    <h4>Equipe Jurídico</h4>
                                    <img src="public/img/site/divider-half-blue.png" alt=""><br><br>
                                    <div class="agent agent-row agent-row-sidebar shadow-hover">
                                        <a href="#" class="agent-img">
                                            <div class="img-fade"></div>
                                            <img src="{{url('public/img/site/'.$item->teamSites_photo)}}"
                                                 alt="{{$item->teamSites_name}}">
                                        </a>
                                        <div class="agent-content">
                                            <div class="agent-details">
                                                <h4><a href="#">{{$item->teamSites_name}} </a></h4>
                                                <p><i class="fa fa-tag icon"></i>Jurídico</p>
                                                <p><i class="fa fa-phone icon"></i>{{$item->teamSites_phoneOne}}</p>
                                            </div>
                                            <div class="agent-text">
                                                <p>{{$item->teamSites_text}}</p>
                                            </div>
                                            @if ($item->teamSites_linkedin != '')
                                                <div class="agent-footer center">
                                                    <ul class="social-icons circle">
                                                        <li><a href="{{$item->teamSites_linkedin}}"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    </div>
                    <!-- end row -->
                </div>

    </section>
    @include('site.footer')
@endsection