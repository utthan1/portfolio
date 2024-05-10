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
                        <h2 class="text-white pb-2 fw-bold">Stalwart Setting</h2>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="#" class="btn btn-white btn-border btn-round mr-2" style="display: none;">Manage</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Stalwart </h4>
                            <button type="button" class="btn btn-primary ml-2 accept-btn" data-toggle="modal"
                                data-target="#statusModal">Add</button>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Title</th>
                                            <th>Job Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stalwart as $item)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->job_desc }}</td>
                                                <td>
                                                    @if ($item->image != null)
                                                        <img src="{{ asset("storage/$item->image") }}" alt="file"
                                                            width="70px">
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <button type="button" data-id="{{ $item->id }}"
                                                            class="btn btn-primary update-btn">Update</button>
                                                        <a href="{{route('delete-stalwart', $item->id)}}"><button type="button"
                                                                class="btn btn-danger ml-2">Delete</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if ($stalwart->isEmpty())
                                            <tr>
                                                <td colspan="5">No records found</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusModalLabel">Add Stalwart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('stalwart-setting') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group ">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title"
                                placeholder="Enter Title" />
                        </div>
                        <div class="form-group ">
                            <label>Job description</label>
                            <input type="text" class="form-control" name="job_desc"
                            placeholder="Enter Job description" />
                        </div>
                        <div class="form-group ">
                            <label>Image</label>
                            <br/><span class="">size of 1920x1080 pixels and an aspect ratio of 141:104 </span>
                            <input type="file" class="form-control" name="image" />
                        </div>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateModel" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusModalLabel">Update Stalwart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="updateForm" enctype="multipart/form-data" action="{{route('update-stalwart')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="journey_id" name="id">
    
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" id="journey_title" name="title" placeholder="Enter Journey Title">
                        </div>
    
                        <div class="form-group">
                            <label>Job Description</label>
                            <input type="text" class="form-control" id="journey_desc" name="job_desc"
                            placeholder="Enter Job description" />
                        </div>
    
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@push('scripts')
<script>
$(document).ready(function() {
    $('.update-btn').click(function() {
        console.log("hello");
        var journeyId = $(this).data('id');
        var journeyTitle = $(this).closest('tr').find('td:nth-child(2)').text();
        var journeyDesc = $(this).closest('tr').find('td:nth-child(3)').text();

        // Populate the modal fields with journey data
        $('#journey_id').val(journeyId);
        $('#journey_title').val(journeyTitle);
        $('#journey_desc').val(journeyDesc);

        // Show the modal
        $('#updateModel').modal('show');
    });
});
</script>

@if (session('success'))
    <script>
        swal("Thank You!", "{{ session('success') }}", {
            icon: "success",
            buttons: {
                confirm: {
                    className: 'btn btn-success'
                }
            },
        });
    </script>
@endif
@endpush
@endsection
