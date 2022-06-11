                                  {{--start  dashboard navbar  --}}
    

                                  <header>
                                    {{-- <h1 class="text-center mb-5  "  style="color:#e84393; ">Admin Dashboard</h1> --}}
                                    <nav class="navbar navbar-expand-lg navbar-light mt-5   " style="background-color: #a29bfe;">
                                        <div class="container">
                                          <h4 style="color:white; " href="#">ECommerce Admin Panel</h4>
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                          </button>
                                          <a href="{{route('users.index')}}" class="nav-link text-white">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                             All Users
                                          </a>
                                          <a href="{{route('products.index')}}" class="nav-link text-white">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                           All Products
                                          </a>

                                          <a href="{{route('category.index')}}" class="nav-link text-white">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                           All Categories
                                          </a>

                                          <a href="{{route('roles.index')}}" class="nav-link text-white">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                            Roles
                                          </a>

                                          <a href="/" class="nav-link text-white">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                          Home
                                          </a>

                                          {{-- <li class="nav-item  ">
                                            <a class="nav-link " aria-current="page" href="/">Home</a> --}}
                                        


                                          <div class=" navbar collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                                <a href="#" class="btn m-2" style=" border:2px solid #f5f6fa; color:whitesmoke;width:80px;" role="button" data-bs-toggle="button">Login</a>
                                                <a href="#" class="btn  m-2" style=" border:2px solid #f5f6fa; color:whitesmoke;width:80px;" role="button" data-bs-toggle="button">Register</a>
                                              
                                            </ul>
                            
                                          </div>
                                        </div>
                                      </nav>  
                            
                            
                                  </header>
                            
                                                           {{--End  dashboard navbar  --}}



                                                           
                            
                            
                      