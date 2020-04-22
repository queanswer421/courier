@extends('layout.app')

@section('content')
<div id="wrapper">
    <!-- Begin page -->

<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Courier View</h4>
                             
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> 
</div>


<p><strong>Reference Number:</strong> RefNumber</p>
<p><strong>Courier Date :</strong>'CourierDate'</p>
<div class="row">                                    
<div class="col-6">


  <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">    
  <tr>
    <th style="text-align: center" colspan="2">Sender Details</th>
  </tr>    

<tr>
<th>Sender Branch</th>
<td>SenderBranch</td>
</tr>
<tr>
<th>Sender Name</th>
<td>SenderName</td>
</tr>
<tr>
<th>Sender Contact Number</th>
<td>SenderContactnumber</td>
</tr>
<tr>
<th>Sender Address</th>
<td>SenderAddress</td>
</tr>
<tr>
<th>Sender City</th>
<td>SenderCity</td>
</tr>
<tr>
<th>Sender State</th>
<td>SenderState</td>
</tr>
<tr>
<th>Sender Pincode</th>
<td>SenderPincode</td>
</tr>
<tr>
<th>Sender Country</th>
<td>'SenderCountry</td>
</tr>
</table>
</div>
<div class="col-6">
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
   <tr>
    <th style="text-align: center" colspan="2">Recipient Details</th>
  </tr>  

<tr>
<th>Recipient Name</th>
<td>RecipientName</td>
</tr>
<tr>
<th>Recipient Contact Number</th>
<td>RecipientContactnumber</td>
</tr>
<tr>
<th>Recipient Address</th>
<td>RecipientAddress</td>
</tr>
<tr>
<th>Recipient City</th>
<td>RecipientCity</td>
</tr>
<tr>
<th>Recipient State</th>
<td>RecipientState</td>
</tr>
<tr>
<th>Recipient Pincode</th>
<td>RecipientPincode</td>
</tr>
<tr>
<th>Recipient Country</th>
<td>RecipientCountry</td>
</tr>
</table>
</div></div>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<tr>
<th>Courier Description</th>
<td>'CourierDes</td>
</tr>
<tr>
<th>Parcel Weight</th>
<td>'ParcelWeight</td>
</tr>
<tr>
<th>Parcel Dimension Length</th>
<td>ParcelDimensionlen</td>
</tr>
<tr>
<th>Parcel Dimension Width</th>
<td>ParcelDimensionwidth</td>
</tr>
<tr>
<th>Parcel Dimension Height</th>
<td>ParcelDimensionheight</td>
</tr>
<tr>
<th>Parcel Price</th>
<td>ParcelPrice</td>
</tr>




<tr>
<th>Status</th>
<td></td>
</tr>

</tr>
</table>



<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<tr align="center">
<th colspan="4" >Courier History</th> 
</tr>
<tr>
<th>#</th>
<th>Remark</th>
<th>Status</th>
<th>Time</th>
</tr>

<tr>
<td></td>
<td>remark</td> 
<td>corstatus</td> 
<td>StatusDate</td> 
</tr>

</table>

<p align="center">                            
<button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Take Action</button></p>  


      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
<form name="submit" method="post" enctype="multipart/form-data"> 
<table width="100%">
<tr>
<th>Staff Remark :</th>
<td>
<textarea name="remark" placeholder="" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
</tr>

<tr>
<th>Status:</th>
<td>
<select name="status" class="form-control wd-450" required="true" >
 <option value="Courier Pickup" selected="true">Courier Pickup</option>
 <option value="Shipped">Shipped</option>
 <option value="Intransit">Intransit</option>
 <option value="Arrived at Destination">Arrived at Destination</option>
 <option value="Out for Delivery">Out for Delivery</option>
 <option value="Delivered" style="color: green">Delivered</option>
</select></td>
</tr>
</table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                               <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                                 </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div> <!-- end row -->

</div></div>
</div>

</div>

@endsection
