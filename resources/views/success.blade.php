@include('layouts.master')

@section('content')
    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary">{{$title}}</h1>
                <p style="font-size: 20px">{{$message}}</p>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>
@endsection
