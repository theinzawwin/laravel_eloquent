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
    <script>
     function showDetail(id){
        $.ajax({

        type:'GET',

        url:"/findCustomer/"+id,

        success:function(data){
                alert("Name is "+data.name);
        }
        });
    }
 
    </script>
</head>

<body>

  

    <div class="container">

        <h1>Customer List</h1>
        <a href="/customers/create">Create Customer</a>
        <div class="row">
            <table class="table" id="customers">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

    </div>

  

</body>

<script type="text/javascript">

   

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    $(document).ready(function(){
        
    
        $.ajax({

           type:'GET',

           url:"/customerList",

           success:function(data){

              $("#customers tbody").empty();
              data.forEach(function(val,i){
                  var o=i+1;
                 $("#customers tbody").append(
                        '<tr>'
                            +'<td>'+o+'</td>'
                            +'<td>'+val.name+'</td>'
                            +'<td>'+val.email+'</td>'
                            +'<td>'+val.address+'</td>'
                            +'<td><a class="btn btn-success" onclick="showDetail('+val.id+')">Detail</a></td>'
                        +'</tr>'

                 );
              });

           }

        });

  
    });
  

</script>

   

</html>