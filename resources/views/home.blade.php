@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">Tags

                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tagModal" style="float: right;">Add Tag</button>

                        <form action="/home" method="POST">
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

                    <div class="card-body">
                        @foreach($data as $inf)
                        <table style="width: 100%;">
                            <tr>
                                <td> <a href="">{{$inf->tname}}</a></td>

                                <td style="text-align: right;"><a href="/delete/{{$inf->id}}" class="btn-close" aria-label="Close"></a></td>
                            </tr>
                        </table>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">Posts


                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#postModal" style="float: right;">Add Post</button>

                        <form action="/store" enctype="multipart/form-data" method="POST">

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

                                                @foreach($data as $inf)
                                                <input type="checkbox" name="tagsel[]" value="{{$inf->id}}">
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

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>