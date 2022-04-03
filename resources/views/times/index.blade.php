@extends('app')

@section('title', 'トップ')

@section('content')
@include('nav') 
    <br>
    <h1 align="center">現在の時刻</h1>
    <div id="myClock" align="center"
        style="font:bold 40pt Times New Roman; color:#7cc7e8;">
    </div>
    <div class="container">
    @foreach($times as $time) 
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
            <div class="font-weight-bold">
              <h3>{{ $time->user->name }}さんが{{ $time->created_at->format('Y/m/d H:i') }}に{!! nl2br(e( $time->body )) !!}しました。</h3>
            </div>
            @if( Auth::id() === $time->user_id )
          <!-- dropdown -->
          <div class="ml-auto card-text">
            <div class="dropdown">
              <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-link text-muted m-0 p-2">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $time->id }}">
                  <i class="fas fa-trash-alt mr-1"></i>記録を削除する
                </a>
              </div>
            </div>
          </div>
          <!-- dropdown -->
  
          <!-- modal -->
          <div id="modal-delete-{{ $time->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('times.destroy', ['time' => $time]) }}">
                  @csrf
                  @method('DELETE')
                  <div class="modal-body">
                    勤怠記録を削除します。よろしいですか？
                  </div>
                  <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- modal -->
        @endif
        </div>
      </div>
    @endforeach
  </div>

  <br>
  {{ $times->links('vendor.pagination.simple-bootstrap-4') }}

@endsection
