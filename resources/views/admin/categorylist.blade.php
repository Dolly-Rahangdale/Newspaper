@extends('layouts.app1')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>Action</th>                       
                      </thead>
                          <tbody>
                          @foreach($data as $d)
                          <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->name}}</td>
                          </tr>  
                          @endforeach                       
                          </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>

@endsection