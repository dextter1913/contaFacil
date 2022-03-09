<div class="container">
    <div class="col-12 col-sm-1 col-md-2 col-lg-3"></div>
    <div class="col-12 col-sm-1 col-md-2 col-lg-3">
        <form action="{{ url('/serviciosPublicos') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('serviciosPublicos.form')
        </form>
    </div>
    <div class="col-12 col-sm-1 col-md-2 col-lg-3"></div>
</div>