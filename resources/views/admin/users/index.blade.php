@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
    <div class="row">
        @foreach ($users as $user)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
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
