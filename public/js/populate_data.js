$(document).on('change', '#f15', function(){makePopulation15()});
$(document).on('change', '#f16', function(){makePopulation16()});
$(document).on('change', '#f17', function(){makePopulation17()});
$(document).on('change', '#f18', function(){makePopulation18()});
$(document).on('change', '#f19', function(){makePopulation19()});
$(document).on('change', '#f21', function(){makePopulation21()});
$(document).on('change', '#f23', function(){makePopulation23()});
$(document).on('change', '#f24', function(){makePopulation24()});
$(document).on('change', '#f25', function(){makePopulation25()});

function makePopulation15() {
    var value_15 = $('#f15').val();
    $.ajax({
        url: '/data/populate',
        type: "post",
        data: {
            'type':15,
            'value_15':value_15,
            '_token': $('input[name=_token]').val()
        },
        success: function(list){
            var str="<option value=''>- Select -</option>"; 

            $.each(list, function (index, value) {
                str+='<option value="'+value.county+'">'+value.county+'</option>';
                //$("#f16").html('<option value="">- Select -</option>');
                //$("#f16").append('<option value="'+value.county+'">'+value.county+'</option>');
            });
            $("#f16").html(str);
        }
    })
}

function makePopulation16() {
    var value_15 = $('#f15').val();
    var value_16 = $('#f16').val();
    $("#f17").html('<option value="">- Select -</option>');
    $("#f21").html('<option value="">- Select -</option>');
    $("#f24").html('<option value="">- Select -</option>');
    $("#f17").val('');
    $("#f21").val('');
    $("#f24").val('');

    $.ajax({
        url: '/data/populate',
        type: "post",
        data: {
            'type':16,
            'value_15':value_15,
            'value_16':value_16,
            '_token': $('input[name=_token]').val()
        },
        success: function(list){
            if(value_15=='prad'){
                $.each(list, function (index, value) {
                    $("#f17").append('<option value="'+value.subdivisio+'">'+value.subdivisio+'</option>');
                });
            }
            if(value_15=='rural'){
                $.each(list, function (index, value) {
                    $("#f21").append('<option value="'+value.l1surnam+'">'+value.l1surnam+'</option>');
                });
            }
            if(value_15=='plss'){
                $.each(list, function (index, value) {
                    $("#f24").append('<option value="'+value.meridian+'">'+value.meridian+'</option>');
                });
            }
        }
    })
}

function makePopulation17() {
    var value_15 = $('#f15').val();
    var value_16 = $('#f16').val();
    var value_17 = $('#f17').val();
    $("#f18").html('<option value="">- Select -</option>');
    $("#f19").html('<option value="">- Select -</option>');
    $("#f20").html('<option value="">- Select -</option>');
    $("#f18").val('');
    $("#f19").val('');
    $("#f20").val('');

    console.log('aaa')
    $.ajax({
        url: '/data/populate',
        type: "post",
        data: {
            'type':17,
            'value_15':value_15,
            'value_16':value_16,
            'value_17':value_17,
            '_token': $('input[name=_token]').val()
        },
        success: function(list){
            $.each(list, function (index, value) {
                console.log('asdasdasd')
                $("#f18").append('<option value="'+value.unit_numbe+'">'+value.unit_numbe+'</option>');
            });

        }
    })
}

function makePopulation18() {
    var value_15 = $('#f15').val();
    var value_16 = $('#f16').val();
    var value_17 = $('#f17').val();
    var value_18 = $('#f18').val();
    $("#f19").html('<option value="">- Select -</option>');
    $("#f20").html('<option value="">- Select -</option>');
    $("#f19").val('');
    $("#f20").val('');

    $.ajax({
        url: '/data/populate',
        type: "post",
        data: {
            'type':18,
            'value_15':value_15,
            'value_16':value_16,
            'value_17':value_17,
            'value_18':value_18,
            '_token': $('input[name=_token]').val()
        },
        success: function(list){
            $.each(list, function (index, value) {
                $("#f19").append('<option value="'+value.block_numb+'">'+value.block_numb+'</option>');
            });
        }
    })
}

function makePopulation19() {
    var value_15 = $('#f15').val();
    var value_16 = $('#f16').val();
    var value_17 = $('#f17').val();
    var value_18 = $('#f18').val();
    var value_19 = $('#f19').val();
    $("#f20").html('<option value="">- Select -</option>');
    $("#f20").val('');

    $.ajax({
        url: '/data/populate',
        type: "post",
        data: {
            'type':19,
            'value_15':value_15,
            'value_16':value_16,
            'value_17':value_17,
            'value_18':value_18,
            'value_19':value_19,
            '_token': $('input[name=_token]').val()
        },
        success: function(list){
                $.each(list, function (index, value) {
                    $("#f20").append('<option value="'+value.lot_number+'">'+value.lot_number+'</option>');
                });

        }
    })
}

function makePopulation21() {
    var value_15 = $('#f15').val();
    var value_16 = $('#f16').val();
    var value_21 = $('#f21').val();
    $("#f22").html('<option value="">- Select -</option>');
    $("#f23").html('<option value="">- Select -</option>');
    $("#f22").val('');
    $("#f23").val('');

    $.ajax({
        url: '/data/populate',
        type: "post",
        data: {
            'type':21,
            'value_15':value_15,
            'value_16':value_16,
            'value_21':value_21,
            '_token': $('input[name=_token]').val()
        },
        success: function(list){
            $.each(list, function (index, value) {
                $("#f23").append('<option value="'+value.l2block+'">'+value.l2block+'</option>');
            });
        }
    })
}

function makePopulation23() {
    var value_15 = $('#f15').val();
    var value_16 = $('#f16').val();
    var value_21 = $('#f21').val();
    var value_23 = $('#f23').val();
    $("#f22").html('<option value="">- Select -</option>');
    $("#f22").val('');

    $.ajax({
        url: '/data/populate',
        type: "post",
        data: {
            'type':23,
            'value_15':value_15,
            'value_16':value_16,
            'value_21':value_21,
            'value_23':value_23,
            '_token': $('input[name=_token]').val()
        },
        success: function(list){
            $.each(list, function (index, value) {
                $("#f22").append('<option value="'+value.l3surnum+'">'+value.l3surnum+'</option>');
            });
        }
    })
}

function makePopulation24() {
    var value_15 = $('#f15').val();
    var value_16 = $('#f16').val();
    var value_24 = $('#f24').val();
    $("#f25").html('<option value="">- Select -</option>');
    $("#f26").html('<option value="">- Select -</option>');
    $("#f25").val('');
    $("#f26").val('');

    $.ajax({
        url: '/data/populate',
        type: "post",
        data: {
            'type':24,
            'value_15':value_15,
            'value_16':value_16,
            'value_24':value_24,
            '_token': $('input[name=_token]').val()
        },
        success: function(list){
            $.each(list, function (index, value) {
                $("#f25").append('<option value="'+value.t_r+'">'+value.t_r+'</option>');
            });
        }
    })
}

function makePopulation25() {
    var value_15 = $('#f15').val();
    var value_16 = $('#f16').val();
    var value_24 = $('#f24').val();
    var value_25 = $('#f25').val();
    $("#f26").html('<option value="">- Select -</option>');
    $("#f26").val('');

    $.ajax({
        url: '/data/populate',
        type: "post",
        data: {
            'type':25,
            'value_15':value_15,
            'value_16':value_16,
            'value_24':value_24,
            'value_25':value_25,
            '_token': $('input[name=_token]').val()
        },
        success: function(list){
            $.each(list, function (index, value) {
                $("#f26").append('<option value="'+value.section+'">'+value.section+'</option>');
            });
        }
    })
}


$( document ).ready(function() {
    setTimeout(function(){
        if($('#f15').val()=='prad'){
            $('.f17').removeClass('jf-hide');
            $('.f18').removeClass('jf-hide');
            $('.f19').removeClass('jf-hide');
            $('.f20').removeClass('jf-hide');
        }
        if($('#f15').val()=='rural'){
            $('.f21').removeClass('jf-hide');
            $('.f22').removeClass('jf-hide');
            $('.f23').removeClass('jf-hide');
        }
        if($('#f15').val()=='plss'){
            $('.f24').removeClass('jf-hide');
            $('.f25').removeClass('jf-hide');
            $('.f26').removeClass('jf-hide');
        }
        }, 3000);

});