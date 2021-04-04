@extends('layout')
@section('title', 'Contact')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                    <form class="bg-light shadow rounded py-3 px-4 " method="POST" action="{{ route('messages.store') }}">
                        @csrf
                        <h1 class="display-4">{{ __('Contact') }}</h1>

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input class="form-control bg-light shadow  
                        @error('name') is-invalid @else border-0 @enderror" name="name" placeholder="Nombre ..."
                                value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }} </strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control bg-light shadow  
                        @error('email') is-invalid @else border-0 @enderror" type="text" name="email"
                                placeholder="Email ..." value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }} </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subject">Asunto</label>
                            <input class="form-control bg-light shadow  
                        @error('subject') is-invalid @else border-0 @enderror" name="subject" placeholder="asunto..."
                                value="{{ old('subject') }}">
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }} </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Mensaje</label>
                            <textarea class="form-control bg-light shadow  
                        @error('content') is-invalid @else border-0 @enderror" name="content" placeholder="Mensaje ..."
                                value="">{{ old('content') }}</textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <button class="btn btn-primary btn-lag btn-block" type="submit">@lang('Send')</button>

                    </form>
            </div>
        </div>

    </div>
@endsection
