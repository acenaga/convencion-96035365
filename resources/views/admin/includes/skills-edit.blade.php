        @foreach ($user->skill as $skill)
            <form action="{{ route('skill.update', $skill) }}"
            method="POST">

                <div class="form-row">
                    <div class="col-md-6">
                        <label class="text-gray-700 text-sm font-bold mb-2" >
                            Habilidades
                        </label>
                        <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $skill->name) }}">
                    </div>

                </div>
                @csrf
                @method('PUT')
                <button class="bg-warning btn btn-lg" type="submit" class="site-btn">Actualizar</button>
            </form>
            <form action="{{ route('skill.destroy', $skill) }}"
                method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
            </form>
        @endforeach
