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
                        <h5 class="card-title">Edit User</h5>
                    </div>
                    <div class="card-body"> <!--card body-->
                        <form role="form" action="{{URL::to('/update-user/'.$edit->id)}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Fullname</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" name="name" placeholder="Input your fullname" value="{{$edit->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="Input your email" value="{{$edit->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="exampleFormControlSelect1" name="role" required>
                                    <option value="Employee" {{'Employee' == $edit->role ? 'selected' : ''}}>Employee</option>
                                    <option value="Admin" {{'Admin' == $edit->role ? 'selected' : ''}}>Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input id="showPassword" type="password" class="form-control" name="password" placeholder="Type your password" required>
                                    <input type="checkbox" onclick="myFunction()"> Show Password
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Retype Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Retype your password" required>
                                </div>
                            </div> -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                        </form>
                    </div>
                    <!-- card body -->
                   
                </div>

            </div>
            <!-- end card -->
            
            <div class="col-lg-1">

            </div>


        </div>
    </section>
</div>

<script>
function myFunction() {
  var x = document.getElementById("showPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

@endsection