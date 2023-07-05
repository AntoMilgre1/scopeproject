@extends('layout')
@section('content')

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">REGESTRATION</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <!-- <li class="breadcrumb-item text-white active" aria-current="page"></li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        @if($errors->any())
        @foreach($errors->all() as $error)
            <span>{{$error}}</span>
        @endforeach
        @endif


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>register Here<span></span></p>
                    <h1 class="text-center mb-5">Contact For Any Query</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <!-- <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                            <p class="text-center mb-4">Kindly insert all your true datas in the rspecticve fields </p>
                            <form action="/submit" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
                                            <label for="name">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" >
                                            <label for="name">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
                                            <label for="email">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-floating"> 
                                            
                                                <select  class="form-control" name="gender" id="gender">
                                                    <option value="null" class="form-control">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="saab">Female</option>
                                                    <option value="mercedes">Other</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" name="dob" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Date of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" name="<portlet:namespace/>Country" id="countryId" onchange="javascript:countryChange()">
                                                <option value="null">Select Country</option>
                                                <option value='US'>United States</option>
                                                <option value='CA'>Canada</option>
                                                <option value='IND'>India</option>
                                            </select>
                                              
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                        <label id="stateLabel">State:</label>
                                            <select class="form-control" name="<portlet:namespace/>State" id="stateId">
                                            <!-- <label id="stateLabel">State:</label> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select  class="form-control" name="city" id="gender">
                                                    <option value="null" class="form-control">Select City</option>
                                                    <option value="Male">India</option>
                                                    <option value="saab">Pakistan</option>
                                            </select>
                                                                                 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" type="file" name="file">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" >Hobbies</label>
                                        <div class="form-floating row justify-content-around">
                                            <div class="form-check col-2">
                                                <input  class="form-check-input" name="hobbies" type="checkbox" value="Sports" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                 Sports
                                                </label>
                                            </div>
                                            <div class="form-check col-2">
                                                <input class="form-check-input" name="hobbies" type="checkbox" value="Music" id="flexCheckChecked" >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                Music
                                                </label>
                                            </div>
                                            <div class="form-check col-3">
                                                <input class="form-check-input" name="hobbies" type="checkbox" value="vedio Games" id="flexCheckChecked" >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                Vedio Games
                                                </label>
                                            </div>
                                            <div class="form-check col-2">
                                                <input class="form-check-input" name="hobbies" type="checkbox" value="travel" id="flexCheckChecked" >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                Travel
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div> -->
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script>

</script>
@endsection