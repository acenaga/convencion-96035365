            <form action="{{ route('skill.store') }}"
                method="POST">

                <div class="form-row">
                    <div class="col-md-12">
                        <label class="text-gray-700 text-sm font-bold mb-2" >
                            Nueva Habilidad
                        </label>
                        <input id="name" type="text"  name="name" class="form-control" placeholder="Nueva Habilidad">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>

                </div>
                @csrf
                <button class="bg-success text-white btn btn-lg" type="submit" class="site-btn">Agregar</button>
            </form>
