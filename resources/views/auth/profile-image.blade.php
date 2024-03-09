@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambahkan Foto Profil') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('update-profile-image') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="profile_image" class="col-md-4 col-form-label text-md-right">{{ __('Foto Profil') }}</label>

                                <div class="col-md-6">
                                    <input id="profile_image" type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" required>

                                    @error('profile_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan Foto Profil') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
