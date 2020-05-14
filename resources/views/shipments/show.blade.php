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
<strong>@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@!</strong> 
</div>


<p><strong>Numer przesyłki:</strong> {{$shipment->pid}}</p>
<p><strong>Przesyłka nadana :</strong>{{$shipment->created_at}}</p>

<div class="row">
    <div class="col-12">
        
            <p style="font-size:16px; color:red" align="center"> </p>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Nadawca</h4>
                    <table class="table">
                        <tr>
                          <th>Miasto:</th>
                          <td>{{$shipment->senderCity}}</td>
                        </tr>
                        <tr>
                          <th>Ulica:</th>
                          <td>{{$shipment->senderStreet}}</td>
                        </tr>
                    </table> 
                    </div>  
                </div><!-- end col -->

                <div class="col-xl-6 m-t-sm-40">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Odbiorca</h4>
                    
                        <table class="table">
                            <tr>
                              <th>Miasto:</th>
                              <td>{{$shipment->receiverCity}}</td>
                            </tr>
                            <tr>
                              <th>Ulica:</th>
                              <td>{{$shipment->receiverStreet}}</td>
                            </tr>
                        </table>  
                    </div>
                </div><!-- end col -->

            </div><!-- end row -->
        
    </div><!-- end col -->
</div>
<!-- end row -->
<hr>
<div class="row">
    <div class="col-12">
            <p style="font-size:16px; color:red" align="center"> </p>
        <div class="row">
            <div class="col-xl-6">
                <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Historia</h4>
                <table class="table">
                    <thead>
                        <th>Opis</th>
                        <th>Godzina</th>
                        <th>Data</th>
                    </thead>
                    <tr>
                        <td>Powiadomienie SMS.</td>
                        <td>{{$shipment->senderCity}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Powiadomienie mail.</td>
                        <td>{{$shipment->senderCity}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Wydanie przesyłki do doręczenia.</td>
                        <td>{{$shipment->senderCity}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Przyjęcie przesyłki w oddziale.</td>
                        <td>{{$shipment->senderCity}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Przyjęcie przesyłki w oddziale.</td>
                        <td>{{$shipment->senderCity}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Przesyłka odebrana przez Kuriera.</td>
                        <td>{{$shipment->senderCity}}</td>
                        <td>aa</td>
                    </tr>
                    <tr>
                        <td>Zarejestrowano dane przesyłki, przesyłka jeszcze nienadana.</td>
                        <td>{{$shipment->senderCity}}</td>
                        <td>hahaha</td>
                    </tr>
                </table> 
                </div>  
            </div><!-- end col -->
            <div class="col-xl-6">
                <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Parametry przesyłki</h4>
                <table class="table">
                    <tr>
                        <th>Miasto:</th>
                        <td>{{$shipment->senderCity}}</td>
                    </tr>
                    <tr>
                        <th>Ulica:</th>
                        <td>{{$shipment->senderStreet}}</td>
                    </tr>
                    <tr>
                        <th>Miasto:</th>
                        <td>{{$shipment->receiverCity}}</td>
                    </tr>
                    <tr>
                        <th>Ulica:</th>
                        <td>{{$shipment->receiverStreet}}</td>
                    </tr>
                </table> 
                </div>  
            </div><!-- end col -->
        </div><!-- end row -->   
    </div><!-- end col -->
</div>



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
