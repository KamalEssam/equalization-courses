@include('includes.header')
@foreach($faculties as $fac)
<div class="card" style="width: 18rem;display: inline-block; text-align: center; margin-left: 71px; margin-top: 114px; ">
    <img class="card-img-top" src="images/AOUfac.jpg" alt="AOU Faculty image ">
    <div class="card-body">

        <h5 class="card-title"> {{$fac->name}} </h5>
        <p class="card-text"></p>
        <a href="{{url('faculty', ['faculty_id' => $fac->id])}}" class="btn btn-primary">Equalize Courses</a>

    </div>
</div>
@endforeach
@include('includes.footer')
