@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')




@endsection
@section('JS')
    <!-- Section Map -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8">
    </script>
    <script src="/site/mapa/jsmap/jquery.mapael.js" charset="utf-8"></script>
    <script src="/site/mapa/jsmap/maps/angola.js" charset="utf-8"></script>
    <script src="/site/mapa/jsmap/map.js" charset="utf-8"></script>
    <script src="/site/js/HttpRequest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.0/jquery.cookie.min.js"></script>
    <script>
        if (document.querySelectorAll("#ensign-nivoslider img.banner").length < 2) {
            document.getElementsByClassName("nivo-directionNav")[0].style.display = "none";
        }
    </script>

@endsection
