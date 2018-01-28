<script>
    $(document).ready(function() {
        $('#table1').DataTable();
    } );
</script>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    <div class="container">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Departments</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table id="table1" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                        <th>Item Name</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Unit</th>
                                        <th>Type</th>
                                        <th>View Item Details</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Measuring Tape</td>
                                            <td>Traffic Measuring Tape 100m</td>
                                            <td>100</td>
                                            <td>box</td>
                                            <td>MOOE</td>
                                            <td><button class=""><span class="fa fa-info" style="font-size:20px" data-toggle="modal" data-target="#itemdetails"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Laptop</td>
                                            <td>Black, Acer</td>
                                            <td>5</td>
                                            <td>Piece</td>
                                            <td>CO</td>
                                            <td><button class=""><span class="fa fa-info" style="font-size:20px" data-toggle="modal" data-target="#itemdetails"></span></button></td>
                                        </tr>
                                    </tbody>
                        </table>
                    </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>

<!-- start of modal of info -->
            <!-- Modal -->
     <div class="modal fade" id="itemdetails" role="dialog">
    <div class="modal-dialog" style="overflow-x:auto; width:auto ">
        <div class="container" style="background-color:white; width:auto; height: auto; size:50px;">

            <!-- Modal content-->
            <div class="modal-header">
                <h4 class="modal-title" align="center"><b>Item Details<b></h4>
            </div>
            <div class="modal-body" align="center">

           <table id="details" class="table table-bordered table-striped" width="100%">
                        <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Description</th>
                            <th>Unit</th>
                            <th>Type</th>
                            <th>Delivery Date</th>
                            <th>Date Received</th>
                            <th>Exp. Date</th>
                            <th>Cost</th>
                            <th>PO No.</th>
                            <th>PR No.</th>
                            <th>OBR No.</th>
                            <th>Serial No.</th>
                            <th>Account Code</th>
                            <th>Supplier</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Laptop</th>
                            <th>Dell 15 inches</th>
                            <th>Piece</th>
                            <th>CO</th>
                            <th>12-21-2017</th>
                            <th>12-22-2017</th>
                            <th>12-21-2035</th>
                            <th>50,000</th>
                            <th>1021-17.</th>
                            <th>109</th>
                            <th>208</th>
                            <th></th>
                            <th>1-07-01-010</th>
                            <th>Samsung</th>
                        </tr>
                        </tbody>
                    </table>
            </div>
          </div>

        </div>
      </div>