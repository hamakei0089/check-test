@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Fashionably Late
      </a>
    </div>
    <ul class="header-nav">
+ @if (Auth::check())
    <form action="/logout" method="post">
      @csrf
      <button class="header-nav__button">logout</button>
    </form>
  </li>
+ @endif
</ul>
  </header>

  <main>
    <div class="thanks__content">
      <div class="thanks__heading">
        <h2>Admin</h2>
        <button class="form__button-submit" type="submit">Go for it!!!!!!!!!!!!!!!!</button>
      </div>
    </div>
  </form>
  </main>
</body>

</html>