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
                        <h2 class="text-white pb-2 fw-bold">Contact Message</h2>
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
                            <h4 class="card-title text-center">Contact Message </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No.</th>
                                            <th>Enquirey Type</th>
                                            <th>Message</th>
                                            <th>Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contactData as $item)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    {{ $item->name }}
                                                </td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->mobile }}</td>
                                                <td>{{ $item->enquiry_type }}</td>
                                                <td>{{ $item->message }}</td>
                                                <th>{{ $item->created_at->diffForHumans()}}</th>
                                            </tr>
                                        @endforeach
                                        @if ($contactData->isEmpty())
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

@endsection
