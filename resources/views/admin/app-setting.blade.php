@extends('layouts.app')

@section('content')

<?php
// echo "<pre>";
// print_r($statusHistory);
// exit();

?>
<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">App Setting</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-white btn-border btn-round mr-2" style="display: none;">Manage</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="panel-heading">
            {{-- <h3 class="panel-title">Personal Details</h3> --}}
        </div>
        <div class="panel-body">
            <div class="card">
                <div class="card-header">
                    <h3>App Setting</h3>
                </div>
                <form action="{{route('app-setting')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row overflow-hidden">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <h4>App Name</h4>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="app-name" value="{{$app->app_name}}" required="required" class="form-control" placeholder="Enter App Name" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <h4>Logo</h4>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="file" name="image"  class="form-control" placeholder="Enter Full Name" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <h4>Meta Tegs</h4>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="meta-tags" value="{{$app->meta_tags}}" required="required" class="form-control" placeholder="Enter Meta Tegs" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <h4>Meta Description</h4>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="meta-description" value="{{$app->meta_description}}"  required="required" class="form-control" placeholder="Enter Meta Description" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
