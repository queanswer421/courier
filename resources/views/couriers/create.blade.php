@extends('layout.app')

@section('content')

<div id="wrapper">
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Dodaj przesyłke</h4>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            Nadawca
                            <form action="{{ route('couriers.store') }}" method="POST">
                                @csrf
                                 <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6">
                                        <div class="form-group">
                                          <label for="trackNo">Numer przesyłki:</label>
                                          <input type="text" class="form-control" name="trackNo"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6">
                                        <div class="form-group">
                                          <label for="description">Opis:</label>
                                          <input type="text" class="form-control" name="description"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6">
                                        <div class="form-group">
                                          <label for="trackNo">Numer przesyłki:</label>
                                          <input type="text" class="form-control" name="trackNo"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6">
                                        <div class="form-group">
                                          <label for="description">Opis:</label>
                                          <input type="text" class="form-control" name="description"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Zapisz</button>
                                            <a class="btn btn-primary" href="{{ route('couriers.index') }}"> Anuluj</a>
                                    </div>
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            Odbiorca
                        </div>    
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <p style="font-size:16px; color:red" align="center"> </p>
                            <div class="row">
                                <div class="col-xl-6">
                                    <h4 class="header-title m-t-0 m-b-30">Nadawca</h4>










                                    <form action="{{ route('couriers.store') }}" method="POST">
                                        @csrf
                                         <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                  <label for="question">Twoje pytanie:</label>
                                                  <input type="text" class="form-control" name="question"/>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                  <label for="email">Twój e-mail:</label>
                                                  <input type="text" class="form-control" name="email"/>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    <button type="submit" class="btn btn-primary">Zapisz</button>
                                                    <a class="btn btn-primary" href="{{ route('couriers.index') }}"> Anuluj</a>
                                            </div>
                                        </div>
                                    </form>



                                    <form name="submit" method="post"> 
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">Sender Branch</label>
                                            <select name='senderbranchname' id="senderbranchname" class="form-control white_bg" readonly='true'>

</select>   
                                        </fieldset>
                                        
                                        <fieldset class="form-group">
                                            <label for="exampleInputPassword1">Sender Name</label>
                                            <input type="text" class="form-control"
                                                    id="exampleInputPassword1" name="sendername" required="true">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="exampleSelect1">Sender Contact Number</label>
                                            <input type="text" class="form-control"
                                                    id="exampleInputPassword1" name="sendercontactnumber" maxlength="10" required="true">
                                        </fieldset>
                                        
                                        <fieldset class="form-group">
                                            <label for="exampleTextarea">Sender Address</label>
                                            <textarea class="form-control" id="exampleTextarea" rows="3" name="senderaddress" required="true"></textarea>
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <label >Sender City</label>
                                            <input class="form-control" type="text" name="sendercity" required="true">
                                        </fieldset>
                                            <fieldset class="form-group">
                                            <label >Sender State</label>
                                            <input class="form-control" type="text" name="senderstate" required="true">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label >Sender Pincode</label>
                                            <input class="form-control" type="text" name="senderpincode" maxlength="6" required="true">
                                        </fieldset>
                                            <fieldset class="form-group">
                                            <label >Sender Country</label>
                                            <input class="form-control" type="text" name="sendercountry" required="true">
                                        </fieldset>
                                        
                                    
                                </div><!-- end col -->

                                <div class="col-xl-6 m-t-sm-40">
                                        <h4 class="header-title m-t-0 m-b-30">Odbiorca</h4>
                                    
                                        <fieldset>
                    
                                            
                                                <label for="disabledSelect">Recipient Name</label>
                                                <input type="text" class="form-control m-b-20" id="exampleInputPassword1" name="recipientname" required="true">
                                        
                                        </fieldset>

                                        <fieldset>
                                            <label >Recipient Contact Number</label>
                                            <input class="form-control m-b-20" type="text"  name="recipientcontactnumber" required="true" maxlength="10">
                                            
                                            
                                        </fieldset>

                                        <fieldset>
                                            <label>Recipient Address</label>

                                            <textarea class="form-control m-b-20" id="exampleTextarea" rows="3" name="recaddress" required="true"></textarea>

                                            

                                            
                                            

                                        </fieldset>
                                        <fieldset>
                                            <label >Recipient City</label>
                                            <input class="form-control m-b-20" type="text"name="recipientcity" required="true">
                                            
                                            
                                        </fieldset>
                                            <fieldset>
                                            <label >Recipient State</label>
                                            <input class="form-control m-b-20" type="text" name="recipientstate" required="true">
                                            
                                            
                                        </fieldset>
                                        <fieldset>
                                            <label >Recipient Pincode</label>
                                            <input class="form-control m-b-20" type="text" name="recipientpincode" required="true" maxlength="6">
                                            
                                            
                                        </fieldset>
                                            
                                            <fieldset class="form-group">
                                            <label >Recipient Country</label>
                                            <input class="form-control m-b-20" type="text" name="recipientcountry" required="true">
                                        </fieldset>
                                    
                                </div><!-- end col -->

                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->




                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Courier Detail</h4>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Courier Description</label>
                                <div class="col-10">
                                    <textarea class="form-control" type="text" value=""  name="courierdes" required="true" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Parcel weight(in kg)</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="" name="courierwt" required="true" placeholder="for example:2kg or .2kg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Parcel Dimension(in inch)</label>
                                <div class="col-2">
                                    <input class="form-control" type="text" value="" id="" name="length" required="true">
                                </div>X
                                <div class="col-2">
                                    <input class="form-control" type="text" value="w" id="" name="width" required="true">
                                </div>X
                                <div class="col-2">
                                    <input class="form-control" type="text" value="" id="" name="height" required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-url-input" class="col-2 col-form-label">Parcel Price</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="" name="parcelprice" required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-10">
                                    <p style="text-align: center;">  <button type="submit" name="submit" class="btn btn-primary">Submit</button></p>    
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>




    </div>
    <!-- End content-page -->


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->






</div>
</div>
</div>
<!-- END wrapper -->
@endsection