@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-10">
                <!-- start card -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add User</h5>
                    </div>
                    <div class="card-body">
                        <form role="form" action="" method="post">
                            @csrf
                            <div class="form-group row">
                                <labal for="name" class="col-sm-2 col-form-label">Fullname</labal>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <labal for="name" class="col-sm-2 col-form-label">Email</labal>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <labal for="name" class="col-sm-2 col-form-label">Role</labal>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <labal for="name" class="col-sm-2 col-form-label">Password</labal>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="password" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <labal for="name" class="col-sm-2 col-form-label">Retype Password</labal>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="password" placeholder="Enter your name" required>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <!-- end card -->
            <div class="col-lg-1">

            </div>


        </div>
    </section>
</div>


@endsection