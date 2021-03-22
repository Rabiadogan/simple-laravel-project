@extends('front.master')

@section('sablon')
@include('text')

</div>
</div>
</section>
<!-- CONTACT -->
<section id="contact" class="parallax-section">
    <div class="container">
    <div class="row">

    <div class="col-md-offset-3 col-md-6 col-sm-12">
        <div class="section-title">
             <h1>Bize Ulaşın!</h1>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-offset-2 col-md-8 col-sm-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- CONTACT FORM HERE -->
        <form id="contact-form" action="{{ route('iletisim.post') }}" method="post">
            @csrf
             <div class="col-md-6 col-sm-6">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
             </div>

             <div class="col-md-6 col-sm-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
             </div>

             <div class="col-md-12 col-sm-12">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                  <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" required></textarea>
             </div>

             <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4">
                  <div class="section-btn">
                       <button type="submit" class="form-control" id="submit" name="submit"><span data-hover="Send Message">Send Message</span></button>
                  </div>
             </div>
        </form>
    </div>
@endsection
