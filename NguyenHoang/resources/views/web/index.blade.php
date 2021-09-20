<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('vendors/reset200802.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/login-register.css')}}">
</head>
<body>
    @if (\Session::has('message'))
    <div class="position-fixed">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
            <div class="toast-header">
                <span class="bell-customed"><i class="far fa-bell"></i></span>
                <strong class="mr-auto">Thông báo</strong>
                <small class="text-muted toast-customed">hiện tại</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ \Session::get('message') }}
            </div>
        </div>
    </div>
@endif
    {{-- header --}}
    @include('web._header')
    {{-- section--}}
    @yield('content')
    {{-- footer --}}
    @include('web._footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/home.js')}}"></script>
    @if (\Session::has('message'))
    <script>
            $(document).ready(function(){
    $('.toast').toast('show');
  });
    </script>
@endif
</body>
</html>