<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Albums</title>

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
                    Albums
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">Bands</a>
                    <a href="{{ url('albums') }}"><b>Albums</b></a>
                    <a href="http://akshay.tech" target="_blank">Author</a>
                </div>
            </div>
            </div>
            <div class="container">
            <div class="row">
            <div class="col-md-12">
                <br>
                    <b>Filter by Band: </b>
                    <form>
                    <select onchange="this.form.action = '/albums/'+this.value; this.form.submit();">
                    <?php
                    echo "<option value='' ".((isset($bandid) && empty($bandid)) ? "selected" : "").">- All -</option>";
                    foreach($bands as $band) {
                    echo "<option value='".$band->id."'".((isset($bandid) && $band->id==$bandid) ? "selected" : "").">".$band->name."</option>";
                    }
                    ?>
                    </select>
                    </form>
                <br>

                <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Band/Artist</th>
                    <th>Date Recorded</th>
                    <th>Date Released</th>
                    <th># of Tracks</th>
                    <th>Label</th>
                    <th>Producer</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach($albums as $album) {
                        $band = App\Band::find($album->band_id);
                        print "<tr>";
                        print "<td>".$album->id."</td>";
                        print "<td>".$album->name."</td>";
                        print "<td>".$band->name."</td>";
                        print "<td>".$album->recorded_date."</td>";
                        print "<td>".$album->release_date."</td>";
                        print "<td>".$album->number_of_tracks."</td>";
                        print "<td>".$album->label."</td>";
                        print "<td>".$album->producer."</td>";
                        print "<td>".$album->genre."</td>";
                        print "<td class='col-md-2'><a class='btn btn-md btn-default' href='/albums/edit/".$album->id."'>Edit</a>&nbsp;&nbsp;<a class='btn btn-md btn-danger' href='/albums/delete/".$album->id."'>Delete</a></td>";
                        print "</tr>";
                    }
                    ?>
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
