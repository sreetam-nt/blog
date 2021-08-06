<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Post Details</title>
</head>

<body>
    <div class="container" style="margin-top: 20px;">
    <form method="Post" action="/comment">
       @csrf
        <div class="card" style="width:500px;">
            
            <img src="{{ asset('storage/'.$data->image) }}" class="card-img-top" alt="image" width="100%" height="200px">
            <span class="card-text">{{$data->user->name}}</span>
            <span >Posted At: </span>
            <span>{{$data->created_at}}</span>
            <div class="card-body">
                <h4 class="card-title">Description</h4>
                <p class="card-text">{{$data->desc}}</p>
                <h4 class="card-title">Tags</h4>
                <p class="card-text">{{$data->tag->tname}}</p>
                <h4 class="card-title">Comments</h4>
                <p class="card-text">{{$data->userc->name}}</p>
                <label>Comment : </label><br>
               <input type="text" name="comment" style="padding: 10px;">
              <input type="submit" value="Reply">
            </div>
        </div>
    </form>

    </div>
    
</body>

</html>