<div id="wrapper">
    <!-- Begin page -->

<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
    
                                <form action="{{ route('packages.history') }}" method="GET">
                                <p style="font-size:16px; color:red" align="center"> </p>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card-box">
                                        <h4 class="header-title m-t-0 m-b-30">Poszukiwana paczka</h4>
                                          
                                            @csrf                                
                                            <fieldset class="form-group">
                                                <label for="trackNo">Track No</label>
                                                <input type="text" class="form-control" id="pid" name="pid" required="true">
                                            </fieldset>   
                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary">Szukaj</button>
                                            {{-- <a class="btn btn-primary" href="{{ route('shipments.index') }}"> Anuluj</a> --}}
                                            </div>                                      
                                        </div> 

                                    </div><!-- end col -->    
                                </div><!-- end row -->
                                </form>
    
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->


</div></div>
</div>


</div>
