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
                    <h2 class="text-white pb-2 fw-bold">Image Gallery Setting</h2>
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
                        <h4 class="card-title">Image Gallery </h4>
                        <button type="button" class="btn btn-primary ml-2 accept-btn" data-toggle="modal" data-target="#statusModal" >Add Image Gallery</button>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.no.</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($imageGallery as $item)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{$item->title}}</td>
                                            <td>
                                                NUll
                                                {{-- @if ($item->image != NULL)
                                                    <img src="{{asset("storage/$item->image")}}" alt="file" width="70px">
                                                @endif --}}
                                            </td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-id="{{ $item->id }}"
                                                        class="btn btn-primary update-btn">Update</button>
                                                    <a href="{{route('image-gallery-delete', $item->id)}}"><button type="button" class="btn btn-danger ml-2">Delete</button></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if ($imageGallery->isEmpty())
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
                    <h5 class="modal-title" id="statusModalLabel">Add Image Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('image-gallery-setting')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group ">
                            <label>Heading Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Heading Title"/>
                        </div>
                        <div class="form-group ">
                            <label>Image </label>
                            <input type="file" class="form-control" name="images[]"  accept="image/*" multiple/>
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
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusModalLabel">Update Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('image-gallery-update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Input fields for updating event data -->
                    <input type="hidden" id="event_id" name="id">
                    <div class="form-group">
                        <label>Event Title</label>
                        <input type="text" class="form-control" name="title" id="update_title" placeholder="Enter Event Location" />
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="images[]" accept="image/*" multiple />
                    </div>
                </div>
                <div class="modal-footer no-bd">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function () {
        $('.update-btn').click(function () {
            // Get the event ID
            var eventId = $(this).data('id');

            var title = $(this).closest('tr').find('td:nth-child(2)').text().trim();

            // Set the values of the form fields in the update modal
            $('#event_id').val(eventId);
           
            $('#update_title').val(title);

            // Show the update modal
            $('#updateModal').modal('show');
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


