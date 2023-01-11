<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bank</title>
    {{-- Start Link css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- End css bootstrap --}}


    {{-- Start Link css  --}}
    <link rel="stylesheet" href="style.css">
    {{-- End Link css  --}}

</head>

<body>

    {{-- Start Navbar --}}
    <!-- Just an image -->
<div id="navbar" class="nav">
  <div class="logo-img">
      <h4 style="padding-left:30px;" id="N">M<span id="e">k</span></h4>
  </div>
  <ul class="nav">
      <a href="/" ><li>Home</li></a>
      <a href="#about"><li>About</li></a>
      <a href="#contact"><li>Contact</li></a>
  </ul>
</div>

    {{-- End Navbar --}}


    @yield('section')

    {{-- Start Footer --}}
    {{-- End Footer --}}


    {{-- Start Java Script Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- End Java Script Bootstrap --}}

</body>

</html>
