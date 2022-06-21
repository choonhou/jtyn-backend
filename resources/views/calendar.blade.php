@extends('layout.app')
@section('title', 'Financial Data')

@section('content')
<section class="section profile">
  <div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-3 d-grid gap-2">
            <button type="button" class="btn btn-primary" id="prevWeek">Previous</button>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" id="weekpicker"/>
            </div>
            <div class="col-3 d-grid gap-2">
              <button type="button" class="btn btn-primary" id="nextWeek">Next</button>
            </div>
          </div>

        </div>
      </div>

      <div class="card">
          <div class="card-body pt-4">
              <ul class="nav nav-tabs nav-tabs-bordered">
      
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#earning">Earning Calendar</button>
                </li>
      
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#economic">Economic Calendar</button>
                </li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane fade pt-3 active show" id="earning">
                    <div class="row">
                      <div class="col-12">
                          <div class="border-md" id="earningCal">
                              
                          </div>
                      </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-3" id="economic">
                    <div class="row">
                      <div class="col-12">
                        <div class="border-md" id="economicCal">

                        </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection

<style>
.border-md{
    border: 1px solid #000;
    box-shadow: 1px 1px #ddd;
    padding: 10px 5px;
    border-radius: 15px;
    max-height: 80vh;
    height:80vh;
    overflow: auto;
    margin-bottom: 25px;
}

.border-md .card{
    padding:5px 10px;
    border-radius: 15px!important;
    margin-bottom: 10px;
    border:5px solid #26457f!important;
    box-shadow: 5px 5px #ccc!important;
}

.symbol-text{
  font-weight: bold;
  font-size:120%;
}

.value{
  font-size: 110%;
}

.Low{
  width:50%;
  background-color:#4a9c4a;
  padding: 2px 1px;
  color:white;
  text-align: center;
  border-radius: 25px;
}

.High{
  width:50%;
  background-color:#9c4a4a;
  padding: 2px 1px;
  color:white;
  text-align: center;
  border-radius: 25px;
}

.data{
  font-weight: bold;
  font-size: 110%;
}

.beat{
  color:green;
}

.miss{
  color:red;
}
</style>

