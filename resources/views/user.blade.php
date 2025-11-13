@extends(template.layout)

@section('content')
    {{$username}}

    @if($username == 'renato')
        <h1>O dono</h1>
    @elseif($username == 'alves')
        <h1>O sobrenome do O dono</h1>
    @endif

@endsection
