<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title> Login  </title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>



    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Modal
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content login-standard">
            <div class="modal-header border-0 p-0">
              <h5 class="modal-title" id="exampleModalLabel"> Logga in </h5>
              <button type="button" class="close" id="fancybox-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body p-0">
                <div id="fancybox-content"class="modal-inner_body">
                    <div>
                        <div class="">
                            <div id="login-form" class="login_outer">
                                <div id="login-wrapper">
                                    <div class="already_customer">
                                       
                                        <form class="dummy">
                                            <div class="form">
                                                <div> <label> E-post 
                                                    <input type="text" name="email" id="login-email"
                                                            autocomplete="email"> 
                                                        </label> 
                                                    </div>
                                                <div> 
                                                    <label> Lösenord 
                                                        <input type="password" name="password" id="login-password">
                                                    </label> 
                                                </div>
                                                <div class="buttons_wrapper my-3 d-flex align-items-center">
                                                     <a id="enter-forgot-login" class=""> Glömt ditt
                                                        lösenord? </a> 
                                                        <a id="login-submit" class="button ml-auto login_btn"> <span class="normal">Logga in</span> </a></div>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer new_customer border-0">
                <div class="">
                    <h3>Ny medlem</h3>
                    <p> Registrera dig för att få tillgång till unika erbjudanden och de senaste nyheterna via
                        e-post. </p>
                    <div class="buttons_wrapper common_btn">
                         <a class="button m-auto" href="javascript:;">Registrera
                            dig</a> </div>
                </div>
            </div>
          </div>
        </div>
      </div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>