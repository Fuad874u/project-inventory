@extends('layouts.sidenav-layout')
@section('content')
    @include('components.invoice.invoice-details')
    @include('components.invoice.invoice-delete')
    @include('components.invoice.invoice-list')
    
@endsection
