@extends('admin.layout.homeapp')

@section('content')
<!-- Page header -->
<div class="page-header page-header-default">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Users</li>
        </ul>
    </div>
</div>
<!-- /page header -->
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Users</h5>
						</div>

						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-bordered table-framed">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($users as $item)
											<tr>
												<td>{{$item->name}}</td>
												<td>{{$item->email}}</td>
												<td>
													<a href="{{ url('admin/edit-user',$item->id) }}"><button class="btn btn-raised btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>
													<a href="{{ url('admin/delete-user',$item->id) }}"><button class="btn btn-raised btn-danger"><i class="fa-solid fa-trash-can"></i></button></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
