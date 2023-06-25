@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ', ' . auth()->user()->name,
        'description' => __(
            'This is your profile page. You can see your personal information, update that information, and also change your password here.'),
        'class' => 'col-lg-7',
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/default-avatar-2.png" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light">, ( {{ (date('Y') - date('Y', strtotime(auth()->user()->birthdate)) ) }} )</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>
                                @if (Auth::getUser()->gender == 'l')
                                    <span>He</span>
                                @elseif (Auth::getUser()->gender == 'p')
                                    <span>She</span>
                                @else
                                    <span>~</span>
                                @endif
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ auth()->user()->address }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0 ml-3">{{ __('Edit Profile') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('dashboard.profile.update', Auth::id()) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name"
                                        class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}"
                                        required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-username">{{ __('Username') }}</label>
                                    <input type="text" name="username" id="input-username"
                                        class="form-control form-control-alternative{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Username') }}" value="{{ old('username', auth()->user()->username) }}"
                                        required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email"
                                        class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Email') }}"
                                        value="{{ old('email', auth()->user()->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-gender">{{ __('Gender') }}</label>
                                    <input type="text" name="gender" id="input-gender"
                                        class="form-control form-control-alternative{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Gender(l/p)') }}" value="{{ old('gender', auth()->user()->gender) }}"
                                        required autofocus>

                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Address') }}</label>
                                    <input type="text" name="address" id="input-address"
                                        class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Address') }}" value="{{ old('address', auth()->user()->address) }}"
                                        required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-phone">{{ __('Phone') }}</label>
                                    <input type="text" name="phone" id="input-phone"
                                        class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Phone') }}" value="{{ old('phone', auth()->user()->phone) }}"
                                        required autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('birthdate') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-birthdate">{{ __('Birthdate') }}</label>
                                    <input type="date" name="birthdate" id="input-birthdate"
                                        class="form-control form-control-alternative{{ $errors->has('birthdate') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Birthdate') }}" value="{{ old('birthdate', auth()->user()->birthdate) }}"
                                        required autofocus>

                                    @if ($errors->has('birthdate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('birthdate') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
