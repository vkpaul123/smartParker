@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    Available Parking Slots
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><h3>1</h3></div>
                                    <div class="panel-body">
                                        <h3 class="text-success"><strong>Vacant</strong></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><h3>2</h3></div>
                                    <div class="panel-body">
                                        <h3 class="text-success"><strong>Vacant</strong></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><h3>3</h3></div>
                                    <div class="panel-body">
                                        <h3 class="text-success"><strong>Vacant</strong></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><h3>4</h3></div>
                                    <div class="panel-body">
                                        <h3 class="text-success"><strong>Vacant</strong></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
