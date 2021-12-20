<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <table id="library" border=2>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Create At</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->title}}</td>
            <td>{{$d->description}}</td>
            <td>{{$d->created_at}}</td>
            <td><img src="/images/{{$d->image}}" onerror="this".src='http://127.0.0.1/image/images(1).jpeg' width="50px" height="50px"></td>
            <td>
                <a href={{route('Newspaper.form.delete',$d->id)}}>Delete</a>
                <a href={{route('Newspaper.form.edit',$d->id)}}>edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>