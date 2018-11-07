<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Uer Management Data</title>

    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/user.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    <!-- jquery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- online js,jquery library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- end online js,jquery library -->

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
<!--ADD Modal -->
<div id="ADD" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" >

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center;font-family: 'Arial Black'">ADD Child Data</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{url('/AddRecord')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" placeholder="Child Name" class="form-control" name="nameADD" value="{{ old('name') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="class" class="col-md-4 control-label">Class</label>
                        <div class="col-md-6">
                            <input id="class" type="text" placeholder="Child Class" class="form-control" name="classADD" value="{{ old('class') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dob" class="col-md-4 control-label">DOB</label>
                        <div class="col-md-6">
                            <input id="dob" type="text" placeholder="Child Date Of Birth" class="form-control" name="dobADD" value="{{ old('dob') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Contact</label>
                        <div class="col-md-6">
                            <input id="contact" type="text" placeholder="Contact number" class="form-control" name="contactADD" value="{{ old('contact') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input id="email" type="text" placeholder="Email" class="form-control" name="emailADD" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="Submit" name="submit" class="btn btn-default" style="margin-left: 35%;background-color: #1f648b; color: white;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--EDIT Modal -->
<div id="'EDIT" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"style="text-align: center;font-family: 'Arial Black'">EDIT ABC DATA</h4>
            </div>
            <div class="modal-body" style="margin-top:2%;">
                <form class="form-horizontal" method="POST" action="{{url('/EditRecord','id')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="nameEDIT" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" placeholder="Child Name" class="form-control" name="nameEDIT" id="nameEDIT" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="classEDIT" class="col-md-4 control-label">Class</label>
                        <div class="col-md-6">
                            <input id="class" type="text" placeholder="Child Class" class="form-control" name="classEDIT" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dobEDIT" class="col-md-4 control-label">DOB</label>
                        <div class="col-md-6">
                            <input id="dob" type="text" placeholder="Child Date Of Birth" class="form-control" name="dobEDIT" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactEDIT" class="col-md-4 control-label">Contact</label>
                        <div class="col-md-6">
                            <input id="contact" type="text" placeholder="Contact number" class="form-control" name="contactEDIT" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailEDIT" class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input id="email" type="text" placeholder="Email" class="form-control" name="emailEDIT" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="Submit" name="submit" class="btn btn-default" style="margin-left: 35%;background-color: #1f648b; color: white;">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="container" style="margin-top: 5%;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
                <div class="panel-heading" style="text-align: center">
                    <h1 style="font-family: Algerian; color: #1f648b">User Management System</h1>
                </div>
                <div class="row" style="margin-top: 3%;">
                    <div class="col-md-10 col-md-offset-1">

                        <div class="panel panel-default panel-table">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col col-xs-6">
                                        <input type="text" id="search" placeholder="Search..">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="col col-xs-6 text-right">

                                        <button type="button"  class="btn btn-sm btn-primary btn-create" data-toggle="modal" data-target="#ADD">ADD New</button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Date Of Birth</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th><em class="fa fa-cog"></em></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <div id="searchData">
                                            @foreach($children as $child)
                                                <tr>
                                                    <td>{{$child->Child_Name}}</td>
                                                    <td>{{$child->Child_Class}}</td>
                                                    <td>{{$child->DOB}}</td>
                                                    <td>{{$child->Contact}}</td>
                                                    <td>{{$child->Email}}</td>
                                                    <td align="center">
                                                        <a class="btn btn-default" data-toggle="modal" data-target="#EDIT"><em class="fa fa-pencil"></em></a>
                                                        <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                                    </td>
                                                </tr>
                                                <!-- Page division start -->
                                            @endforeach
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                            <div style="float:right;">{{$children->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $('#EDIT').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var name = button.data('name')
        var clas = button.data('class')
        var dob = button.data('dob')
        var contact = button.data('contact')
        var email = button.data('email')

        var modal = $(this)
        modal.find('.modal-body #nameEDIT').val(name)
    });

    $(function () {
        $("#search").keyup(function () {
            $("#search").autocomplete({
                source: "Search"
            });
            if (!$(this).val() == "") {
                $.get("search/" + $(this).val(), function (name) {
                    var data = JSON.parse(name);

                    var count=0;
                    var dd = '<div id="searchData" class="post-content"> <div class="row">';
                    for (x in data) {

                        dd += 'hgfhgjh';

                        count++;
                    }
                    dd+='</div>';
                    $("#searchData").html(dd);

                });
            }
        });
    });
</script>
</body>
</html>