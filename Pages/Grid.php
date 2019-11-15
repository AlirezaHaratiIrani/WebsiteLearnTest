<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <style>
        .my {
            width: 100%;
            height: 35px;
            background-color: #BBB;
            border: 1px solid black;
        }

        .my-h {
            width: 100%;
            background-color: #BBB;
            border: 1px solid black;
        }
    </style>

    <title>Grid Sample</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-10 my">
                First
            </div>
        </div>
        <div class="row">
            <div class="col my">
                1 of 2
            </div>
            <div class="col my">
                2 of 2
            </div>
        </div>
        <div class="row">
            <div class="col my">
                1 of 3
            </div>
            <div class="col my">
                2 of 3
            </div>
            <div class="col my">
                3 of 3
            </div>
        </div>
        <hr>
        <hr>
        <hr>
        <div class="row">
            <div class="col my">Column</div>
            <div class="col my">Column</div>
            <div class="w-100"></div>
            <div class="col my">Column</div>
            <div class="col my">Column</div>
        </div>
        <hr>
        <hr>
        <hr>
        <div class="row justify-content-start">
            <div class="col-4 my">
                1 of 2
            </div>
            <div class="col-4 my">
                1 of 2
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 my">
                1 of 2
            </div>
            <div class="col-4 my">
                1 of 2
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-4 my">
                1 of 2
            </div>
            <div class="col-4 my">
                1 of 2
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-4 my">
                1 of 2
            </div>
            <div class="col-4 my">
                1 of 2
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-4 my">
                1 of 2
            </div>
            <div class="col-4 my">
                1 of 2
            </div>
        </div>
        <hr>
        <hr>
        <hr>
        <div class="row">
            <div class="col-9 my-h">.col-9</div>
            <div class="col-4 my-h">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
            <div class="col-6 my-h">.col-6<br>Subsequent columns continue along the new line.</div>
        </div>
        <hr>
        <hr>
        <hr>
        <div class="row">
            <div class="col my-h">
                First, but unordered
            </div>
            <div class="col order-12 my-h">
                Second, but last
            </div>
            <div class="col order-1 my-h">
                Third, but first
            </div>
        </div>
        <hr>
        <hr>
        <hr>
        <div class="row">
            <div class="col-md-4 my-h">.col-md-4</div>
            <div class="col-md-4 offset-md-4 my-h">.col-md-4 .offset-md-4</div>
        </div>
        <div class="row">
            <div class="col-md-3 offset-md-3 my-h">.col-md-3 .offset-md-3</div>
            <div class="col-md-3 offset-md-3 my-h">.col-md-3 .offset-md-3</div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 my-h">.col-md-6 .offset-md-3</div>
        </div>
    </div>
</body>

</html>