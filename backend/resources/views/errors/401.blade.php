@extends('errors.layouts.base')

@section('title', '401 Unauthorized')

@section('message', 'certification failed.')
{{-- 認証に失敗しました。 --}}

@section('detail', 'Authentication is required to obtain the requested resource.')