@extends('layouts.app')
@section('title', 'Document Verification')
@section('content')

<div class="wrapper">
    <main class="page">
        <div class="auth-page">
            <div class="auth">
                <div class="logo"><img src="{{ asset('personal-acc/img/logo.svg') }}" alt="logo"></div>
                <form class="enter-block" method="POST" action="{{ route('enter.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="enter-block__title">Attach your documents for verification</div>
                    <div class="enter-block__file">
                        <label class="file-btn">
                            <input type="file" name="document" hidden accept=".png,.jpg,.jpeg,.pdf">
                            <span class="file-btn__icon">
                                <img src="{{ asset('personal-acc/img/icons/download.svg') }}" alt="download">
                            </span>
                            <span>Upload file</span>
                        </label>
                        @error('document')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <textarea name="description" placeholder="Write here...">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="enter-block__info">
                        <div class="enter-block__info-item">
                            <span>Allowed format</span>
                            <br>
                            PNG, JPG, JPEG and PDF
                        </div>
                        <div class="enter-block__info-item">
                            <span>Max file size</span>
                            <br>
                            10MB
                        </div>
                    </div>
                    <button class="btn btn--light" type="submit">Send</button>
                </form>
            </div>
        </div>
    </main>
</div>

@endsection