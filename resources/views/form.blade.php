<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div class="container">
        <h2>Newspaper form</h2>
        <form action={{route('Newspaper.form.submit')}} method="POST">
        @csrf
            <div class="form">
                <div class="form-group col-md-4">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter your title"><br><br>
                </div>
                <div class="form-group col-md-4">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Enter your description"><br><br>
                </div>
                <button type="submit" class="btn-btn-primary">Submit</button>
            </div>
        </form>
    </div>
    
</body>
</html>