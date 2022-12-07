@extends('master')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-content-center" style="height: 500px">
        <div class="col-sm-5">
            <form action="login" method="POST">
                <div class="form-goup mb-3">
                    @csrf
                  <label for="exampleIanputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-goup mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection

