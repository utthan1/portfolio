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
                    <h2 class="text-white pb-2 fw-bold">Events Setting</h2>
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
                        <h4 class="card-title">Events </h4>
                        <button type="button" class="btn btn-primary ml-2 accept-btn" data-toggle="modal" data-target="#statusModal" >Add Event</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.no.</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Location</th>
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $item)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->time}}</td>
                                            <td>{{$item->location}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->link}}</td>
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
                                                    <a href="{{route('event-delete', $item->id)}}"><button type="button" class="btn btn-danger ml-2">Delete</button></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if ($events->isEmpty())
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
                    <h5 class="modal-title" id="statusModalLabel">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('event-setting')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group ">
                            <label>Event Date</label>
                            <input type="date" class="form-control" name="date" />
                        </div>
                        <div class="form-group ">
                            <label>Event Time</label>
                            <input type="time" class="form-control" name="time" />
                        </div>
                        <div class="form-group ">
                            <label>Event Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Event Location"/>
                        </div>
                        <div class="form-group ">
                            <label>Event Localtion</label>
                            <input type="text" class="form-control" name="location" placeholder="Enter Event Localtion"/>
                        </div>
                        <div class="form-group ">
                            <label>Event Youtube Link</label>
                            <input type="text" class="form-control" name="link" placeholder="Enter Event Youtube Link"/>
                        </div>
                        <div class="form-group ">
                            <label>Video Banner</label>
                            <input type="file" class="form-control" name="link_image"  accept="image/*"/>
                        </div>
                        <div class="form-group ">
                            <label>Image</label>
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
            <form action="{{ route('event-update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Input fields for updating event data -->
                    <input type="hidden" id="event_id" name="id">
                    <div class="form-group">
                        <label>Event Date</label>
                        <input type="date" class="form-control" id="update_date" name="date" />
                    </div>
                    <div class="form-group">
                        <label>Event Time</label>
                        <input type="time" class="form-control" id="update_time" name="time" />
                    </div>
                    <div class="form-group">
                        <label>Event Title</label>
                        <input type="text" class="form-control" name="title" id="update_title" placeholder="Enter Event Location" />
                    </div>
                    <div class="form-group">
                        <label>Event Location</label>
                        <input type="text" class="form-control" name="location" id="update_location" placeholder="Enter Event Location" />
                    </div>
                    <div class="form-group">
                        <label>Event Youtube Link</label>
                        <input type="text" class="form-control" name="link" id="update_link" placeholder="Enter Event Youtube Link" />
                    </div>
                    <div class="form-group ">
                        <label>Video Banner</label>
                        <input type="file" class="form-control" name="link_image"  accept="image/*"/>
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

            // Extract event data from the table row
            var date = $(this).closest('tr').find('td:nth-child(2)').text().trim();
            var time = $(this).closest('tr').find('td:nth-child(3)').text().trim();
            var location = $(this).closest('tr').find('td:nth-child(4)').text().trim();
            var title = $(this).closest('tr').find('td:nth-child(5)').text().trim();
            var link = $(this).closest('tr').find('td:nth-child(6)').text().trim();

            // Set the values of the form fields in the update modal
            $('#event_id').val(eventId);
            $('#update_date').val(date);
            $('#update_time').val(time);
            $('#update_location').val(location);
            $('#update_title').val(title);
            $('#update_link').val(link);

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


