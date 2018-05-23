<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <title><?php echo (env('APP_GEN_TITLE')); ?></title>

        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="/css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="/css/admin.css"/>
    </head>
<body>

<input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="page-container">
    <div class="page-sidebar">
        <ul class="x-navigation">
            <li style="border-bottom:2px solid white;text-align: center; ">
                <a href="/form" style="font-size:15px!important">Furman Records</a>
                <a href="#" class="x-navigation-control"></a>
            </li>

            @if((strpos(Request::path(),"form")!==false)) <li class="active"> @else <li> @endif
                <a href="/form"><span class="fa fa-users"></span> <span class="xn-text">Form</span></a>
            </li>

            @if((strpos(Request::path(),"edit-review")!==false)) <li class="active"> @else <li> @endif
                <a href="/list"><span class="fa fa-building"></span> <span class="xn-text">Edit/Review</span></a>
            </li>

            @if(Auth::user()->role_id==2)
                @if((strpos(Request::path(),"edit-review")!==false)) <li class="active"> @else <li> @endif
                    <a href="/users"><span class="fa fa-users"></span> <span class="xn-text">Users</span></a>
                </li>
                @endif
        </ul>
    </div>

    <div class="page-content">

        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
            <li class="xn-icon-button">
                <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
            </li>

            <li class="xn-icon-button pull-right last">
                <a href="#"><span class="fa fa-power-off"></span></a>
                <ul class="xn-drop-left animated zoomIn">
                    <li><a href="/logout" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Log Out</a></li>
                </ul>
            </li>
        </ul>

        @yield('layout')

    </div>
</div>


<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="/logout" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <audio id="audio-alert" src="/audio/alert.mp3"  preload="auto"></audio>
    <audio id="audio-fail"  src="/audio/fail.mp3"   preload="auto"></audio>

    <script type="text/javascript" src="/js_template/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js_template/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js_template/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='/js_template/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="/js_template/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="/js_template/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="/js_template/plugins/morris/raphael-min.js"></script>
    <script type="text/javascript" src="/js_template/plugins/morris/morris.min.js"></script>
    <script type='text/javascript' src='/js_template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
    <script type='text/javascript' src='/js_template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
    <script type="text/javascript" src="/js_template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type='text/javascript' src='/js_template/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type="text/javascript" src="/js_template/plugins/owl/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js_template/plugins/moment.min.js"></script>
    <script type="text/javascript" src="/js_template/plugins/daterangepicker/daterangepicker.js"></script>
    <script type='text/javascript' src='/js_template/plugins/bootstrap/bootstrap-select.js'></script>
    <script type='text/javascript' src='/js_template/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
    <script type='text/javascript' src='/js_template/plugins/validationengine/jquery.validationEngine.js'></script>
    <script type='text/javascript' src='/js_template/plugins/jquery-validation/jquery.validate.js'></script>
    <script type='text/javascript' src='/js_template/plugins/maskedinput/jquery.maskedinput.min.js'></script>
    <script type="text/javascript" src="/js_template/settings.js"></script>
    <script type="text/javascript" src="/js_template/plugins.js"></script>
    <script type="text/javascript" src="/js_template/actions.js"></script>






<title>Furman Records</title>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="/css/vendor.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>




<script src="/js/vendor.js"></script>
<script src="/js/populate_data.js"></script>

<script src="/js/jqueryform.com.min.js?ver=v2.1.0&id=jqueryform-c58e31"></script>




<!-- [ Start: Select2 support ] ---------------------------------- -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
<style type="text/css">
    .select2-hidden-accessible {
        opacity: 0;
        width: 1% !important;
    }

    .select2-container .select2-selection--single {
        height: 34px;
        padding-top: 2px;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        border: 1px solid #ccc;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 4px;
    }
</style>

<script type="text/javascript">
    ; (function () {

        function templateResult(obj) {
            if (!obj.id) { return obj.text; }

            var img = $(obj.element).data('imgSrc');
            if (img) {
                return $('<span><img src="' + img + '" class="img-flag" /> ' + obj.text + '</span>');
            };

            return obj.text;
        };

        $(".jf-form select").css('width', '100%'); // make it responsive
        $(".jf-form select").select2({
            templateResult: templateResult
        }).change(function (e) {
            $(e.target).valid();
        });

    })();
</script>
<!-- [ End: Select2 support ] ---------------------------------- -->



<style>
    .gaddress .form-group {
        padding-left: 0px;
    }

    .gaddress .mq-indicator {
        display: none;
    }

    @media only screen and (min-width: 767px) {
        .gaddress .mq-indicator {
            display: block;
            height: 1px;
            margin-top: -19px;
        }

        .gaddress .form-group.city,
        .gaddress .form-group.state,
        .gaddress .form-group.postalCode,
        .gaddress .form-group.country {
            display: inline-block;
            width: 48%;
            vertical-align: top;
        }

    }
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJhZVmtBxBc1_aDYax2wR8P4Dghbqt8CY&libraries=places"></script>

