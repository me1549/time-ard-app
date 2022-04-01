@extends('app')

@section('title', 'トップ')

@section('content')
@include('nav') 
    <h1 align="center">現在の時刻</h1>
    <div id="myClock" align="center"
        style="font:bold 40pt Times New Roman; color:#008888;">
    </div>
    <div class="container">
    @foreach($times as $time) 
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
            <div class="font-weight-bold">
              <h3>{{ $time->user->name }}さんが{{ $time->created_at->format('Y/m/d H:i') }}に{!! nl2br(e( $time->body )) !!}しました。</h3>
            </div> 
        </div>
      </div>
    @endforeach
  </div>

@endsection
