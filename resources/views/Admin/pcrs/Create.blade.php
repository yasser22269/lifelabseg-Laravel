@extends('layouts.admin')
@section('title','pcrs Create')
@section('style')

<link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/forms/selects/select2.min.css">
@endsection
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">pcrs</h3>
      <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin') }}">Admin</a>
            </li>
             <li class="breadcrumb-item"><a href="{{ route('PCR.index') }}">pcrs</a>
            </li>
            <li class="breadcrumb-item active">pcrs Create
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>


      <div class="card">
          <div class="container">
          <form class="form" method="POST" action="{{ route('PCR.store') }}" >
                @csrf
                <div class="form-body">
                  <h4 class="form-section">pcrs Info</h4>



                  <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput2">Name:</label>
                          <input type="text" id="projectinput2" class="form-control" placeholder="Name" name="name">
                          @error("name")
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="projectinput1">Gander
                            </label>
                                   <select  class="form-control" name="gender" >
                                        <option value="male">male</option>
                                        <option value="female">female</option>

                                </select>
                            @error("gender")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="projectinput2">Date Of Birth:</label>
                          <input type="date" class="form-control" 
                          placeholder="Date Of Birth" name="DateOfBirth">
                          @error("DateOfBirth")
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                       
                        </div>
                       
                      </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput2">FileNumber:</label>
                          <input type="text" class="form-control" placeholder="FileNumber" name="FileNumber">
                          @error("FileNumber")
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                       
                        </div>
                       
                      </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput2">PassportNumber:</label>
                      <input type="text" class="form-control" placeholder="PassportNumber" name="PassportNumber">
                      @error("PassportNumber")
                      <span class="text-danger"> {{$message}}</span>
                      @enderror
                    </div>
                  </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput1">Request Date</label>
                          <input type="datetime-local"
                           id="projectinput1" class="form-control"
                            placeholder="Request Date" name="RequestDate">
                          @error('RequestDate')
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput1">Result Date</label>
                          <input type="datetime-local"
                           class="form-control" placeholder="Result Date" name="ResultDate">
                          @error('ResultDate')
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                        </div>
                      </div>
              </div>
            </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">
                    <i class="la la-check-square-o"></i> Save
                  </button>
                </div>
              </form>

              </div>
         </div>


@endsection