<script type="text/javascript">
    ; (function ($, undefined) {



        var alignRight = function () {

            var docW = $(document).width();

            $('.gaddress').each(function () {

                var $fields = $(this).find('.city,.state,.postalCode,.country'), idx = 0, w = 0;
                $fields.each(function (i, e) {
                    w = parseInt($(e).width());
                    if (1 == idx % 2 && docW >= 768) {
                        $(e).css({ float: 'right' });
                    } else {
                        $(e).css({ float: 'none' });
                    };
                    idx++;
                }); // each

            }); // each

        }; // alignRight

        alignRight();
        $(window).resize(alignRight);



        // $input is a jQuery input object
        var gaComplete = function ($input) {
            var autocomplete,


                initAutocomplete = function () {
                    $input.focus(geolocate);
                    var options = {

                        types: ['address']
                    };
                    autocomplete = new google.maps.places.Autocomplete(
                        $input.get(0),
                        options
                    );
                    autocomplete.addListener('place_changed', fillInAddress);
                }, // initAutocomplete


                fillInAddress = function () {
                    // Get the place details from the autocomplete object.
                    var place = autocomplete.getPlace();
                    $input.closest('.gaddress').find('[data-gaddress-types]').each(function () {

                        var $t = $(this),
                            types = $t.data('gaddress-types').replace(/\s+/g, ' '),
                            orType = types.indexOf(',') !== -1,
                            types = types.split(orType ? ',' : ' '),
                            name = $t.data('gaddress-name'),
                            values = [];

                        if (!(name == 'long_name' || name == 'short_name')) {
                            name = 'long_name';
                        };

                        for (var i = 0; i < place.address_components.length; i++) {
                            var address = place.address_components[i];

                            for (var j = 0; j < types.length; j++) {
                                if (-1 !== $.inArray(types[j], address.types)) {
                                    values.push(address[name]);
                                    if (orType) break; // found one of the defined types
                                };
                            }; // for j

                            if (orType) break; // found one of the defined types
                        };// for i

                        $t.val(values.join(' ')).valid();

                    });
                }, // fillInAddress


                geolocate = function () {
                    if (!navigator.geolocation)
                        return;

                    navigator.geolocation.getCurrentPosition(function (position) {
                        var geolocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        var circle = new google.maps.Circle({
                            center: geolocation,
                            radius: position.coords.accuracy
                        });
                        autocomplete.setBounds(circle.getBounds());
                    });

                };

            // main
            initAutocomplete();

        };


        init = function () {
            $('input.gaddress-autocomplete').each(function () {
                gaComplete($(this));
            });
        };


        $.fn.gaddress = function (method) {
            if ($.fn.gaddress[method]) {
                return $.fn.gaddress[method].apply(this, Array.prototype.slice.call(arguments, 1));
            }
            else if (typeof method === "object" || !method) {
                return initialize.apply(this, arguments);
            }
            else {
                $.error("Method " + method + " does not exist on jQuery.gaddress");
            }
        };

        $.fn.gaddress.init = init;

    })(jQuery);

    $(document).gaddress('init');
</script>

<script type="text/javascript">

    // start jqueryform initialization
    // --------------------------------
    JF.init('#jqueryform-c58e31');

    // watch form element change event to run jqueryform's formlogic
    // ---------------------------------------------------------------
    var logics = [
        //PRAD
        {
            "disabled": false,
            "action": "show",
            "selector": "f17,f18,f19,f20",
            "match": "any",
            "rules": [
                {
                    "disabled": false,
                    "selector": "f15",
                    "condition": "==",
                    "value": "PRAD"
                }
            ]
        },
        {
            "disabled": false,
            "action": "hide",
            "selector": "f17,f18,f19,f20",
            "match": "any",
            "rules": [
                {
                    "disabled": false,
                    "selector": "f15",
                    "condition": "==",
                    "value": "RURAL"
                }
            ]
        },
        {
            "disabled": false,
            "action": "hide",
            "selector": "f17,f18,f19,f20",
            "match": "any",
            "rules": [
                {
                    "disabled": false,
                    "selector": "f15",
                    "condition": "==",
                    "value": "PLSS"
                }
            ]
        },
        // PLSS
        {
            "disabled": false,
            "action": "show",
            "selector": "f24,f25,f26",
            "match": "any",
            "rules": [
                {
                    "disabled": false,
                    "selector": "f15",
                    "condition": "==",
                    "value": "PLSS"
                }
            ]
        },

        {
            "disabled": false,
            "action": "hide",
            "selector": "f24,f25,f26",
            "match": "any",
            "rules": [
                {
                    "disabled": false,
                    "selector": "f15",
                    "condition": "==",
                    "value": "PRAD"
                }
            ]
        },
        {
            "disabled": false,
            "action": "hide",
            "selector": "f24,f25,f26",
            "match": "any",
            "rules": [
                {
                    "disabled": false,
                    "selector": "f15",
                    "condition": "==",
                    "value": "RURAL"
                }
            ]
        },
        //RURAL
        {
            "disabled": false,
            "action": "show",
            "selector": "f21,f23,f22",
            "match": "any",
            "rules": [
                {
                    "disabled": false,
                    "selector": "f15",
                    "condition": "==",
                    "value": "RURAL"
                }
            ]
        },
        {
            "disabled": false,
            "action": "hide",
            "selector": "f21,f23,f22",
            "match": "any",
            "rules": [
                {
                    "disabled": false,
                    "selector": "f15",
                    "condition": "==",
                    "value": "PRAD"
                }
            ]
        },
        {
            "disabled": false,
            "action": "hide",
            "selector": "f21,f23,f22",
            "match": "any",
            "rules": [
                {
                    "disabled": false,
                    "selector": "f15",
                    "condition": "==",
                    "value": "PLSS"
                }
            ]
        }
    ];
    $('input,input:radio,select').change(function () {
        $.formlogic({ logics: logics });
    });
</script>

</body>

</html>











