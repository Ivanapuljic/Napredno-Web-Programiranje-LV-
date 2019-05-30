@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <h3>Stvori novi projekt</h3>
                    
                    <form method="post" action="/home/{{$project->id}}">
                        <input type="hidden" name="_method" value="PUT">
                        <label>Naziv projekta</label><br>
                        <input type="text" name="naziv_projekta" value="{{$project->naziv_projekta}}"><br>
                        <label>Opis projekta</label><br>
                        <input type="text" name="opis_projekta" value="{{$project->opis_projekta}}"><br>
                        <label>Cijena projekta</label><br>
                        <input type="text" name="cijena_projekta" value="{{$project->cijena_projekta}}"><br>
                        <label>Obavljeni poslovi</label><br>
                        <input type="text" name="obavljeni_poslovi" value="{{$project->obavljeni_poslovi}}"><br>
                        <label>Datum početka</label><br>
                        <input type="date" name="datum_pocetka" value="{{$project->datum_pocetka}}"><br>
                        <label>Datum zavrsetka</label><br>
                        <input type="date" name="datum_zavrsetka" value="{{$project->datum_zavrsetka}}"><br><br>
                        {{ csrf_field() }}
                        <input type="submit" name="submit" value="Spremi">
                    </form>
 </div>
</div>
@endsection