@section('script')
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<script>
    var startDate,
        endDate;

    var earningURL = "/api/v3/earning_calendar?from={dateFrom}&to={dateTo}&";
    var economicURL = "/api/v3/economic_calendar?from={dateFrom}&to={dateTo}&";
    var tokenUrl = "apikey=";
    var token = '{{env('API_TOKEN')}}';

    var baseURL = '{{env('API_BASEURL')}}';

    var fEarnURL = "";
    var fEconURL = "";

    $('#weekpicker').datepicker({
        autoclose: true,
        format :'dd-mm-yyyy',
        forceParse :false,
    }).on("changeDate", function(e) {
        var date = e.date;
        startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
        endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()+6);
        $('#weekpicker').datepicker('update', startDate);
        $('#weekpicker').val(startDate.getFullYear() + '-' + (startDate.getMonth() + 1) + '-' +  startDate.getDate() + ' to ' + endDate.getFullYear() + '-' + (endDate.getMonth() + 1) + '-' +  endDate.getDate());
        
        calendarSearch();
    });

    date = new Date();
    startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
    endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 6);
    $('#weekpicker').datepicker("setDate", new Date(startDate));
    $('#weekpicker').val(startDate.getFullYear() + '-' + (startDate.getMonth() + 1) + '-' +  startDate.getDate() + ' to ' + endDate.getFullYear() + '-' + (endDate.getMonth() + 1) + '-' +  endDate.getDate());
          
    function calendarSearch(){
        var week = $('#weekpicker').val();
        var dow = week.split(" to ");
        
        fEarnURL = baseURL + earningURL + tokenUrl + token;
        fEconURL = baseURL + economicURL + tokenUrl + token;

        fEarnURL = fEarnURL.replace("{dateFrom}",dow[0]);
        fEarnURL = fEarnURL.replace("{dateTo}",dow[1]);
        fEconURL = fEconURL.replace("{dateFrom}",dow[0]);
        fEconURL = fEconURL.replace("{dateTo}",dow[1]);
        
        console.log(fEarnURL);
        console.log(fEconURL);

        $("#earningCal").html("");
        $("#economicCal").html("");

        getRequest(fEarnURL,drawOutputEarn);
        getRequest(fEconURL,drawOutputEcon);
    }

    $('#prevWeek').click(function(e){
        var date = $('#weekpicker').datepicker('getDate');
        startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()- 7);
        endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() - 1);
        $('#weekpicker').datepicker("setDate", new Date(startDate));
        $('#weekpicker').val(startDate.getFullYear() + '-' + (startDate.getMonth() + 1) + '-' +  startDate.getDate() + ' to ' + endDate.getFullYear() + '-' + (endDate.getMonth() + 1) + '-' +  endDate.getDate());
                
        return false;
    });
    $('#nextWeek').click(function(){
        var date = $('#weekpicker').datepicker('getDate');
        startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()+ 7);
        endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 13);
        $('#weekpicker').datepicker("setDate", new Date(startDate));
        $('#weekpicker').val(startDate.getFullYear() + '-' + (startDate.getMonth() + 1) + '-' +  startDate.getDate() + ' to ' + endDate.getFullYear() + '-' + (endDate.getMonth() + 1) + '-' +  endDate.getDate());
        
        return false;
    });

    function getRequest(url, success) {
      new Promise((resolve, reject) => {
      var req = false;
      try {
        req = new XMLHttpRequest();
      } catch (e) {
        try {
          req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
          try {
            req = new ActiveXObject("Microsoft.XMLHTTP");
          } catch (e) {
            return false;
          }
        }
      }
      if (!req) return false;
      if (typeof success != 'function') success = function() {};
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          if (req.status === 200) {
            success(req.responseText)
          }
        }
      }
      req.open("GET", url, true);
      req.send(null);
      return req;
      });
    }

    function drawOutputEarn(responseText) {
      return new Promise(function(resolve, reject) {
      let resp = JSON.parse(responseText);
      let earning = resp;
      
      let card = '<div class="card"> <div class="row"> <div class="col-12"> {date} </div> </div> <div class="row"> <div class="col-12"> <h6 class="symbol-text">{symbol}</h6> </div> </div> <div class="row"> <div class="col-6 value"> EPS : <span class="data {eps-status}">{eps}</span> </div> <div class="col-6 value"> Est. EPS : <span class="data">{eeps}</span> </div> </div> <div class="row"> <div class="col-6 value"> Revenue : <span class="data {rev-status}">{revenue}</span> </div> <div class="col-6 value"> Est. Revenue : <span class="data">{erevenue}</span> </div> </div> <div class="row" style="margin-top:10px;"> <div class="col-6"> {update} </div> <div class="col-6"> {fiscal} </div> </div> </div>';
      for (let i = 0; i < earning.length; i++) {
        let earn = earning[i];
        let temp = card;

        let date = earn["date"];
        let symbol = earn["symbol"];
        let eps = (earn["eps"] == null)? "-": earn["eps"].toFixed(4);
        let eeps = (earn["epsEstimated"] == null)? "-": earn["epsEstimated"].toFixed(4);
        let revenue = (earn["revenue"] == null)? "-": earn["revenue"];
        let erevenue = (earn["revenueEstimated"] == null)? "-": earn["revenueEstimated"];
        let update = (earn["updatedFromDate"] == null)? "-": earn["updatedFromDate"];
        let fiscal = earn["fiscalDateEnding"];

        let epsStatus = "";
        let revStatus = "";
        if(eps != null){
          if(eps > eeps){
            epsStatus = "beat";
          }else if(eeps > eps){
            epsStatus = "miss";
          }else{
          }
        }
        

        if(revenue != null){
          if(revenue > erevenue){
            revStatus = "beat";
          }else if(erevenue > revenue){
            revStatus = "miss";
          }else{
          }
        }

        temp = temp.replace("{date}",date);
        temp = temp.replace("{symbol}",symbol);
        temp = temp.replace("{eps}",eps);
        temp = temp.replace("{eeps}",eeps);
        temp = temp.replace("{revenue}",revenue);
        temp = temp.replace("{erevenue}",erevenue);
        temp = temp.replace("{update}",update);
        temp = temp.replace("{fiscal}",fiscal);
        temp = temp.replace("{eps-status}",epsStatus);
        temp = temp.replace("{rev-status}",revStatus);

        $("#earningCal").append(temp);
      }
      resolve();
    })
    }

    function drawOutputEcon(responseText) {
      return new Promise(function(resolve, reject) {
      let resp = JSON.parse(responseText);
      let economic = resp;

      let card = '<div class="card"> <div class="row"> <div class="col-6"> {date} ({country}) </div> <div class="col-6"> <h6 class="{impact}">{impact}<h6> </div> </div> <div class="row"> <div class="col-12"> <h6 class="symbol-text">{event}</h6> </div> </div> <div class="row"> <div class="col-6"> Actual : {actual} </div> <div class="col-6"> Prev : {previous} </div> </div> <div class="row"> <div class="col-6"> Changes : {change} ({changePercentage}%) </div> <div class="col-6"> {estimate} </div> </div> </div>';

      for (let i = 0; i < economic.length; i++) {
        let econ = economic[i];

        let temp = card;

        let date = econ["date"];
        let event = econ["event"];
        let country = econ["country"];
        let actual = (econ["actual"] == null)? "-": econ["actual"];
        let previous = (econ["previous"] == null)? "-": econ["previous"];
        let change = (econ["change"] == null)? "-": econ["change"];
        let changePercentage = (econ["changePercentage"] == null)? "-": econ["changePercentage"];
        let estimate = econ["updatedFromDate"];
        let impact = (econ["impact"] == null)? "-": econ["impact"];

        temp = temp.replace("{date}",date);
        temp = temp.replace("{event}",event);
        temp = temp.replace("{country}",country);
        temp = temp.replace("{actual}",actual);
        temp = temp.replace("{previous}",previous);
        temp = temp.replace("{change}",change);
        temp = temp.replace("{changePercentage}",changePercentage);
        temp = temp.replace("{estimate}",estimate);
        temp = temp.replace("{impact}",impact);
        temp = temp.replace("{impact}",impact);

        $("#economicCal").append(temp);
      }
      resolve();
    })
    }

</script>
@endsection