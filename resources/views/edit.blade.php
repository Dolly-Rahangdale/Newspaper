<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div class="container">
    <h3>NEWS FORM</h3>
        <form action="{{route('Newspaper.form.update',$data->id)}}" method="POST" enctype="multipart/form-data">
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
            </div>
            <button type="submit" class="btn-btn-primary">Submit</button>
        </form>
    
    </div>
    
</body>
</html>