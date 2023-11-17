@extends('base')


@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>aGENCE LOREM IPSUM</h1>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sit, cupiditate tenetur debitis nobis nesciunt
                eligendi aliquam. Suscipit quasi vitae natus repellat, tempore culpa eos iusto ipsum sint sed repellendus?
            </P>
        </div>
    </div>
    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
