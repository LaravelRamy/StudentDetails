@extends('admin.layout.homeapp')

@section('content')
<!-- Page header -->
<div class="page-header page-header-default">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Edit Users</li>
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
						<div class="row">
                            <div class="panel-heading col-md-10">
                                <legend class="text-bold">Edit user details</legend>
                            </div>
                            <div class="panel-heading col-md-2">
                                <a href="{{ url('admin/users') }}"><button class="btn btn-primary legitRipple" style="color: black;width: 169px;">Back</button></a>
                            </div>
                        </div>

						<div class="panel-body">
                            <form class="form-horizontal" action="{{ url('admin/update-user',$user->id) }}" method="POST">
                                @csrf
								<fieldset class="content-group">
									<div class="form-group">
										<label class="control-label col-lg-2">Name:</label>
										<div class="col-lg-10">
                                            <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}" required autocomplete="name" placeholder="name" autofocus>
										</div>
                                        <label class="control-label col-lg-2">Email:</label>
										<div class="col-lg-10">
                                            <input id="email" class="form-control" type="email" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="email" autofocus>
										</div>
                                        <label class="control-label col-lg-2">Password:</label>
										<div class="col-lg-10">
                                            <input id="password" type="password" class="form-control" name="password" required placeholder="*******" autocomplete="current-password">
										</div>
                                        <div class="col-lg-10 text-center" style="padding: 20px;">
                                            <button class="btn btn-danger btn-rounded legitRipple" type="submit">Update User</button>
                                        </div>
									</div>
                                </fieldset>
                            </form>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
