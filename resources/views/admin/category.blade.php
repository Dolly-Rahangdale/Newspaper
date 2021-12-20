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
                <div class="card-body">
                
                <form action={{route('Category.form.submit')}} method="POST">
                @csrf                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="name" >Name :</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Enter your category name"><br>
                          <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                      </div>
                     
                    </div>
                    
                    </div>
                   
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>

@endsection