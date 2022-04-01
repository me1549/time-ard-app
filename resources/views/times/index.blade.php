@extends('app')

@section('title', 'トップ')

@section('content')
@include('nav') 
    <h1 align="center">現在の時刻</h1>
    <div id="myClock" align="center"
        style="font:bold 40pt Times New Roman; color:#008888;">
    </div>
    <div class="container">
    @foreach($times as $time) {{--この行を追加--}} 
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
          <i class="fas fa-user-circle fa-3x mr-1"></i>
          <div>
            <div class="font-weight-bold">
              {{ $time->user->name }} {{--この行を変更--}}
            </div> 
            <div class="font-weight-lighter">
              {{ $time->created_at->format('Y/m/d H:i') }} {{--この行を変更--}}
            </div>
          </div>
        </div>
      </div>
    @endforeach {{--この行を追加--}}
  </div>

@endsection
