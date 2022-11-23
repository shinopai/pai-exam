@extends('layouts.admin') @section('content')
<ul class="home__list">
  <li class="home__item">
    <a href="{{ route('exams.index') }}">検定一覧</a>
  </li>
</ul>
@endsection
