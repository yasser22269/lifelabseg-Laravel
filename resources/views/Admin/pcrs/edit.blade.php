@extends('layouts.admin')
@section('title','Pcr  Edit')
@section('style')

<link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/forms/selects/select2.min.css">


   <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/'. getFolder() .'/plugins/file-uploaders/dropzone.css')}}">


@endsection
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">Pcr </h3>
      <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin') }}">Admin</a>
            </li>
             <li class="breadcrumb-item"><a href="{{ route('PCR.index') }}">Pcr </a>
            </li>
            <li class="breadcrumb-item active">Pcr  Edit
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="card-content">
    <div class="card-body">
      <ul class="nav nav-tabs nav-top-border no-hover-bg">
        <li class="nav-item">
          <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#tab11" aria-expanded="true">General</a>
        </li>


      </ul>
      <div class="tab-content px-1 pt-1">
        <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true" aria-labelledby="base-tab11">
            <form class="form" method="POST" action="{{ route('PCR.update',$Pcr->id) }}">
                @csrf
                @method('put')
                <div class="form-body">
                  <h4 class="form-section">General Pcr Info</h4>
                  <input type="hidden"  name="id" value="{{ $Pcr->id }}">
                  <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput2">Name:</label>
                          <input type="text" id="projectinput2" class="form-control" placeholder="Name" name="name" value="{{  $Pcr->name }}">
                          @error("name")
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="projectinput1">gender
                            </label>
                                   <select  class="form-control" name="gender" >
                                        <option value="male" {{ ($Pcr->gender == 'male') ? "selected" : ''}}>male</option>
                                        <option value="female"{{ ($Pcr->gender == 'female') ? "selected" : ''}}>female</option>

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
                          placeholder="Date Of Birth" name="DateOfBirth"
                          value="{{date('Y-m-d', strtotime($Pcr->DateOfBirth))}}"
                          >
                          @error("DateOfBirth")
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                       
                        </div>
                       
                      </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput2">File Number:</label>
                          <input type="text"  class="form-control" placeholder="FileNumber" name="FileNumber"
                           value="{{  $Pcr->FileNumber }}">
                        </div>
                          @error("FileNumber")
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput2">Passport Number:</label>
                          <input type="text"  class="form-control" placeholder="Passport Number" name="PassportNumber"
                           value="{{  $Pcr->PassportNumber }}">
                        </div>
                          @error("PassportNumber")
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput1">Request Date</label>
                            
                                
                          <input type="datetime-local" class="form-control"
                           placeholder="Request Date" name="RequestDate" 
                           value="{{date('Y-m-d\TH:i', strtotime($Pcr->RequestDate))}}"
                           >
                          @error('RequestDate')
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput1">Result Date</label>
                          <input type="datetime-local" class="form-control"
                           placeholder="ResultDate" name="ResultDate" 
                           value="{{date('Y-m-d\TH:i', strtotime($Pcr->ResultDate))}}">
                          @error('ResultDate')
                          <span class="text-danger"> {{$message}}</span>
                          @enderror
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








        </div>


      </div>
    </div>
  </div>

         @endsection
