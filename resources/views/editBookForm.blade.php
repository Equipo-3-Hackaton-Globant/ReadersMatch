@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Book') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('edit', $book->id) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="{{$book->title}}" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="author" class="col-md-4 col-form-label text-md-end">{{ __('Author') }}</label>

                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" placeholder="{{$book->author}}" value="{{ old('author') }}" required autocomplete="author">

                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="format" class="col-md-4 col-form-label text-md-end">{{ __('Format') }}</label>

                            <div class="col-md-6">
                                <input id="format" type="text" class="form-control @error('format') is-invalid @enderror" name="format" placeholder="{{$book->format}}" required autocomplete="format">

                                @error('format')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="imgURL" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="imgURL" type="text" class="form-control" name="imgURL" placeholder="{{$book->imgURL}}" required autocomplete="imgURL">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="observation" class="col-md-4 col-form-label text-md-end">{{ __('Observations') }}</label>
                            <div class="col-md-6">
                                <textarea id="observation" name="observation" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mx-1">
                                    {{ __('Edit') }}
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

