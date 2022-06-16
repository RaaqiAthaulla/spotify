@extends('main')
@section('container')

{{-- <style>
  body{
    color:black;
  }
  .main{
    padding:50px;
  }
 .cards {
   display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(6, minmax(100px, 1fr));
  
  
}

.card {
  margin: 20px;
  padding: 20px;
  width: 15em;
  height: 20em;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
   background: 	#181818;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}


</style> --}}<style>
  .card {
  background-image: url("https://img.freepik.com/free-photo/dark-gray-wooden-textured-flooring-background_53876-128547.jpg?t=st=1655353465~exp=1655354065~hmac=dca903536392e27fd3eafadd633f482ab59f05a30f6a47ddf033b4ed39319503&w=1060");
  border-radius: 0.5rem;
  box-shadow: 0.05rem 0.1rem 0.3rem -0.03rem rgba(0, 0, 0, 0.45);
  padding-bottom: 1rem;
  width: 15em;
  height: 15em;
}

.card > :last-child {
  margin-bottom: 0;
}

.card{
  margin-top: 5px;
  font-size: 1.25rem;
  position: center;
  text-align: center;
}
h5 {
  text-align: center;
  color: white;
}
h3 {
  color: white;
  margin-top: 40px
}

img {
  border-radius: 0.5rem 0.5rem 0 0;
  width: 100%;
  height: 150px;
}
.card-wrapper {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30ch, 1fr));
  grid-gap: 1.5rem;
}


img ~ * {
  margin-left: 1rem;
  margin-right: 1rem;
}

</style>


 
<ul class="card-wrapper">
    @foreach ($Musics as $music)
    <li class="card">
      <a href="/detail/{{ ($music->id) }}"><img width="200em" src="{{asset('storage/'.$music->image)}}" alt=""></a><br>
      <h3>{{ $music->name }}</h3>
      <a  href="/detail/{{ $music->id }}" style="text-decoration:none; color:white;">Listen Now! </a>
    </li>
    @endforeach
    </div>
</ul> 

@endsection
{{-- <ul class="card-wrapper">
      @foreach ($Musics as $music)
          <li class="card">
            <a href="/detail/{{ ($music->id) }}"><img width="200em" src="{{asset('storage/'.$music->image)}}" alt=""></a><br>
            <h3>{{ $music->name }}</h3>
            <a  href="/detail/{{ $music->id }}" style="text-decoration:none; color:white;">Listen Now! </a>
          </li>
       
        @endforeach
 </ul> 
 --}}




