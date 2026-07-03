@extends('template')

@section('conteudo')

<div class="max-w-5xl mx-auto py-10 space-y-8">

    @include('profile.partials.update-profile-information-form')

    @include('profile.partials.update-password-form')

    @include('profile.partials.delete-user-form')

</div>

@endsection