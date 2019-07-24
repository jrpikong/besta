<aside class="sidebar">

    <ul class="nav nav-list flex-column mb-4 show-bg-active">
        <li class="nav-item"><a class="nav-link {{ (Request::is('services') ? 'active' : '') }}" href="{{route('overview')}}">Overview</a></li>
        @if($service_title)
            @foreach($service_title as $item)
                <li class="nav-item"><a class="nav-link {{ (Request::is('services/'.$item->slug) ? 'active' : '') }}" href="{{route('services',[$item->slug])}}">{{$item->title}}</a></li>
            @endforeach
        @endif
    </ul>

    <h4 class="pt-4 mb-3 text-color-dark">Contact Us</h4>
    <p>Contact us or give us a call to discover how we can help.</p>

    <form action="{{route('contact')}}" method="POST" class="mb-4">
        {{ csrf_field() }}
        @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif
        <div class="form-row">
            <div class="form-group col">
                <label>Your name *</label>
                <input type="hidden" name="url" value="service-page">
                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label>Your email address *</label>
                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label>Subject</label>
                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label>Message *</label>
                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="message" required></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <input type="submit" value="Send Message" class="btn btn-primary mb-4" data-loading-text="Loading...">

                <div class="alert alert-success d-none" id="contactSuccess">
                    Message has been sent to us.
                </div>

                <div class="alert alert-danger d-none" id="contactError">
                    Error sending your message.
                </div>
            </div>
        </div>
    </form>

</aside>