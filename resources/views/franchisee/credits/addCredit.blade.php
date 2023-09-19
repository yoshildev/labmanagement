@extends('franchisee.components.layout')
@php
    $page_title = 'Add Credits';
    $page_title_full = " $page_title";
@endphp
@section('page_title', "$page_title_full | " . config('app.name'))
@section('content')
@livewireStyles
@livewireScripts
    <div class="pcoded-content">
        @include('franchisee.components.breadcrumb')
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        @livewire('franchisee.credits.add')
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
        $('#selectfranchisee option').each(function() {
            $(this).text($(this).text().toUpperCase());
        });
    });
    </script>
    @include('franchisee.components.select2')
    @include('franchisee.components.select2')
@endsection
