
$(function () {
    //PNotify.prototype.options.styling = "fontawesome";
    function copiarTexto(){
        //captura o elemento input
       
    };
    $("#btn_shared").click(function (e) { 
        e.preventDefault();
        console.log('captura');
        $("#inputShared").show();
        const inputTest = document.querySelector("#inputShared");
        
        //seleciona todo o texto do elemento
        inputTest.select();
        //executa o comando copy
        //aqui Ã© feito o ato de copiar para a area de trabalho com base na seleÃ§Ã£o
        document.execCommand('copy');
        $("#inputShared").hide();
    });
    $("#submitSearch").click(function (event) {
        $("#img-load").show();
        $("#submitSearch").text('Enviando mensagem');
        $.ajax({
            type: "post",
            url: domain_complet+'/enviar-mensagem',
            data: $("#form-enviar-mensagem").serialize(),
            dataType: "json",
            success: function (response) {
                $("#img-load").hide();
                $("#submitSearch").text('Mensagem Enviada');
            }
        });
    });

    $("#selectDistrictForm").select2();
    $(".typefilteradvanced").chosen({
        no_results_text: "Oops, NÃ£o foi encontrado!",
        
    });
    $(".cityfilteradvanced").chosen();
    $(".districtfilteradvanced").chosen();
    
});

