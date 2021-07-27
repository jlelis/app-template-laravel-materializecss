@extends('layouts.app')

@section('title', $title = __('Dashboard'))

@section('content')
<div class="row">
    <div class="col s12 m10 l8 offset-m1 offset-l2">
        <div class="card">
            <div class="card-content">
                <div class="card-title">{{ $title }}</div>
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a href="#sample1">Sample1</a></li>
                        <li class="tab"><a href="#sample2">Sample2</a></li>
                        <li class="tab"><a href="#sample3">Sample3</a></li>
                        <li class="tab"><a href="#sample4">Sample4</a></li>
                        <li class="tab"><a href="#sample5">Sample5</a></li>
                    </ul>
                </div>
                <div class="card-content grey lighten-4">
                    <div id="sample1" class="active">Sample1</div>
                    <div id="sample2" style="display: none;">Sample2</div>
                    <div id="sample3" style="display: none;">Sample3</div>
                    <div id="sample4" style="display: none;">Sample4</div>
                    <div id="sample5" style="display: none;">Sample5</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
