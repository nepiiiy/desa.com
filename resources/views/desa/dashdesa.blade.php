@extends('desa.nav')
@section('isi')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider rev_slider_default" data-version="5.0">
                        <ul>

                            @foreach ($gambar as $gam)
                                <!-- SLIDE 1 -->
                                <!-- gambar lingkaran di data thumb-->
                                <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="{{ asset('storage/' . $gam->gambar1) }}"
                                    data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                                    <!-- gambar utama -->
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('storage/' . $gam->gambar1) }}" alt=""
                                        data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                        id="slide-1-layer-1" data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-start="1000" data-basealign="slide" data-responsive_offset="on"
                                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.15);border-color:rgba(0, 0, 0, 1.00);">
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-roboto-slab"
                                        id="rs-1-layer-2" data-x="['left']" data-hoffset="['30']" data-y="['middle']"
                                        data-voffset="['-110']" data-fontsize="['110']" data-lineheight="['120']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:700;">
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-roboto-slab bg-transparent pl-20 pr-20"
                                        id="rs-1-layer-3" data-x="['left']" data-hoffset="['35']" data-y="['middle']"
                                        data-voffset="['-25']" data-fontsize="['35']" data-lineheight="['54']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600; background-color: #60E2FF ;">
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme text-white" id="rs-1-layer-4" data-x="['left']"
                                        data-hoffset="['35']" data-y="['middle']" data-voffset="['35','35','40']"
                                        data-fontsize="['16','18',24']" data-lineheight="['28']" data-width="none"
                                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                    </div>

                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption tp-resizeme" id="rs-1-layer-5" data-x="['left']"
                                        data-hoffset="['35']" data-y="['middle']" data-voffset="['95','105','110']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                                    </div>
                                </li>

                                <!-- SLIDE 2 -->
                                <li data-index="rs-2" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default" data-easeout="default"
                                    data-masterspeed="default"
                                    data-thumb="{{ asset('storage/' . $gam->gambar2) }}"
                                    data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('storage/' . $gam->gambar2) }}" alt=""
                                        data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                        id="slide-2-layer-1" data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-start="1000" data-basealign="slide" data-responsive_offset="on"
                                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 1.00);">
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-roboto-slab pr-20 pl-20"
                                        id="rs-2-layer-2" data-x="['right']" data-hoffset="['30']" data-y="['middle']"
                                        data-voffset="['-90']" data-fontsize="['64']" data-lineheight="['72']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600;  background-color: #60E2FF ;">
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-roboto-slab"
                                        id="rs-2-layer-3" data-x="['right']" data-hoffset="['35']" data-y="['middle']"
                                        data-voffset="['-25']" data-fontsize="['32']" data-lineheight="['54']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600;">
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme text-white text-right" id="rs-2-layer-4"
                                        data-x="['right']" data-hoffset="['35']" data-y="['middle']"
                                        data-voffset="['30']" data-fontsize="['16','18',24']" data-lineheight="['28']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                    </div>

                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption tp-resizeme" id="rs-2-layer-5" data-x="['right']"
                                        data-hoffset="['35']" data-y="['middle']" data-voffset="['95']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                                    </div>
                                </li>

                                <!-- SLIDE 3 -->



                                <li data-index="rs-3" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default" data-easeout="default"
                                    data-masterspeed="default"
                                    data-thumb="{{ asset('storage/' . $gam->gambar3) }}"
                                    data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('storage/' . $gam->gambar3) }}" alt=""
                                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        class="rev-slidebg" data-bgparallax="10" data-no-retina>



                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                        id="slide-3-layer-1" data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-start="1000" data-basealign="slide" data-responsive_offset="on"
                                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.15);border-color:rgba(0, 0, 0, 1.00);">
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-roboto-slab"
                                        id="rs-3-layer-2" data-x="['left']" data-hoffset="['30']" data-y="['middle']"
                                        data-voffset="['-110']" data-fontsize="['110']" data-lineheight="['120']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:700;">
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-roboto-slab pl-20 pr-20"
                                        id="rs-3-layer-3" data-x="['left']" data-hoffset="['35']" data-y="['middle']"
                                        data-voffset="['-25']" data-fontsize="['35']" data-lineheight="['54']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600; background-color: #60E2FF ;">
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme text-white" id="rs-3-layer-4" data-x="['left']"
                                        data-hoffset="['35']" data-y="['middle']" data-voffset="['35','35','40']"
                                        data-fontsize="['16','18',24']" data-lineheight="['28']" data-width="none"
                                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                    </div>

                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption tp-resizeme" id="rs-3-layer-5" data-x="['left']"
                                        data-hoffset="['35']" data-y="['middle']" data-voffset="['95','105','110']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end .rev_slider -->
                </div>
                <script>
                    $(document).ready(function(e) {
                        $(".rev_slider_default").revolution({
                            sliderType: "standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "zeus",
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    style: "metis",
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">title</span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [700, 600, 700, 720],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->
            </div>
        </section>
        <!-- Section: DonetForm & Testimonials -->


        <!-- Script for Donation Form Custom Amount -->
        <script type="text/javascript">
            $(document).ready(function(e) {
                var $donation_form = $("#paypal_donate_form_onetime_recurring");
                //toggle custom amount
                var $custom_other_amount = $donation_form.find("#custom_other_amount");
                $custom_other_amount.hide();
                $donation_form.find("select[name='amount']").change(function() {
                    var $this = $(this);
                    if ($this.val() == 'other') {
                        $custom_other_amount.show().append(
                            '<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>'
                            );
                    } else {
                        $custom_other_amount.children(".input-group").remove();
                        $custom_other_amount.hide();
                    }
                });

                //toggle donation_type_choice
                var $donation_type_choice = $donation_form.find("#donation_type_choice");
                $donation_type_choice.hide();
                $("input[name='payment_type']").change(function() {
                    if (this.value == 'recurring') {
                        $donation_type_choice.show();
                    } else {
                        $donation_type_choice.hide();
                    }
                });


                // submit form on click
                $donation_form.on('submit', function(e) {
                    $("#paypal_donate_form-onetime").submit();
                    var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                    var currency_code = $donation_form.find("select[name='currency_code'] option:selected")
                    .val();
                    var amount = $donation_form.find("select[name='amount'] option:selected").val();
                    var t3 = $donation_form.find("input[name='t3']:checked").val();

                    if (amount == 'other') {
                        amount = $donation_form.find("#input_other_amount").val();
                    }

                    // submit proper form now
                    if ($("input[name='payment_type']:checked", $donation_form).val() == 'recurring') {
                        var recurring_form = $('#paypal_donate_form-recurring');

                        recurring_form.find("input[name='item_name']").val(item_name);
                        recurring_form.find("input[name='currency_code']").val(currency_code);
                        recurring_form.find("input[name='a3']").val(amount);
                        recurring_form.find("input[name='t3']").val(t3);

                        recurring_form.find("input[type='submit']").trigger('click');

                    } else if ($("input[name='payment_type']:checked", $donation_form).val() == 'one_time') {
                        var onetime_form = $('#paypal_donate_form-onetime');

                        onetime_form.find("input[name='item_name']").val(item_name);
                        onetime_form.find("input[name='currency_code']").val(currency_code);
                        onetime_form.find("input[name='amount']").val(amount);

                        onetime_form.find("input[type='submit']").trigger('click');
                    }
                    return false;
                });

            });
        </script>
    </div>

    <!-- Section: Causes -->
    <div>
        <section id="about">
            <div class="container pb-40">
                <div class="section-title text-center">
                    <h2 class="text-uppercase line-bottom-center mt-0">Berita <span class=""
                            style="color: #F26522">Terkini</span></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        </div>
                    </div>
                </div>
                <div class="row multi-row-clearfix">
                    @foreach ($news->take(3) as $item)
                        <div class="col-sm-6 col-md-4">
                            <div class="causes bg-silver-light maxwidth500 mb-30">
                                <div class="thumb" style="height: 200px;">
                                    <img src="{{asset('storage/'.$item->cover)}}" style="width:100%; height: 100%;">
                                </div>
                                <div class="causes-details border-1px bg-white clearfix p-20 pt-10 pb-20" style=" height:205px;">
                                    <h4 class="text-uppercase"><a href="/lihatberita/{id}">{{ Str::limit($item->judul, 45) }}</a></h4>

                                    <p class="mt-20" style="text-align: justify;">{{ Str::limit($item->subjudul, 80) }}</p>
                                    <a href="/lihatberita/{id}" class="btn btn-default btn-xs font-16 mt-10"
                                        style="color: #F26522">Baca </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>




            <div class="container pb-40">
                <div class="section-title text-center">

                    <h2 class="text-uppercase line-bottom-center mt-0">Penghargaan<span class=""
                            style="color: #F26522"> Desa</span></h2><br>
                    <div class="row multi-row-clearfix">

                        @foreach ($award->take(3) as $award)
                            <div class="col-sm-6 col-md-4">
                                <div class="causes bg-silver-light maxwidth500 mb-30">
                                    <div class="thumb" style="height: 200px;">
                                        <img src="{{asset('storage/'.$award->cover)}}" alt="" class="img-fullwidth" style="width:100%; height: 100%;">
                                    </div>
                                    <div class="causes-details border-1px bg-white clearfix p-20 pt-10 pb-20" style=" height:205px;">
                                        <h4 class="text-uppercase"><a href="/lihatpeng/{id}">{{ Str::limit($award->judul, 40) }}</a>
                                        </h4>

                                        <p class="mt-20" style="text-align: justify;">{{ Str::limit($award->subjudul, 70) }}</p>
                                        <a href="/lihatpeng/{id}" class="btn btn-default btn-xs font-16 mt-10"
                                            style="color: #F26522">Baca </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </section>
    </div>
    <!--END Section: Causes -->
@endsection
