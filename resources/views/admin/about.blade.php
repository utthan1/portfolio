@extends('layouts.app')

@section('content')

<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">About Setting</h2>
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
                    <h3>About Setting</h3>
                </div>
                <form action="{{route('about-setting')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row overflow-hidden">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <h4>Description</h4>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea name="description"  class="form-control" rows="5">{{$about->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <h4>Political</h4>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea name="political" class="form-control" rows="5">{{$about->political}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <h4>About Image</h4>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="file" name="image"  class="form-control"  />
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
