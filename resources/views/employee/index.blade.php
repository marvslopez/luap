@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Add Employee Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add New Employee') }}</div>

                    <div class="card-body" style="background-color: #f2f2f2;">
                        <form action = "{{url('employee')}}" method="POST">
                         @csrf
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname"  placeholder="Enter first name">
                                
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name = "lastname" placeholder="Enter last name">
                            </div>

                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middlename" name = "middlename" placeholder="Enter middle name">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="form-control" id="country" name="country"> 
                                  
                                    <option selected="selected">Select Country</option>
                    <option value="philippines">philippines</option>

                                    <!-- Add options for countries -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <select class="form-control" id="state" name = "state">
                                    <option value="">Select State</option>
                                    <!-- Add options for states -->
                                    <option value="manila">manila</option>
                    <option value="bulacan">bulacan</option>
 
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <select class="form-control" id="city" name="city">
                                    <option value="">Select City</option>
                                    <!-- Add options for cities -->
                                    <option value="san fernando">san fernando</option>
                    <option value="malolos">malolos</option>
               
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="zip">ZIP</label>
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter ZIP">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age"name="age" placeholder="Enter age">
                            </div>

                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate">
                            </div>

                            <div class="form-group">
                                <label for="hired_date">Hired Date</label>
                                <input type="date" class="form-control" id="datehired" name="datehired">
                            </div>

                            <div class="form-group">
                                <label for="department">Department</label>
                                <select class="form-control" id="department" name="department">
                                    <option value="general_management">General Management</option>
                                    <!-- Add other department options -->        
                                    <option value="purchasing">purchasing</option>
                    <option value="hm">hm</option>
                    <option value="it">it</option>

                                </select>
                            </div>  <div class="form-group">
                                <label for="division">division</label>
                                <select class="form-control" id="division" name="division">
                                    <option value="general_management">division</option>
                                    <!-- Add other department options -->
                                    <option value="pampanga">pampanga</option>

                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection