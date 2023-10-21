@extends('layout::layouts.layout')

@section('content')
<div class="page-heading">
    <h3>Menu</h3>
</div>
<div class="page-content">
<div class="card">
    <div class="card-body">
        <table class="table text-nowrap data-table" id="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th>Icon</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection

@include('menu::javascript');
