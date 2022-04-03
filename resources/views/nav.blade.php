<nav class="navbar navbar-expand navbar-dark" style="background-color: #7cc7e8;">

  <a class="navbar-brand" href="/"><i class="far fa-sticky-note mr-1"></i>勤怠管理</a>

  <ul class="navbar-nav ml-auto">

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">新規スタッフ登録</a>
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
      <a class="nav-link" href="/" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    </li>
    @endauth

    

</nav>