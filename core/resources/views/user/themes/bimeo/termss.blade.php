<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('frontassets/login.css') }}">
  <link rel="stylesheet" href="{{ asset('frontassets/custom.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  <title>SalesForce</title>
</head>
<body class="body-bg">
    
    <style>
            .loader-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: 9999;
            }

            .loader {
                border: 4px solid #f3f3f3;
                border-top: 4px solid #3498db;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            #loader p {
                margin-top: 20px;
                margin-left: 10px;
                color: white;
                font-weight: bold;
            }

        </style>

    <div class="loader-wrapper" id="loader">
            <div class="loader"></div>
            <p> Loading...</p>
        </div>
 

@php
 $set = \App\Models\Setting::get()->first();
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class=" pt-2 col-md-7">
            <div class="card">
                <div class="card-header text-white">
                     {!! $set->term !!}
                </div>
            </div>
        </div>
    </div>
</div>




    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.getElementById("loader");
            const content = document.querySelector("body");

            // Simulate loading time (you can replace this with actual loading code)
            setTimeout(function() {
                loader.style.display = "none";
                content.style.display = "block";
            }, 1000); // Change 2000 to the actual loading time in milliseconds
            });
    </script>

  </div>
</body>
<script src="{{ asset('frontassets/custom.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>