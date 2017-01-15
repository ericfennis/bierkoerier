@extends('layouts.app')
@section('content')
<div class="container">
<h1>Bestelling plaatsen</h1>
<form method="POST" name="bestelling">
   {{ csrf_field() }}
   <input type="hidden" id="latitude" name="lat" value="">
   <input type="hidden" id="longitude" name="lon" value="">
   <div class="form-group">
       <label for="product">Product</label>
        <select name="product" class="form-control">
            @foreach($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
            @endforeach
        </select>
   </div>
   <input type="submit" name="submit" class="btn btn-succes" value="Geef mij bier!">
</form>
<button type="button" id="bierbutton" class="btn btn-primary">
  <i class="fa fa-map-pin" aria-hidden="true"></i> Locatie ophalen!
 </button>
</div>
<div id="map"></div>
@endsection

@section('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL2n-x__Jgv2oaK6lFZ92gc59nHp8kzQM"></script>
<script src="/js/orders/location.js"></script>
@endsection