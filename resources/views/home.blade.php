@extends('layouts.app')
<style>
    .taglink {
        text-decoration: none;
        color: white;

    }
</style>
@section('content')
<div class="container">
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-success ">Tags

                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tagModal" style="float: right;">Add Tag</button>

                        <form action="{{url('/home')}}" method="POST">
                            @csrf
                            <div class="modal fade" id="tagModal" tabindex="-1" aria-labelledby="tagModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tagModalLabel">Add Tags</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <select class="form-select" aria-label="Default select example" name="tags">
                                                <option selected>Technology</option>
                                                <option value="Media">Media</option>
                                                <option value="Web Dev">Web Dev</option>
                                                <option value="IT">IT</option>
                                                <option value="Jobs">Jobs</option>
                                                <option value="News">News</option>
                                                <option value="weather">weather</option>
                                            </select>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="tag_add">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-secondary">
                        <table style="width: 100%;" class="table">
                            <tr>
                                <td> <a href="/home" class="taglink">All Posts</a></td>
                            </tr>
                            @foreach($tag as $inf)

                            <tr>
                                <td> <a href="/tag/{{$inf->id}}" class="taglink">{{$inf->tname}}</a></td>

                            </tr>

                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header bg-success ">Posts


                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#postModal" style="float: right;">Add Post</button>

                        <form action="{{url('/store')}}" enctype="multipart/form-data" method="POST">

                            <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="postModalLabel">Add Posts</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Title :</label>
                                                <input type="text" class="form-control" name="title">

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description :</label>
                                                <textarea name="desc" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Image :</label>
                                                <input type="file" class="form-control" name="image">

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Post Tags :</label>

                                                @foreach($tag as $inf)
                                                <input type="checkbox" name="tags[]" value="{{$inf->id}}">
                                                {{$inf->tname}}
                                                @endforeach

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Post</button>
                                            </div>


                                        </div>


                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body bg-secondary">
                        @foreach($post as $show)
                        <div class="card" style="width: 100%; height:300px">
                            <a href="/edit/{{$show->id}}"><img src="{{ asset('storage/'.$show->image) }}" class="card-img-top " alt="image" width="100%" height="200px"></a>

                            <div class="card-body">
                                <span class="card-text">Posted By: &nbsp; {{$show->user->name}}</span>
                                <span class="card-text" style="float: right;">{{$show->created_at}}</span>
                            </div>
                        </div>
                        @endforeach
                        {{$post->links()}}
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- <td style="text-align: right ;"><a href="/delete/{{$inf->id}}" class="btn-close " ></a></td>