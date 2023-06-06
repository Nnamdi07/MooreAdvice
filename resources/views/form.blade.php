@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('IBASS/JAMB REG FORM') }}</div>

                <div class="card-body">
                    <form method="POST" action="form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="Nnamdi Ijeomah" autofocus readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="nnamdiijeomah90@gmail.com" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('University of Choice') }}</label>

                            <div class="col-md-6">
                            <select name="languages" id="lang" style="padding:4px; border-radius:9px">
                                <option value="select">Select a University</option>
                                <option value="University of Lagos">University of Lagos</option>
                                <option value="University of Benin">University of Benin</option>
                                <option value="University of Ilorin">University of Ilorin</option>
                                <option value="Lagos State University">Lagos State University</option>
                            </select>
                                <!-- <input id="password" type="text" class="form-control @error('name') is-invalid @enderror" name="password" required> -->

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Department/Course of Study') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('course') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Upload Official Documents') }}</label>

                            <div class="col-md-6">
                                <input type="file" />

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
