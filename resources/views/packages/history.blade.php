<h2>Historia Paczki:</h2>
{{$history->pid}}
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
                        <td>{{$history->h1}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Powiadomienie mail.</td>
                        <td>{{$history->h2}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Wydanie przesyłki do doręczenia.</td>
                        <td>{{$history->h2}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Przyjęcie przesyłki w oddziale.</td>
                        <td>{{$history->h2}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Przyjęcie przesyłki w oddziale.</td>
                        <td>{{$history->h2}}</td>
                        <td>hahaha</td>
                    </tr>
                    <tr>
                        <td>Przesyłka odebrana przez Kuriera.</td>
                        <td>{{$history->h2}}</td>
                        <td>aa</td>
                    </tr>
                    <tr>
                        <td>Zarejestrowano dane przesyłki, przesyłka jeszcze nienadana.</td>
                        <td>{{$history->h2}}</td>
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
                        <td>{{$history->senderCity}}</td>
                    </tr>
                    <tr>
                        <th>Ulica:</th>
                        <td>{{$history->senderStreet}}</td>
                    </tr>
                    <tr>
                        <th>Miasto:</th>
                        <td>{{$history->receiverCity}}</td>
                    </tr>
                    <tr>
                        <th>Ulica:</th>
                        <td>{{$history->receiverStreet}}</td>
                    </tr>
                </table> 
                </div>  
            </div><!-- end col -->
        </div><!-- end row -->   
    </div><!-- end col -->
</div>