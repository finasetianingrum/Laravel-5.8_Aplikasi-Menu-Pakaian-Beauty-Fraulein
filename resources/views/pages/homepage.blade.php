@extends('template')

@section('main')
    <div id="homepage">
    	<br>	
        <center><p><strong><h2>SELAMAT DATANG DI BEAUTY FRAULEIN</h2></strong></p>
       	<br>
        <img src="{{ asset('fotoupload/frauleinLogo.png') }}" width="500" height="90">
        <br>
        <br>Beauty Fraulein menyediakan berbagai macam dress dengan berbagai model
        <br>Selain itu, kami juga menyediakan dress dengan kualitas terbaik
        <br>Kami ingin senantiasa memberikan pelayanan terbaik untuk anda
        </center>	
    </div>
@stop

@section('footer')
    @include('footer')
@stop
