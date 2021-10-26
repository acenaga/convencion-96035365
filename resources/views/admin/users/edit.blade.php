@extends('admin.layouts.admin')

{{-- solo para github --}}

@section('main-content')
<div class="col-12">
    <div class="row">
        @if (session('succes'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @elseif(session('danger'))
            <div class="alert alert-danger" role="alert">
                {{ session('danger') }}
            </div>
        @endif
        <form action="{{ route('user.update', $user) }}"
        method="POST">

            <div class="form-row">
                <div class="col-md-6">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Nombres
                    </label>
                    <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $user->name) }}">
                </div>
                <div class="col-md-6">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Apellidos
                    </label>
                    <input id="job_title" type="text"  name="job_title" class="form-control" value="{{ old('job_title', $user->job_title) }}">
                </div>
            </div>




            @csrf
            @method('PUT')

            <button type="submit" class="site-btn">Guardar Cambios</button>
        </form>
    </div>
</div>
<section class="container fluid p-4">
    <div class="col-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="true">Skills</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="skills" role="tabpanel" aria-labelledby="skills-tab">

                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Agregar Habilidad</button>
                      <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar Habilidades</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                            @include('admin.includes.skills-create')
                      </div>
                      <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                            @include('admin.includes.skills-edit')
                      </div>
                    </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
          </div>
    </div>
</section>

@endsection
