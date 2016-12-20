<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bands (Home)</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!--Datatables-->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="position-ref">

            <div class="content">
                <div class="title m-b-md">
                    Bands
                </div>

                <div class="links">
                    <a href="{{ url('/') }}"><b>Bands</b></a>
                    <a href="{{ url('/albums') }}">Albums</a>
                    <a href="http://akshay.tech" target="_blank">Author</a>
                </div>

            </div>
            </div>
            <br>
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <table class="table">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>Website</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($bands as $band) {
                        print "<tr>";
                        print "<td>".$band->id."</td>";
                        print "<td>".$band->name."</td>";
                        print "<td>".$band->start_date."</td>";
                        print "<td><a href='".$band->website."' target='_blank'>".$band->website."</a></td>";
                        print "<td>".($band->still_active==1 ? "Active" : "Inactive")."</td>";
                        print "<td class='col-md-2'><a class='btn btn-md btn-default' href='/edit/".$band->id."'>Edit</a>&nbsp;&nbsp;<a class='btn btn-md btn-danger' href='delete/".$band->id."'>Delete</a></td>";
                        print "</tr>";
                } ?>
                </tbody>
                </table>
                </div>
                </div>
                </div>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <!-- sortable table-->
        <script>
        $(document).ready(function() {
            $('table').DataTable();
        });
        </script>

    </body>
</html>
