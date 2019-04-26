@section('navbar')
<header>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <a class="navbar-brand" href="/">Aston Animal Sanctuary</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarCollapse">
     <ul class="navbar-nav mr-auto">
       <li>
         <a class="nav-link" href="/contact">Profile</a>
       </li>
       <li>
         <a class="nav-link" href="/about">Add Animal</a>
       </li>
     </ul>
  <form class="form-inline mt-2 mt-md-0">
        <a class="btn btn-outline-primary my-2 my-sm-0" href="/logout">Logout</a>
     </form>
   </div>
 </nav>
</header>
@show
