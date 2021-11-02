@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
    <div class="row">
        @foreach ($users as $user)
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                @if ($user->image)
                    <img class="card-img-top" src="{{ $user->get_image }}" alt="{{ $user->name }}">
                @else
                    <img class="card-img-top" src="http://lorempixel.com/400/200/" alt="Card image cap">
                @endif
                <h5 class="card-title">{{ $user->uppercase }}</h5>
                <p class="card-text">{{ $user->title_job }}</p>
                <form action="{{ route('user.destroy', $user) }}" method="POST">
                    <a href="{{ route('user.edit', $user) }}" class="bg-warning p-2 rounded">Editar</a>
                    @csrf
                    @method('DELETE')
                    <input
                        type="submit"
                        value="Eliminar"
                        class="bg-danger p-2 rounded"
                        onclick="return confirm('¿Delea eliminar este usuario...?')"
                    />
                </form>
                </div>
            </div>

        @endforeach
    </div>
</div>
@endsection
