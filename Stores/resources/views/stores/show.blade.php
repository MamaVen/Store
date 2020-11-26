@extends('layouts.master')

@section('content')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
    <h1 class="header center orange-text">COMPANY C {{$store->name}} BRANCH</h1>
      <div class="row center">
       <!--  <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
 -->      </div>
      <br><br>
  
  
<div class ="row">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Store location</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($store->products as $product)
            <tr>
                 <td>{{ $product->id }}</td>
                 <td>{{ $product->name }}</td>
                     
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
@endsection
