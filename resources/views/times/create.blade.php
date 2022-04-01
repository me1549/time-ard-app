@extends('app')

@section('title', '打刻')

@include('nav')

@section('content')
  <div class="container" align="center">
    <div class="row">
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-body pt-3">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('times.store') }}">
                @include('times.form')
                <div class="text-center">
                  <button type="submit" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark">打刻する</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
