@extends('layouts.app1')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                      <thead class=" text-primary">
                            <th>Title</th>
                            <th>Description</th>
                            <th>Create At</th>
                            <th>Image</th>
                            <th colspan="2"> Action</th>
                       
                      </thead>
                      </thead>
                      <tbody>
                      @foreach($data as $d)
                      <tr>
                            <td>{{$d->title}}</td>
                            <td>{{$d->description}}</td>
                            <td>{{$d->created_at}}</td>
                            <td> <img src="/images/{{ $d->image}}" onerror="this.src='http://127.0.0.1:8000/images/Tulips.jpg'"  width="50px" height="50px"> </td>
                            <td>
                                <a href={{route('Newspaper.form.delete',$d->id)}}>Delete</a>
                                <a href={{route('Newspaper.form.edit',$d->id)}}>edit</a>
                            </td>
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