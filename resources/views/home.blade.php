@extends('layouts.app')

@section('content')

<div class="row">

 <div class="col-sm-3">
  <div class="card">
  <div class="card-header text-center bg-light"><b>ALL POSTS</b></div>
  <div class="card-body text-white bg-success">
    <p class="card-text">
        <h1 class="text-center">{{$totalpost}}</h1>
    </p>
  </div>
</div>
</div>

<div class="col-sm-3">
  <div class="card">
  <div class="card-header text-center bg-light"><b>USERS</b></div>
  <div class="card-body text-white bg-primary">
    <p class="card-text">
        <h1 class="text-center">{{$totaluser}}</h1>
    </p>
  </div>
</div>
</div>

<div class="col-sm-3">
  <div class="card">
  <div class="card-header text-center bg-light"><b>TAGS</b></div>
  <div class="card-body text-white bg-info">
    <p class="card-text">
        <h1 class="text-center">{{$totaltag}}</h1>
    </p>
  </div>
</div>
</div>

<div class="col-sm-3">
  <div class="card">
  <div class="card-header text-center bg-light"><b>TRASHED POSTS</b></div>
  <div class="card-body text-white bg-warning">
    <p class="card-text">
        <h1 class="text-center">{{$trashed}}</h1>
    </p>
  </div>
</div>
</div>

</div>
<br><br>
<div class="row">
    <div class="col-sm-3">
        <div class="card">
          <div class="card-header text-center bg-light"><b>CATEGORIES</b></div>
          <div class="card-body text-white bg-secondary">
            <p class="card-text">
                <h1 class="text-center">{{$totalcat}}</h1>
           </p>
    </div>
</div>
    </div>
</div>


@endsection
