@extends('layouts.app')
 
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Madyaw Kadyaw Souvenir Shoppe<span>.</span></h1>
          <h2>"Ato ini, kadyawon ta"</h2>
          <br>
        </div>
                        <div class=".d-none">
                        <div class="text-black row justify-content-center">
                            <div class="col-lg-5 ">
                                <div class=".d-none .text-black d-sm-block">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-10 text-blue">Login</h2></div>
                                    <br>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-5">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-5">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-5">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-primary" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-5">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            
      </div>
    </section>








  @endsection