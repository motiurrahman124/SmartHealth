
@extends('master')
@section('main_content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Admin Panel</h2>


              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{route('add_doctor')}}" class="btn btn-info">New Doctor</a>
                </div>
              </div>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i=0 ?>

                @foreach($test as $value)
                
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->designation}}</td>
                    <td><img src="{{ asset($value->image) }}" width="30px"  heigh="20px" alt="no image" /></td>
                    <td>{{$value->contact_number}}</td>
                    <td>{{$value->address}}</td>
                    <td>
                     
                      <a type="button" href="{{route('doctor_delete',$value->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                    

                  </tr>
                   
                @endforeach
               
            
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->




@endsection