<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Post Details</title>

    <style>
        .post {
            font-weight: bold;
            font-size: large;
            color: blue;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <form method="Post" action="/comment/{{$data->id}}">
            @csrf
            <a href="/home">Back</a><br>


            <div class="card" style="width: 50rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><img src="{{ asset('storage/'.$data->image) }}" class="card-img-top" alt="image" width="100%" height="300px"></li>
                    <li class="list-group-item"> <em class="post">Posted By:</em> &nbsp;{{$data->user->name}}</li>
                    <li class="list-group-item"><em class="post">Posted At:</em> &nbsp;{{$data->created_at}}</li>
                    <li class="list-group-item"><em class="post">Description:</em> &nbsp; {{$data->desc}} </li>
                    <li class="list-group-item"> <em class="post">Tags: &nbsp;</em>
                        @foreach($tag as $tg)
                        <span>
                            &nbsp;{{$tg->tname}} &nbsp;
                        </span>
                        @endforeach
                    </li>
                    <li class="list-group-item"> <em class="post">Comments:</em> </li>
                    @foreach($comment as $cmt)

                    <li class="list-group-item">{{$cmt->userc->name}} : &nbsp;{{$cmt->cname}}
                        <span style="float:right">{{$cmt->created_at}}</span>
                    </li>
                    @endforeach
                    <li class="list-group-item"> <em class="post">Comment :</em>
                        <input type="text" name="comment" style="padding: 10px;">
                        <input type="submit" value="Reply" style="background-color: blue;color:white">
                    </li>

                </ul>
            </div>

            <label> <em class="post"> </label><br>
        </form>

    </div>

</body>

</html>