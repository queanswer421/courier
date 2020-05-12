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
                            <h4 class="m-t-0 header-title">Lista paczek:</h4>
                            
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <tr>
          <th>#</th>
          <th>Numer paczki</th>
          <th>Nadawca</th>
          <th>Odbiorca</th>
          <th>Data nadania</th>
        
               <th>Akcje</th>
            </tr>
                                    </tr>
                                    </thead>

                                    @foreach ($shipments as $shipment)
            <tr>
                
                    
              <td>lp</td>
        
              <td>{{$shipment->senderCity}}</td>
              <td>SenderName</td>
            <td>RecipientName</td>
            <td>{{$shipment->created_at}}</td>
                              <td><a href={{ route('shipments.show', $shipment) }}>Szczegóły</a></td>

            </tr>
            @endforeach                                  
                                </table>
                            </div>
                        </div>
                    </div> <!-- end row -->
</div></div>
</div>
</div>

@endsection 
