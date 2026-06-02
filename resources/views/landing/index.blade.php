@extends('layouts.app')

@section('content')
    @include('landing.sections.hero')
    @include('landing.sections.about')
    @include('landing.sections.services', ['services' => $services])
    @include('landing.sections.portfolio', ['portfolios' => $portfolios])
    @include('landing.sections.team', ['team' => $team])
    @include('landing.sections.contact')
@endsection