
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body style="background-color: #FCD8D4;">
    <div class="container mb-5 mt-5">
        <div class="pricing card-deck flex-column flex-md-row mb-3">
            <div class="card card-pricing text-center px-3 mb-4"> <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-dark text-white shadow-sm">One Month</span>
                <div class="bg-transparent card-header pt-4 border-0">
                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span class="price"></span>5<span class="h6 text-muted ml-2">/  month</span></h1>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-unstyled mb-4">
            
                        <li>Unlimited Comments Post</li>
                        <li>Unlimited Posts Upload</li>
                    </ul> <a href="/stripe" class="btn btn-primary mb-3 bg-dark">Buy</a>
                </div>
            </div>
            <div class="card card-pricing popular shadow text-center px-3 mb-4"> <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-dark text-white shadow-sm">Three Months</span>
                <div class="bg-transparent card-header pt-4 border-0">
                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span class="price">10</span><span class="h6 text-muted ml-2">/ 3 months</span></h1>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-unstyled mb-4">
                    <li>Unlimited Comments Post</li>
                        <li>Unlimited Posts Upload</li>
                    </ul> <a href="/stripe" class="btn btn-primary mb-3 bg-dark">Buy</a>
                </div>
            </div>
            <div class="card card-pricing text-center px-3 mb-4"> <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-dark text-white shadow-sm">Six Months</span>
                <div class="bg-transparent card-header pt-4 border-0">
                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">$<span class="price">25</span><span class="h6 text-muted ml-2">/ 6 months</span></h1>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-unstyled mb-4">
                    <li>Unlimited Comments Post</li>
                        <li>Unlimited Posts Upload</li>
                    </ul> <a href="/stripe" class="btn btn-primary mb-3 bg-dark">Buy</a>
                </div>
            </div>
            <div class="card card-pricing text-center px-3 mb-4"> <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-dark text-white shadow-sm">Tweleve Months</span>
                <div class="bg-transparent card-header pt-4 border-0">
                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">$<span class="price">50</span><span class="h6 text-muted ml-2">/ 12months</span></h1>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-unstyled mb-4">
                    <li>Unlimited Comments Post</li>
                        <li>Unlimited Posts Upload</li>
                    </ul> <a href="/stripe" class="btn btn-primary mb-3 bg-dark">Buy</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@endsection