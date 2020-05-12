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
                    <div class="col-12">

                            <form action="{{ route('shipments.store') }}" method="POST">
                            <p style="font-size:16px; color:red" align="center"> </p>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Nadawca</h4>
                                      
                                        @csrf                                
                                        <fieldset class="form-group">
                                            <label for="senderCity">Miasto</label>
                                            <input type="text" class="form-control" id="senderCity" name="senderCity" required="true">
                                        </fieldset>                                        
                                        <fieldset class="form-group">
                                            <label for="senderStreet">Ulica</label>
                                            <input class="form-control" type="text" name="senderStreet" required="true">
                                        </fieldset>  
                                    </div>  
                                </div><!-- end col -->

                                <div class="col-xl-6 m-t-sm-40">
                                    <div class="card-box">
                                        <h4 class="header-title m-t-0 m-b-30">Odbiorca</h4>
                                    
                                        <fieldset class="form-group">
                                            <label for="receiverCity">Miasto</label>
                                            <input type="text" class="form-control" id="receiverCity" name="receiverCity" required="true">
                                        </fieldset>                                        
                                        <fieldset class="form-group">
                                            <label for="receiverStreet">Ulica</label>
                                            <input class="form-control" type="text" name="receiverStreet" required="true">
                                        </fieldset> 
                                    </div>   
                                </div><!-- end col -->

                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Zapisz</button>
                                <a class="btn btn-primary" href="{{ route('shipments.index') }}"> Anuluj</a>
                                </div>
                            </div>
                            </form>

                    </div><!-- end col -->
                </div>
                <!-- end row -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Courier Detail</h4>
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