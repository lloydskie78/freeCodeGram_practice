@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-hkg3-1.cdninstagram.com/vp/d1568eeaa07f3121f8cbb454361fbb2e/5E2B1838/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-hkg3-1.cdninstagram.com" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>         
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-hkg3-1.cdninstagram.com/vp/ede9c4f9f20a53dd38a41ac1589e9883/5E623A2F/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/73174649_2404377109881299_3305170173981020096_n.jpg?_nc_ht=scontent-hkg3-1.cdninstagram.com&_nc_cat=111" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-hkg3-1.cdninstagram.com/vp/564ebcaa83b25dba2a3bc89f07d8646f/5E5DA76B/t51.2885-15/sh0.08/e35/c0.115.925.925a/s640x640/71114027_2514356725320652_199639527808064588_n.jpg?_nc_ht=scontent-hkg3-1.cdninstagram.com&_nc_cat=104" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-hkg3-1.cdninstagram.com/vp/3e7e7c5b71af705ee92384e018fc9591/5E651981/t51.2885-15/sh0.08/e35/c0.113.931.931a/s640x640/74578570_124228965652556_324451647304105064_n.jpg?_nc_ht=scontent-hkg3-1.cdninstagram.com&_nc_cat=108" class="w-100">
        </div>
    </div>
</div>
@endsection
