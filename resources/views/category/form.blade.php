<form action={{route('Category.form.submit')}} method="POST">
                @csrf                   
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