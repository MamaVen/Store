@extends('layouts.master')
@section('content')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">COMPANY C STORES BRANCH</h1>
      <div class="row center">
       <!--  <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
 -->      </div>
      <br><br>
  
  
<div class ="row">
    <ul>
        @foreach ($stores as $store)
        <li>
        <a href="/stores/{{$store->id}}">
            {{$store->name}}
        </a>
        </li>
        @endforeach
    </ul>
</div>
</div>
</div>
@endsection


