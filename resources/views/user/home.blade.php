@extends('layouts.layout')

@section('header')
    @include('layouts.header')
@endsection

@section('banner')
    {{-- {{ dd($banner_title) }} --}}
    @include('layouts.banner', [
    'title' => $banner_title,
    'banner_subtitle' => $banner_subtitle,
    ])
@endsection

@section('session_one')
    @include('layouts.sessions.one', [
    'title' => $session_1_title,
    'subtitle' => $session_1_subtitle,
    'text' => $session_1_text
    ])
@endsection

@section('session_two')
    @include('layouts.sessions.two', [
    'title' => $session_2_title,
    'subtitle' => $session_2_subtitle,
    'cards' => [
    [
    'url' => $session_2_image_1_url,
    'text' => $session_2_image_1_text,
    ],
    [
    'url' => $session_2_image_2_url,
    'text' => $session_2_image_2_text
    ]
    ],
    'buttons' => [
    [
    'text' => $session_2_buttom_left_text,
    'url' => $session_2_buttom_left_url,
    'special' => true
    ],
    [
    'text' => $session_2_buttom_right_text,
    'url' => $session_2_buttom_right_url,
    'special' => false
    ]]
    ])
@endsection

@section('session_three')
    @include('layouts.sessions.three')
@endsection

@section('session_four')
    @include('layouts.sessions.four', [
    'title' => $session_4_title,
    'subtitle' => $session_4_subtitle,
    'button_text' => $session_4_button_text,
    'button_url' => $session_4_button_url
    ])
@endsection
