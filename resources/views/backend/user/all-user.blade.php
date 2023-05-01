@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Password</th>
                    <th>Alter</th>
                  </tr>
                  </thead>

                  <tbody>
                  @foreach($all as $key=>$row)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->role}}</td>
                        <td>{{$row->password}}</td>
                        <td class="span2">
                          <a href="{{ URL::to('/edit-user/'.$row->id) }}" class="btn btn-sm btn-block btn-info">Edit</a>
                          <a href="{{ URL::to('/delete-user/'.$row->id) }}" class="btn btn-sm btn-block btn-danger" id="delete">Delete</a>
                        </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
         
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>
@endsection