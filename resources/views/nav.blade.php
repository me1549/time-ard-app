<nav class="navbar navbar-expand navbar-dark blue-gradient">

  <a class="navbar-brand" href="/"><i class="far fa-sticky-note mr-1"></i>勤怠管理</a>

  <ul class="navbar-nav ml-auto">

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li>
    @endguest

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>
    @endguest

    @auth
    <li class="nav-item">
      <a class="nav-link" href="{{ route('times.create') }}"><i class="fas fa-pen mr-1"></i>打刻する</a>
    </li>
    @endauth

    @auth
    <li class="nav-item">
      <a class="nav-link" href="">ログアウト</a>
    </li>
    @endauth

    

</nav>