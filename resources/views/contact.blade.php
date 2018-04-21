@extends('layouts.main')

@section('content')
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Contact</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row pt-4 mb-4">
            <div class="col-lg-7">

                <h2 class="mb-0">Send Us a Message</h2>

                <p class="lead mb-4 mt-1">Contact us or give us a call to discover how we can help.</p>

                <div class="alert alert-success d-none mt-4" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="alert alert-danger d-none mt-4" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
                </div>

                <form action="{{route('contact')}}" method="POST">
                    {{ csrf_field() }}
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{ Session::get('success') }}</p>
                    @endif
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="hidden" name="url" value="contact-page">
                            <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-lg btn-primary mb-4" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-4 col-lg-offset-1">

                <h4 class="text-color-dark mb-1 pb-3">Corporate Headquarters</h4>

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <div id="googlemaps" class="google-map small"></div>

                <ul class="list list-icons mt-4 mb-4">
                    <li><i class="icon-pin icons"></i> <strong>Address:</strong> {{Voyager::setting('site.address')}}</li>
                    <li><i class="icon-call-end icons"></i> <strong>Phone:</strong> {{Voyager::setting('site.phone')}}</li>
                    <li><i class="icon-envelope icons"></i> <strong>Email:</strong> <a href="mailto:{{Voyager::setting('site.email')}}">{{Voyager::setting('site.email')}}</a></li>
                </ul>

            </div>
        </div>

    </div>
@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9S6NLN0Atqhe5fuhJoCIYRtlnVTDDFmo"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    // Map Markers
    var mapMarkers = [{
        address: "Ruko Green Garden Blok A 14 No.44 Jl. Panjang Kedoya, Jakarta Barat 11520",
        html: "<strong>PT. Besta Rekanda </strong><br>Jakarta Barat, 11520",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        },
        popup: true
    }];

    // Map Initial Location
    var initLatitude = -6.164650;
    var initLongitude = 106.762694;;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: (($.browser.mobile) ? false : true),
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 16
    };

    var map = $('#googlemaps').gMap(mapSettings),
        mapRef = $('#googlemaps').data('gMap.reference');

    // Map text-center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

    // Create an array of styles.
    var mapColor = "#cfa968";

    var styles = [{
        stylers: [{
            hue: mapColor
        }]
    }, {
        featureType: "road",
        elementType: "geometry",
        stylers: [{
            lightness: 0
        }, {
            visibility: "simplified"
        }]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers: [{
            visibility: "off"
        }]
    }];

    var styledMap = new google.maps.StyledMapType(styles, {
        name: 'Styled Map'
    });

    mapRef.mapTypes.set('map_style', styledMap);
    mapRef.setMapTypeId('map_style');

</script>
@endsection