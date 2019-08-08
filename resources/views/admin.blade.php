@extends('layouts.admin')

@section('content-title', 'Panel')
@section('content-subtitle', 'Kullanıcılar')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 table-responsive">
                      <table class="table table-bordered table-hover">
                          <thead>
                          <tr>
                              <th class="text-center">
                                  Kullanıcı Adı
                              </th>
                              <th class="text-center">
                                  Email
                              </th>
                              <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                              </th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($user as $users)
                          <tr>
                              <td>
                                  {{$users->username}}
                              </td>
                              <td>
                                  {{$users->email}}
                              </td>
                                @endforeach
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
</div>
@endsection
