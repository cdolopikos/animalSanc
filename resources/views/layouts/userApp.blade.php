<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Animal Sanctuary</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    @include('inc.navbar')
    <div class="conatiner">
    </div id=table>
    <table class=" table table-striped table-dark text-center table-hover table-reflow ">
        <thead>
          <tr>
            <th>Pet Name</th>
               <th>Date Of Birth</th>
               <th>Type</th>
               <th>Description</th>
               <th>Picture</th>
               <th>Availability</th>
               <th colspan="3">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($animals as $temp)
             <tr>
               <td>{{$temp['name']}}</td>
               <td>{{$temp['dob']}}</td>
               <td>{{$temp['type']}}</td>
               <td>{{$temp['description']}}</td>
               <td><center>
                 <img style="width:50%;height:50%" src="{{asset('storage/images/'.$animals->picture)}}" />
               </center></td>
               <td>{{$temp['availability']}}</td>
               </tr>
               @endforeach
        </tbody>
      </table>
    </div>
    </div>

    @yield('content')
  </body>
</html>
