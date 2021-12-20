@extends('layouts.app1')

@section('content')

 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div><br>
                                     
                          <form action={{route('Newspaper.form.submit')}} method="POST" enctype="multipart/form-data">
                          @csrf
                              <div class="form">
                                <div class="form-group col-md-4">
                                    <label for="title">Title :</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Enter the title"><br><br>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="description">Description :</label>
                                    <input type="text" id="description" name="description" class="form-control" placeholder="Enter the description"><br><br>
                                </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Image</label>
                                        <!-- <input type="text" class="form-control"> -->
                                      </div>
                                    </div>                     
                                  </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                        <input id="customerFile" name="image" type="file" class="custom-file-input" >
                                        <label for="customerFile"class="custom-file- btn btn-primary"  >Choose File</label></div>
                                        </div>
                                    </div><br>

                                  <div class="form-group col-md-6">
                                      <label>Category :</label><br>
                                      @foreach($categories as $category)
                                      <label><input type="checkbox" name="categories_id[]" value="{{$category->id}}">{{$category->name}}</label><br>
                                      @endforeach
                                  </div>
                                  
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
   
               
              </div>
            </div>
            
          </div>
        </div>
      </div>

@endsection