$(document).ready(function () {
    
    //Abrindo modal de propaganda na home
    $("#myMarketingEspindola").modal('show');
    $("#btn_send_contact").html('Enviar Mensagem');
    $("#img-load").hide();
    $("#inputShared").hide();
    //modal contato
    $("#id_icon_send").hide();
    $("#info_send_contact").hide();

    /*PARA OS VALORES*/
    $("#input-range-prince").ionRangeSlider({
        type: "double",
        min: 0,
        max: 3500,
        from: 150,
        to: 1200,
        prefix: "R$ "
    });

    $(".price-filter-advanced").ionRangeSlider({
        type: "double",
        min: 0,
        max: 200000,
        from: 150,
        to: 2500,
        from_max: 2500,
        prefix: "R$ ",
        grid: true
    });
    $(".price-filter-advanced-sale").ionRangeSlider({
        type: "double",
        min: 0,
        max: 2000000,
        from: 50000,
        to: 780000,
        prefix: "R$ ",
        grid: true
    });

    $(".area-filter-advanced").ionRangeSlider({
        type: "simgle",
        min: 0,
        max: 3000,
        from: 10,
        to: 1200

    });
    //OCUTANDO DIV DE BUSCA AVANÃ‡ADA  
    $("#filterAdvancedImmobile").hide();
    $("#code-mobile").hide();
    all_district = [];
    //URL COM DADOS
 
    $.get(domain_complet + '/todos-bairros', function (data) {
        //LOOP        
        $.each(data, function (index, val) {
            //PREENCHANDO O ARRAY            
            all_district.push(val);
        });
});



    function split(val) {
        return val.split(/,\s*/);
    }

    function extractLast(term) {
        return split(term).pop();
    }

    $(".input-autocomplet").on("keydown", function (event) {
        if (event.keyCode === $.ui.keyCode.TAB && $(this).autocomplete("instance").menu.active) {
            event.preventDefault();            
        }
    }).autocomplete({
        minLength: 3,
        source: function source(request, response) {
            // delegate back to autocomplete, but extract the last term
            response($.ui.autocomplete.filter(all_district, extractLast(request.term)));
        },
        focus: function focus() {
            // prevent value inserted on focus
            return false;
        },
        select: function select(event, ui) {
            var terms = split(this.value);
            // remove the current input
            terms.pop();
            // add the selected item
            terms.push(ui.item.value);
            // add placeholder to get the comma-and-space at the end
            terms.push("");
            this.value = terms.join(", ");
            return false;
            //$('#district').val(ui.item.immobiles_district);
            console.log(ui.item.immobiles_district);
        }
    });

    $("#immobile-type-advanced").SumoSelect({
        nativeOnDevice: ['Android', 'BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
        search: true,
        searchText: 'Escolha o Tipo',
        placeholder: 'Escolha ou pesquise',
        captionFormat: '{0} selecionado',
        captionFormatAllSelected: ' {0} selecionados',
        locale: ['OK', 'Sair', 'Tudo'],
        selectAll: true

    });
    // $("#immobiles_district").SumoSelect({
    //     nativeOnDevice: ['Android', 'BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
    //     search: true,
    //     searchText: 'Escolha o bairro',
    //     placeholder: 'Escolha ou pesquise',
    //     captionFormat: '{0} selecionado',
    //     locale: ['OK', 'Sair', 'Tudo'],
    //     selectAll: true
    // });
    $("#type-immobile").SumoSelect({
        nativeOnDevice: ['Android', 'BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
        search: true,
        searchText: 'Escolha o Tipo',
        placeholder: 'Qual o ImÃ³vel?',
        captionFormat: '{0} selecionado',
        noMatch: 'Nada encontrado "{0}"',
        locale: ['OK', 'Cancelar']
    });
    $("#type-immobile-by").SumoSelect({
        nativeOnDevice: ['Android', 'BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
        search: true,
        searchText: 'Escolha o Tipo',
        placeholder: 'Qual o ImÃ³vel?',
        captionFormat: '{0} selecionado',
        noMatch: 'Nada encontrado "{0}"',
        locale: ['OK', 'Cancelar']
    });
    $("#district-by").SumoSelect({
        nativeOnDevice: ['Android', 'BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
        search: true,
        searchText: 'Escolha o Tipo',
        placeholder: 'Tipo do ImÃ³vel',
        captionFormat: '{0} selecionado'
    });
    $("#type-immobile-all").SumoSelect({
        nativeOnDevice: ['Android', 'BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
        search: true,
        searchText: 'Escolha o Tipo',
        placeholder: 'Qual o ImÃ³vel?',
        captionFormat: '{0} selecionado'
    });
    $("#district-all").SumoSelect({
        nativeOnDevice: ['Android', 'BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
        search: true,
        searchText: 'Escolha o Tipo',
        placeholder: 'Tipo do ImÃ³vel',
        captionFormat: '{0} selecionado'
    });
    $("#city_index").SumoSelect({
        nativeOnDevice: ['Android', 'BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
        search: true,
        searchText: 'Escolha ou pesquise',
        placeholder: 'Onde quer morar?',
        captionFormat: '{0} selecionado'
    });
    $(".dormitoryfilteradvanced").SumoSelect({
        nativeOnDevice: ['Android', 'BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
        placeholder: 'Escolha ou pesquise',
        search: true,
        searchText: 'Quartos',
        captionFormat: '{0} selecionado',
        locale: ['OK', 'Sair', 'Tudo'],
        selectAll: true
    });

    $("#filterAdvanced").click(function () {

        $("#filterAdvancedImmobile").show();

        if ($(".typefilteradvanced").val() == "Terreno") {
            $('.dormitoryfilteradvanced')[0].sumo.disable();
        }
    });

    /*DIV DE FILTRO AVANÃ‡ADO*/
    // $(".typefilteradvanced").SumoSelect({
    //     search: true,
    //     searchText: 'Escolha ou pesquise',
    //     placeholder: 'Qual o tipo?',
    //     captionFormat: '{0} selecionado',
    //     forceCustomRendering: true
    // });
    // $(".typefilteradvanced").select2();
    // $(".cityfilteradvanced").SumoSelect({
    //     search: true,
    //     searchText: 'Escolha ou pesquise',
    //     placeholder: 'Qual a cidade?',
    //     captionFormat: '{0} selecionado',
    //     forceCustomRendering: true
    // });

    // $(".districtfilteradvanced").SumoSelect({
    //     search: true,
    //     searchText: 'Escolha ou pesquise',
    //     placeholder: 'Qual o bairro?',
    //     captionFormat: '{0} selecionado',
    //     forceCustomRendering: true
    // });

    $(".dormitoryfilteradvanced").SumoSelect({
        search: true,
        searchText: 'Escolha ou pesquise',
        placeholder: 'Quantos Quartos?',
        captionFormat: '{0} selecionado',
        forceCustomRendering: true
    });

    $(".jobsfilteradvanced").SumoSelect({
        search: true,
        searchText: 'Escolha ou pesquise',
        placeholder: 'Quantas Vagas?',
        captionFormat: '{0} selecionado',
        forceCustomRendering: true
    });

    //DESABILIZANDO SELECT
    function disabledItens() {
        $('.dormitoryfilteradvanced')[0].sumo.disable();
        $(".jobsfilteradvanced")[0].sumo.disable();
        // $(".typefilteradvanced")[0].sumo.disableItem(0);
        // $(".typefilteradvanced")[0].sumo.disableItem(1);
        // $(".typefilteradvanced")[0].sumo.disableItem(2);
    }
    //HABILITANDO SELECT
    function enabledItens() {
        $('.dormitoryfilteradvanced')[0].sumo.enable();
        $(".jobsfilteradvanced")[0].sumo.enable();
        // $(".typefilteradvanced")[0].sumo.enableItem(0);
        // $(".typefilteradvanced")[0].sumo.enableItem(1);
        // $(".typefilteradvanced")[0].sumo.enableItem(2);
    }
    //SELECIONANDO A OPÃ‡ÃƒO PARA DESABILITAR OUTROS ITENS
    // $(".typefilteradvanced").change(function (event) {
    //     //FORÃ‡ANDO A SELEÃ‡ÃƒO
    //     $(".typefilteradvanced")[0].sumo.selectItem($(".typefilteradvanced").val());
    //     //DESABILITANDO EM CASO DE ESCOLHER TERRENO OU SALA
    //     if ($(".typefilteradvanced").val() == "Terreno" || $(".typefilteradvanced").val() == "Sala") {
    //         disabledItens();
    //     } else if ($(".typefilteradvanced").val() != "Terreno") {
    //         enabledItens();
    //     }
    // });

    $(".typefilteradvanced").click(function (event) {
        selec = $(".typefilteradvanced").find('.optWrapper').addClass('select_filter');
        console.log(selec);
        //console.log('dentro '+sumo);
        console.log($(".typefilteradvanced").val());
        //$(".typefilteradvanced").find('.optWrapper').addClass('select_filter');
    });

    $("#btn_send_contact").click(function (event) {
        /* Act on the event */
        $("#btn_send_contact").html('Enviando Mensagem');
        $("#id_icon_send").show();
        // console.log($("#form_contact").serializeJSON() );
        $.ajax({
            url: domain_complet + '/enviar-mensagem',
            type: 'POST',
            dataType: 'JSON',
            data: $("#form_contact").serializeJSON(),
            success: function success(data) {
                $("#info_send_contact").show();
                $("#btn_send_contact").html('Enviar Nova Mensagem');
                $("#id_icon_send").hide();
            }
        }).done(function () {
            console.log("success");
        }).fail(function () {
            console.log("error");
        }).always(function () {
            console.log("complete");
        });
    });

    $(".form_datetime").datetimepicker({
        format: 'dd/mm/yyyy hh:ii',
        autoclose: true,
        language: 'pt-BR'
    });
  
}); // FIM READY

$(function () {
    //$('[data-toggle="popover"]').popover();
    $('#read_services_juri').popover({
        trigger: 'click',
        content: '<p>O Departamento JurÃ­dico da <b>EspÃ­ndola ImobiliÃ¡ria </b> Ã© o escritÃ³rio de advocacia <a href="https://www.itamarespindola.adv.br/" target="_blank">Itamar EspÃ­ndola Advogados</a> Associados, empresa do mesmo grupo,' 
        +'que dispÃµe de uma equipe prÃ³pria de advogados especialistas em Direito ImobiliÃ¡rio, garantindo maior seguranÃ§a nas negociaÃ§Ãµes.</p>',
        html: true
    });
    $('.read_services').popover({
        trigger: 'hover',
    })
    
})