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
    
                                <form action="{{ route('shipments.results') }}" method="GET">
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
                    <div class="row">

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                              </div>

                    </div>
                    <div class="row">
                        <div> <input type="email" name="EMAIL" placeholder="Your email address" required=""> <input type="submit" value="Sign up"></div>
                        
                    </div>


</div></div>
</div>


</div>

@endsection