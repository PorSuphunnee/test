<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<style>
input {
  width: 100;height: 100px;
}

</style>
<body>
<div class="container mt-5">
    <h2 class="mb-4">All launches table</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date UTC</th>
                <th>Picture</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
            @foreach($data as $item)
            <tr>
              <td>{{$item['name']}}</td>
              <td>{{$item['date_utc']}}</td>
              <td><img src={{$item['links']['patch']['small']}}></td>
              <td>{{$item['details']}}</td>
              <td><button class="w3-button w3-black detail" value="{{$item['launchpad']}}" >Show detail</button></td>
            </tr>
            @endforeach
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   

<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading">Launchpads</h4>
            </div>
            <div class="modal-body">
            <form id="CustomerForm" name="CustomerForm" class="form-horizontal">
                   <input type="hidden" name="Customer_id" id="Customer_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Full_name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="full_name" name="name"  value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">RocketsID</label>
                        <div class="col-sm-12">
                            <textarea id="rockets" name="rockets" required="" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Locality</label>
                        <div class="col-sm-12">
                            <textarea id="locality" name="locality" required="" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Details</label>
                        <div class="col-sm-12">
                            <textarea id="details" name="details" required="" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-12">
                            <textarea id="status" name="status" required="" class="form-control"></textarea>
                        </div>
                    </div>

                </form>

             
            </div>
        </div>
    </div>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
    var table = $('.yajra-datatable').DataTable();
  });

  $('.detail').click(function () {
    console.log("value"+$(this).val())
    var url = "https://api.spacexdata.com/v4/launchpads";
        var tour_id= $(this).val();
        $.get(url + '/' + tour_id, function (data) {
            //success data
            console.log(data);
            console.log(data.rockets);
            $('#rockets').val(data.rockets);
            $('#full_name').val(data.full_name);
            $('#locality').val(data.locality);
            $('#details').val(data.details);
            $('#status').val(data.status);
        }) 
        $('#ajaxModel').modal('show');
    });
</script>
</html>