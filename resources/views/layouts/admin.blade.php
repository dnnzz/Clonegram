@extends('admin-lte::layouts.main')
@section('sidebar-menu')
<ul class="sidebar-menu">
  <li class="header">Menü</li>
  <li class="active">
    <a href="{{ route('admin') }}">
      <i class="fa fa-user"></i>
      <span>Kullanıcılar</span>
    </a>
  </li>
</ul>
@endsection
