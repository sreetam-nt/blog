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
    <form method="Post" action="/comment/{{$data->id}}">
       @csrf
      <a href="/home">Back</a><br>
        <div class="card" style="width:500px;">
            
            <img src="{{ asset('storage/'.$data->image) }}" class="card-img-top" alt="image" width="100%" height="200px">
            
            <p>
            <h4 class="card-title">{{$data->user->name}}</h4>
            <span style="float: right;">Posted At: </span><br>
            <span style="float: right;">{{$data->created_at}}</span>

            </p>
            
            <div class="card-body">
                <h4 class="card-title">Description</h4>
                <p class="card-text">{{$data->desc}}</p>
                <h4 class="card-title">Tags</h4>
                
              
                <p class="card-text">{{$data->tag->tname}}</p>

         
               
                <h4 class="card-title">Comments</h4>
                
                @foreach($comment as $cmt)
                <p class="card-text">{{$cmt->userc->name}} : <span>{{$cmt->cname}}</span>
                <span style="float:right">{{$cmt->created_at}}</span>
            </p>
                @endforeach
                <label>Comment : </label><br>
               <input type="text" name="comment" style="padding: 10px;">
              <input type="submit" value="Reply">
            </div>
        </div>
    </form>

    </div>
    
</body>

</html>