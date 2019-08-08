@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div>
                <div class="d-flex align-items-center align-items-center">
                    @foreach($user as $users)
                        <div class="media">
                            <a class="media-left" href="/profile/{{ $users->id}}">
                                <img src="{{$users->profile->profileImage()}}" class="rounded-circle" width="100px" height="100px">
                            </a>
                        </div>
                        <div class="pr-3">
                            <a><strong>{{ $users->profile->title }}</strong></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
