@extends("default")
@section('content')
<h1> A propos </h1>
<p>je suis un pro</p>


    <ul>
        @forelse($numbers as $number)
            <li>{{ $number }}</li>
            @empty
                <li> Aucun chiffre</li>
            @endforelse
    </ul>
@endsection