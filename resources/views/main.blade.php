<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">    
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-black">
  <div class="container">
  <a class="navbar-brand" style="font-weight: bold; color:aqua;" href="/list">SOUND</a>
    @if ($music->user_id!= auth()->id())
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" style="color: white" href="/list">Home</a>
        <a class="nav-item nav-link" style="color: white" href="/playlist">Playlist</a>
        <a class="nav-item nav-link" style="color: white"href="/playlistadd">PlaylistAdd</a>       
    @else
        <a class="nav-item nav-link" style="color: white" href="/list">Home</a>
        <a class="nav-item nav-link" style="color: white" href="/add">Add</a>
        {{-- <a class="nav-item nav-link" style="color: white" href="/playlist">Playlist</a>
        <a class="nav-item nav-link" style="color: white" href="/playlistadd">PlaylistAdd</a> --}}
      </div>
    </div>
  </div>            
</nav>
</header>
@endif    
<body style="background-color: black">
    <div>@yield('container')</div>
</body>
</html>