@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="background-color: yellow;">{{ __('Employee') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class = "container">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                    Employee Table
                    </div>

                    <div class="card">
                        <div class="card-body p-0">
                               
                            <table class="table ">
                                <thead >
                                    <tr>
                                        <th>ID</th>
                                        <th>Fisrt Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Courty</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Zip</th>
                                        <th>Age</th>
                                        <th>Birthday</th>
                                        <th>Hired Date</th>
                                        <th>Department</th>
                                        <th>Division</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employee as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->firstname }}</td>
                                        <td>{{ $data->middlename }}</td>
                                        <td>{{ $data->lastname }}</td>
                                        <td>{{ $data->address }}</td>
                                        <td>{{ $data->country }}</td>
                                        <td>{{ $data->state }}</td>
                                        <td>{{ $data->city }}</td>
                                        <td>{{ $data->zip }}</td>
                                        <td>{{ $data->age }}</td>
                                        <td>{{ $data->birthdate }}</td>
                                        <td>{{ $data->datehired }}</td>
                                        <td>{{ $data->department }}</td>
                                        <td>{{ $data->division }}</td>
                                        <td scope="col">

                            <a href="{{ url('employee/'.$data->id.'/edit')}}">
                            <button class="btn btn-info btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                                </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                       
                    </div>

            </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->



</div>
    <!-- /.content -->
@endsection