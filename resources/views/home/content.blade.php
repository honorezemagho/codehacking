@include('home.head')
<body class="">
<div id="wrapper">
    <!-- preloader -->
 {{--   <div id="preloader">
        <div id="spinner">
            <div class="preloader-dot-loading">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>--}}

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-top bg-theme-colored sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="widget text-white">
                            <i class="fa fa-clock-o text-white"></i> Heures de Service: Lundi - Samedi : 6.00 am - 19.00 pm, Dimanche Fermé
                            <br>
                            Paiements Acceptés <img src="{{asset('dentalpro/images/payment-card-logo-sm.png')}}" style="height: 20px" alt="" class="text-center">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <ul class="list-inline text-right flip sm-text-center">
                                <li>
                                    <a class="text-white" href="#">Questions Fréquentes</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a class="text-white" href="#!">Chat</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a class="text-white" href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle p-0 bg-lighter xs-text-center">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <a class="menuzord-brand pull-left flip sm-pull-center mb-15" href="#"> UBER<span  class="text-theme-colored ">AMBULANCE </span></a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase">Addressez - Nous Votre Mail Aujourd'hui</a>
                            <h5 class="font-13 text-black m-0"> Email : contact@uberambulance.com</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="fa fa-phone-square text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase">Appellez - Nous Maintenant</a>
                            <h5 class="font-13 text-black m-0">tel: +(237) 672 432 567</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="fa fa-building-o text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase">Notre Emplacement</a>
                            <h5 class="font-13 text-black m-0"> Akwa, Immeuble LGQ</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider">
            <div class="container-fluid p-0">

                <!-- START REVOLUTION SLIDER 5.0.7 -->
                <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                    <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('images/patient4.png') }}" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('images/patient4.png') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                     id="slide-1-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="full"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                     data-start="1000"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-3"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['165','135','105','130']"
                                     data-fontsize="['46','46','40','36']"
                                     data-lineheight="['70','60','50','45']"
                                     data-fontweight="['800','700','700','700']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Commander <span class="text-theme-colored">Votre Ambulance</span>
                                    <span class="text-theme-color-2">Maintenant</span>
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['320','260','220','220']"
                                     data-fontsize="['18','18','16','13']"
                                     data-lineheight="['30','30','28','25']"
                                     data-fontweight="['600','600','600','600']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;">Nous vous proposons les meilleurs services de déplacement <br>de vos malades pour votre satisfaction.
                                </div>

                                <!-- LAYER NR. 4 -->

                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-5"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['400','340','300','300']"
                                     data-fontsize="['18','18','16','16']"
                                     data-lineheight="['30','30','30','30']"
                                     data-fontweight="['600','600','600','600']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored btn-xl">En Savoir Plus</a> <a href="#" class="btn btn-dark btn-theme-colored btn-xl">Commander Maintenant</a>
                                </div>

                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('images/Doctor4.jpg') }}" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('images/Doctor4.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                     id="slide-2-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="full"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                     data-start="1000"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-3"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['165','135','105','130']"
                                     data-fontsize="['46','40','36','36']"
                                     data-lineheight="['70','60','50','45']"
                                     data-fontweight="['800','700','700','700']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Rencontrer un <span class="text-theme-colored">Médécin </span> n'a <span class="text-theme-color-2">jamains été facile</span>
                    </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['320','260','220','220']"
                                     data-fontsize="['18','18','16','13']"
                                     data-lineheight="['30','30','28','25']"
                                     data-fontweight="['600','600','600','600']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;">Nous vous proposons des médécins disponibles dans votre secteur <br> pour vos besoins.
                                </div>
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-5"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['400','340','300','300']"
                                     data-fontsize="['18','18','16','16']"
                                     data-lineheight="['30','30','30','30']"
                                     data-fontweight="['600','600','600','600']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored btn-xl">Prendre un Rendez - Vous</a>
                                </div>
                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('images/default.jpg') }}" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('images/default.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                     id="slide-3-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="full"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                     data-start="1000"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);">
                                </div>

                                <!-- LAYER NR. 2 -->


                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-3"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['165','135','105','130']"
                                     data-fontsize="['46','40','36','30']"
                                     data-lineheight="['70','60','50','45']"
                                     data-fontweight="['800','700','700','700']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Pour toute <span class="text-theme-colored">urgence</span> ENVOYEZ <span class="text-theme-colored">ALERTE</span>
                                    <span class="text-theme-color-2"> au  </span> <span class="text-theme-colored">8735</span>
                                </div>


                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['320','260','220','220']"
                                     data-fontsize="['18','18','16','13']"
                                     data-lineheight="['30','30','28','25']"
                                     data-fontweight="['600','600','600','600']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;">C'est Gratuit, Service Disponible 24H/24, 7J/7 pour vos urgences.
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-3-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']"
                                     data-y="['top','top','top','top']" data-voffset="['360','290','260','260']"
                                     data-fontsize="['18','18','16','16']"
                                     data-lineheight="['30','30','30','30']"
                                     data-fontweight="['600','600','600','600']"
                                     data-width="['700','650','500','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored btn-xl">En Savoir Plus</a>
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption rs-parallaxlevel-0"
                                     id="slide-3-layer-5"
                                     data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['360','290','260','260']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;"
                                     data-mask_out="x:0;y:0;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-responsive="off"
                                     style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
                    </div>
                </div>

                <!-- END REVOLUTION SLIDER -->
                <script type="text/javascript">
                    var tpj=jQuery;
                    var revapi34;
                    tpj(document).ready(function() {
                        if(tpj("#rev_slider_home").revolution == undefined){
                            revslider_showDoubleJqueryError("#rev_slider_home");
                        }else{
                            revapi34 = tpj("#rev_slider_home").show().revolution({
                                sliderType:"standard",
                                jsFileLocation:"js/revolution-slider/js/",
                                sliderLayout:"fullwidth",
                                dottedOverlay:"none",
                                delay:4000,
                                navigation: {
                                    keyboardNavigation:"on",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation:"off",
                                    onHoverStop:"on",
                                    touch:{
                                        touchenabled:"on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    }
                                    ,
                                    arrows: {
                                        style:"zeus",
                                        enable:true,
                                        hide_onmobile:true,
                                        hide_under:600,
                                        hide_onleave:true,
                                        hide_delay:200,
                                        hide_delay_mobile:800,
                                        tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                        left: {
                                            h_align:"left",
                                            v_align:"center",
                                            h_offset:30,
                                            v_offset:0
                                        },
                                        right: {
                                            h_align:"right",
                                            v_align:"center",
                                            h_offset:30,
                                            v_offset:0
                                        }
                                    },
                                    bullets: {
                                        enable:true,
                                        hide_onmobile:true,
                                        hide_under:600,
                                        style:"metis",
                                        hide_onleave:true,
                                        hide_delay:200,
                                        hide_delay_mobile:800,
                                        direction:"horizontal",
                                        h_align:"center",
                                        v_align:"bottom",
                                        h_offset:0,
                                        v_offset:30,
                                        space:5,
                                        tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                                    }
                                },
                                viewPort: {
                                    enable:true,
                                    outof:"pause",
                                    visible_area:"80%"
                                },
                                responsiveLevels:[1240,1024,778,480],
                                gridwidth:[1240,1024,778,480],
                                gridheight:[600,550,500,450],
                                lazyType:"none",
                                parallax: {
                                    type:"scroll",
                                    origo:"enterpoint",
                                    speed:400,
                                    levels:[5,10,15,20,25,30,35,40,45,50],
                                },
                                shadow:0,
                                spinner:"off",
                                stopLoop:"off",
                                stopAfterLoops:-1,
                                stopAtSlide:-1,
                                shuffle:"off",
                                autoHeight:"off",
                                hideThumbsOnMobile:"off",
                                hideSliderAtLimit:0,
                                hideCaptionAtLimit:0,
                                hideAllCaptionAtLilmit:0,
                                debugMode:false,
                                fallbacks: {
                                    simplifyAll:"off",
                                    nextSlideOnWindowFocus:"off",
                                    disableFocusListener:false,
                                }
                            });
                        }
                    }); /*ready*/
                </script>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </section>



        <section id="itiform">
            <div class="container">
                    <div class="row equal-height">
                        <div class="col-md-5 ">
                            <h2><span class="text-theme-colored text-center">Définir votre itinéraire </span></h2>
                            <h3 class="text-center">Formulaire</h3>

                            {!! Form::open(['method' =>'POST', 'action' => 'ItineraireController@store']) !!}

                            <div class = "form-group">
                                {!! Form::label('name', 'Nom et Prénoms') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('depart', 'Mon Quartier') !!}
                                {!! Form::text('depart', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('destination', 'Destination') !!}
                                {!! Form::text('destination', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::label('date', 'Date et Heure') !!}
                                {!! Form::text('date', null, ['class' => 'form-control datetimepicker']) !!}
                            </div>


                            <div class = "form-group">
                                {!! Form::label('price', 'Prix') !!}
                                {!! Form::number('price',  null, ['class' => 'form-control']) !!}
                            </div>


                            <div class = "form-group">
                                {!! Form::label('phone', 'Téléphone:') !!}
                                {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group">
                                {!! Form::Submit ('Valider', ['class' => 'btn btn-primary'] ) !!}
                            </div>


                            {!! Form::close() !!}

                            @include('includes.form_error')

                            <div class="col-md-7 ">
                                <h2><span class="text-center text-theme-colored">Prendre un Rendez - Vous avec un Médécin</span></h2>
                                    <h3 class="text-center"> Formulaire</h3>
                                {!! Form::open(['method' =>'POST', 'action' => 'ItineraireController@store']) !!}

                                <div class = "form-group">
                                    {!! Form::label('name', 'Nom et Prénoms') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class = "form-group">
                                    {!! Form::label('depart', 'Mon Quartier') !!}
                                    {!! Form::text('depart', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class = "form-group">
                                    {!! Form::label('date', 'Date et Heure') !!}
                                    {!! Form::text('date', null, ['class' => 'form-control datetimepicker']) !!}
                                </div>

                                <div class = "form-group">
                                    {!! Form::label('price', 'Prix') !!}
                                    {!! Form::number('price',  null, ['class' => 'form-control']) !!}
                                </div>


                                <div class = "form-group">
                                    {!! Form::label('phone', 'Téléphone:') !!}
                                    {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
                                </div>

                                <div class = "form-group">
                                    {!! Form::Submit ('Valider', ['class' => 'btn btn-primary'] ) !!}
                                </div>


                                {!! Form::close() !!}

                                @include('includes.form_error')
                            </div>
                        </div>
                        </div>
                    </div>
            <br><br><br>
        </section>


        <section>
            <div class="container pt-0 pb-0">
                <div class="section-content">
                    <div class="row equal-height-inner mt-sm-0" data-margin-top="-110px">
                        <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                            <div class="sm-height-auto bg-theme-colored">
                                <div class="p-30">
                                    <h3 class="text-uppercase text-white mt-0 text-center" >Docteurs QUALIFIES</h3>
                                    <p class="text-white text-center">Nous vous proposons des docteurs qualifiés.</p>
                                    <a href="#about" class="btn btn-border btn-circled btn-transparent btn-sm center-block">Contactez Un Médécin</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                            <div class="sm-height-auto bg-theme-colored2">
                                <div class="p-30">
                                    <h3 class="text-uppercase text-white mt-0">Heures de Service </h3>
                                    <div class="opening-hours">
                                        <ul class="list-unstyled text-white">
                                            <li class="clearfix"> <span> Lundi à Vendredi </span>
                                                <div class="value"> 8:00H - 18:00H </div>
                                            </li>
                                            <li class="clearfix"> <span>Tues - Thur</span>
                                                <div class="value">8:00H - 12:00H</div>
                                            </li>
                                            <li class="clearfix"> <span>Dimanche</span>
                                                <div class="value">Fermé</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="btn btn-border btn-circled btn-transparent btn-sm mt-20 center-block" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/form-appointment.html">Contactez - Nous </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                            <div class="sm-height-auto bg-theme-colored">
                                <div class="p-30 text-center ">
                                    <h3 class="text-uppercase text-white mt-0 text-center" >PLATEFORME DISPONIBLE 24H/24, 7J/7</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                            <div class="sm-height-auto bg-theme-colored2">
                                <div class="p-30">
                                    <h2 class="text-uppercase text-white mt-0 text-center">NUMERO VERT</h2>
                                    <h2 class="text-white text-center">Envoyez  <span class="text-theme-colored"> URGENCE </span>  au </h2>
                                    <h1 class="text-white text-center"> 8070 </h1>
                                    <p class="text-white text-center">Service GRATUIT et Disponible même sans Connection Internet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: about -->
        <section id="about">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="twentytwenty-container">
                                <img src="{{ asset('dentalpro/images/bg1.jpg') }}" alt="">
                                <img src="{{ asset('dentalpro/images/bg1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h2 class="font-size-38 mt-0 text-center">Nous Sommes  <span class="text-theme-colored"> 100% CONFORMES</span> AUX NORMES EN VIGUEUR</h2>
                            <p class="lead text-center">Nous Sommes certifiées par le ministère de la santé publique et reconnus par plusiurs grands hopitaux du Cameroun.
                            </p>
                            <ul class="list-inline">
                                <li><img src="{{ asset('dentalpro/images/awards/1.png') }}" alt=""></li>
                                <li><img src="{{ asset('dentalpro/images/awards/2.png') }}" alt=""></li>
                                <li><img src="{{ asset('dentalpro/images/awards/3.png') }}" alt=""></li>
                            </ul>
                            <a class="btn btn-theme-colored btn-lg btn-circled mt-30 center-block">En Savoir Plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Services -->
        <section class="bg-silver-light">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 line-height-1 theme-colored2">Services <i class="fa fa-ambulance text-theme-colored  sm-display-block flip sm-pull-none"></i></h2>
                            <p> Nos services à votre portée!</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box iconbox-theme-colored2 left media p-0">
                                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="flaticon-medical-ambulance9 text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h3 class="media-heading heading">Transport Ambulatoire</h3>
                                    <p>Pour le transport de vos malades  afin d'assurer votre fierté.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box iconbox-theme-colored2 left media p-0">
                                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="fa fa-medkit text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h3 class="media-heading heading">Mise en relations avec des médécins</h3>
                                    <p>Des Médécins Compétents et disponibles et à votre portée</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box iconbox-theme-colored2 left media p-0">
                                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="fa fa-headphones text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h3 class="media-heading heading">Support Qualifié</h3>
                                    <p> Nous sommes à votre écoute pour tout souci ou préoccupation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Funfact -->
        <section class="divider parallax layer-overlay overlay-theme-colored-8" data-bg-img="http://placehold.it/1920x873" data-parallax-ratio="0.7">
            <div class="container"><h1 class="text-black text-uppercase font-weight-600 text-center">Nos Chiffres</h1>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-smile mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="1754" class="animate-number text-white font-42 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase font-weight-600">Patients Heureux</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa fa-ambulance mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white font-42 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase font-weight-600">Ambulances Louées</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa fa-user-md mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white font-42 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase font-weight-600"> Docteurs Disponibles</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-global mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="2400" class="animate-number text-white font-42 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase font-weight-600">Requêtes Traitées</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start Doctors Section:-->
        <section id="doctors">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class=" mt-0 line-height-1"><span class="text-theme-colored">Médécins Disponibles </span></h2>
                            <p>Quelques Contacts de Médécins disponibles sur la plateforme pour vos besoins!</p>
                        </div>
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-4col">
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5">Dr. Linda Feldman</h4>
                                        <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Root Canals Dentist</h6>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5">Dr. Jessica Tailor</h4>
                                        <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Implant Surgeon </h6>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5">Dr. Nicholas Fleming</h4>
                                        <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Cosmetic Dental Surgeon</h6>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5">Dr. Brian Adam</h4>
                                        <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Restorative Dentist</h6>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Call To Action -->
        <section  class="divider parallax layer-overlay overlay-theme-colored-8" data-bg-img="http://placehold.it/1920x873">
            <div class="container">
                <div class="call-to-action">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="text-white"><i class="pe-7s-call text-white"></i><a class="text-white" href="#"> 8796</a></h2>
                            <h2 class="text-white">Contactez ce numéro vert gratuitement en cas d'urgence.</h2>
                            <a href="#" class="btn btn-default btn-theme-colored2 mt-20">Contactez - Nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--start testimonial Section-->
        <section class="divider parallax layer-overlay overlay-theme-colored-8" data-parallax-ratio="0.1" data-bg-img="http://placehold.it/1920x873">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase text-white mt-0 line-height-1">Témoignages</h2>
                            <p class="text-white">Avis de Clients ayants déja utilisés notre plateforme</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-3col" data-dots="true">
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Gavin Smith</h5>
                                                <h6 class="title text-white">Patient Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Jonathan Smith</h5>
                                                <h6 class="title text-white">Patient Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Mary James</h5>
                                                <h6 class="title text-white">Patient Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/100x100"> </div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-theme-colored2">Lucy brown</h5>
                                                <h6 class="title text-white">Patient Heureux</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            $(function () {
                $('.datetimepicker').datetimepicker();
            });
        </script>

@include('home.footer')