<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.7 Ajax Request example</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>

  

    <div class="container">

        <h1>Ajax Post</h1>

  

        <form >

  

            <div class="form-group">

                <label>Name:</label>

                <input type="text" name="name" class="form-control" placeholder="Name" required="">

            </div>
            <div class="form-group">

                <label>Email:</label>

                <input type="text" name="email" class="form-control" placeholder="Email" required="">

            </div>
            <div class="form-group">
                <label>Address:</label>

                <input type="text" name="address" class="form-control" placeholder="Address" required="">

            </div>
  

            <div class="form-group">

                <button class="btn btn-success btn-submit">Submit</button>

            </div>

  

        </form>

    </div>

  

</body>

<script type="text/javascript">

   

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var name = $("input[name=name]").val();
        var email= $("input[name=email]").val();
        var address=$("input[name=address]").val();

        $.ajax({

           type:'POST',

           url:"/saveAjax",

           data:{name:name,email:email,address:address},

           success:function(data){

              alert(data.success);
              window.location="/customer_view";

           }

        });

  

	});

</script>

   

</html>