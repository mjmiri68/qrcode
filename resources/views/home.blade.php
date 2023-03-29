@extends('layouts.master')

@section('content')
<div class="header">
    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="{{asset('assets/img/qrcode.png')}}" class="logo" alt="qrcode">
                    QR CODE
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2">Features</a></li>
                <li><a href="#" class="nav-link px-2">Pricing</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>
    </div>
</div>
<main class="home">

    <div class="mypanel d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
        <div class="container">
            <div class="row">
                <div class="col-6 text-center">
                    @if (isset($qrcode))
                        <img src="{{$qrcode}}" class="qrcode-img" alt="qrcode">
                    @else
                        <img src="{{asset('assets/img/qrcode.png')}}" class="qrcode-img" alt="qrcode">
                    @endif
                </div>
                <div class="col-6">
                    <form method="post">
                        @CSRF
                        <textarea name="qrcode" id="message" class="form textarea"  placeholder="TEXT, URL , ..."></textarea>
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold button">Generate</button> 
                        </div><!-- End Bottom Submit -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
