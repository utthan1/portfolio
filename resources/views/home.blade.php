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
                    <h2 class="text-white pb-2 fw-bold">User Dashboard</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-white btn-border btn-round mr-2" style="display: none;">Manage</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="col-md-6">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-title">Feed Activity</div>
								</div>
								<div class="card-body">
                                   
                                @if(isset($statusHistory) && $statusHistory->isNotEmpty())

									<ol class="activity-feed">

                                        <li class="feed-item feed-item-secondary">
                                            <time class="date" datetime="{{ $statusHistory[0]->first()->created_at->format('M d, Y') }}">{{ $statusHistory[0]->first()->created_at->format('M d, Y') }}</time>
                                            <span class="status"><?php if($statusHistory[0]->status==0) { echo "Form Applied"; } ?></span>
                                        </li>

										<li class="feed-item feed-item-success">
										</li>
										<li class="feed-item feed-item-info">
										</li>
										<li class="feed-item feed-item-warning">
										</li>
										<li class="feed-item feed-item-danger">
										</li>
										<li class="feed-item">
										</li>
									</ol>
                                    @else
                                        <p>No status history found.</p>
                                    @endif
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
