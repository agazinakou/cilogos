@extends('layouts.app')

@section('title', 'Accueil')

@push('styles')

@endpush

@section('content')

<div class="">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 bg-light rounded-3 p-5 mb-4 text-center">
                <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                <p class="sub-title">
                    CI Logos, une collection <span class="text-orange">open source</span> de logos <br>
                    d'entreprise ivoiriennes de haute qualité pour une <br> utilisation gratuite.
                </p>
                <button type="button" class="btn btn-secondary">
                    <i class="bi bi-check-circle-fill text-light pb-1"></i>
                    <span>Contribuer sur github</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
            <h2>Change the background</h2>
            <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron
                look. Then, mix and match with additional component themes and more.</p>
            <button class="btn btn-outline-light" type="button">Example button</button>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h2>Add borders</h2>
            <p>Or, keep it light and add a border for some added definition to the boundaries of your
                content. Be sure to look under the hood at the source HTML here as we've adjusted the
                alignment and sizing of both column's content for equal-height.</p>
            <button class="btn btn-outline-secondary" type="button">Example button</button>
        </div>
    </div>
</div>

<!-- Main -->
<div class="crt-main">
    <div class="crt-main__title">
        <div class="crt-main__title-img">
            <img src="{{ asset('assets/images/logo.png') }}">
        </div>
        <h1>
            CI Logos, une collection <a href="https://github.com/CreativeTeamCi/cilogos" target="_blank">open source</a> de logos d'entreprise ivoiriennes de haute qualité pour une utilisation gratuite.
        </h1>
        <a href="https://github.com/CreativeTeamCi/cilogos" target="_blank">
            <button class="crt__btn__contribute">
                <i class="fa fa-github"></i>
                &nbsp;
                Contribuer sur GitHub
            </button>
        </a>

        <a href="{{ route('submission.index') }}">
            <button class="crt__btn__submission">
                <i class="fa fa-paper-plane"></i>
                &nbsp;
                Soumettre un logo
            </button>
        </a>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    @foreach ($business_logo as $logo)
        <div class="crt__logo contsearch3">
            <div class="crt__logo__holder">
                <div class="crt__logo__image">
                    <img src='{{ asset($logo->logo_png) }}' alt='{{ $logo->business_name }}'>
                </div>
                <div class="crt__logo__download">
                    <div class="crt__logo__download__overlay">
                        @if ($logo->logo_svg)
                            <a href="{{ asset($logo->logo_svg) }}" download="{{ $logo->business_name }} SVG Logo">
                                <span class="crt__logo__download__overlay--svg">
                                    Télécharger SVG
                                </span>
                            </a>
                        @endif

                        <a href="{{ asset($logo->logo_png) }}" download="{{ $logo->business_name }} PNG Logo">
                            <span class="crt__logo__download__overlay--png">
                                Télécharger PNG
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="crt__logo__text">
                <p class="crt__logo__text--primary gsearch">
                    @if ($logo->url)
                        <a href="{{ $logo->url }}" target="_blank">{{ $logo->business_name }}</a>
                    @else
                        {{ $logo->business_name }}
                    @endif
                </p>
                <p class="crt__logo__text--secondary gsearch">{{ $logo->activity_area }}</p>
            </div>
        </div> <!-- end crt-logo -->
        <div id="crt__search"></div>
    @endforeach
</div>
@endsection

@push('scripts')

@endpush
