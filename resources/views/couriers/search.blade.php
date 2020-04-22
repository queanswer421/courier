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
                                <form name="search" method="post" >
                                <h4 class="m-t-0 header-title">Search By Reference Number</h4>
                                <div class="form-group">
                                                    <label for="disabledSelect">Reference Number</label>
                                                   <input type="text" class="form-control" id="searchdata" name="searchdata" required="true">
                                                </div>

                                                <div class="form-group row">
                                    
                                    <div class="col-10">
                                      <p style="text-align: center;">  <button type="submit" name="search" class="btn btn-primary">Search</button></p>
                                       
                                    </div>
                                    
                                </div>
                                </form>

<h4 align="center">Result against "" keyword </h4>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <tr>
          <th>S.NO</th>
          <th>Reference Number</th>
          <th>Sender Name</th>
          <th>Recipient Name</th>
          <th>Courier Date</th>
        
               <th>Action</th>
            </tr>
                                    </tr>
                                    </thead>

          
            <tr>
              <td>ss</td>
        
              <td>2</td>
              <td>2</td>
            <td>2</td>
            <td>2</td>
                              <td><a href="view-courier.php?editid=33">View Detail</a></td>
            </tr>

<tr>
<td colspan="8"> No record found against this search</td>

</tr>



                                    
                                </table>
                            </div>
                        </div>
                    </div> <!-- end row -->


</div></div>
</div>


</div>
@endsection