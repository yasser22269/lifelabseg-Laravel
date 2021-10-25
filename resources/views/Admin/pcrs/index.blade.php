
@extends('layouts.admin')
@section('title','pcrs index')
@section('style')
<style>
    .table th, .table td {
        padding: 0.75rem 1rem;
    }

</style>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">pcrs create</h3>
      <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin') }}">Admin</a>
            </li>
            {{--  <li class="breadcrumb-item"><a href="#">Tables</a>
            </li>  --}}
            <li class="breadcrumb-item active">pcrs index
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" >
        <a href="{{ route('PCR.create') }}">
            <button class="btn btn-info round  box-shadow-2 px-2"type="button" > Add Pcr</button>
        </a>

      </div>
    </div>
  </div>

<div class="row" id="header-styling">
    <div class="col-12">
      <div class="">

        <div class="card-content collapse show">
          <div class="table-responsive">
            <table id="datatable" class="table display nowrap table-striped table-bordered scroll-horizontal">
              <thead class="bg-success white">
                <tr>
                  <th> id</th>
                  <th>Name</th>
                  <th>PassportNumber</th>
                  <th>FileNumber</th>
                  <th>copy</th>
                  <th>View</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($pcrs as $index => $Pcr)


                <tr>
                  <td>{{ ($index++)+1 }}</td>
                  <td>{{ $Pcr->name  }}</td>
                  <td >{{ $Pcr->PassportNumber  }}</td>
                   <td>{{ $Pcr->FileNumber   }}</td>
                   <td>
                 <?php $text = "copyBtn$Pcr->id";?>    
                    <span  onclick="copy({{$text}})" style="color: blue;cursor: pointer;">
                         copy click Here
                 </span>
                 <input type="text" value="{{ url('viewPCR',$Pcr->id) }}"
                  id="copyBtn{{ $Pcr->id }}" style="display: none;">

                </td>
                  <td>
                      <a href="{{ route('viewPCR',$Pcr->id) }}">
                        <button class="btn btn-info btn-sm round  box-shadow-2 px-1"type="button" >  view </button>
                   </a>
                  </td>
                  <td>
                    <a href="{{ route('PCR.edit',$Pcr->id) }}">
                      <button class="btn btn-info btn-sm round  box-shadow-2 px-1"type="button" > <i class="la la-edit la-sm"></i> Edit </button>
                 </a>
                </td>
                  <td>

                     <form class="form" method="POST" action="{{ route('PCR.destroy',$Pcr->id) }}">
                      @csrf
                      @method('DELETE')
                  {{--  pcrs  --}}
                          <button class="btn btn-danger btn-sm  round  box-shadow-2 px-1"type="submit" ><i class="la la-remove la-sm"></i> DELETE </button>

                      </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>

      </div>
      {{ $pcrs->links() }}
    </div>
  </div>
@endsection


@section('js')
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });


        function copy(that){
            var inp =document.createElement('input');
            document.body.appendChild(inp)
            inp.value =that.value
            inp.select();
            document.execCommand('copy',false);
            inp.remove();
            alert("Copied the text")
        }
    </script>

@endsection
