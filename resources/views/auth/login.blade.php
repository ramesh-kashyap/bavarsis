
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Russo+One&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('')}}assets/css/style121312312223.css">
        <link rel="icon" type="image/x-icon" href="{{asset('')}}assets/icons/fav.png">
        <link
                rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />


        <style>.success_info{
    padding: 20px 12px;
border-radius: 10px;
width: 98%;
background: #d7a3e6;
    color: #fff;
    font-size: 14px;
}


.danger_info{
    padding: 20px 12px;
    border-radius: 10px;
    width: 98%;
    background: rgb(116, 26, 26);
    color: #fff;
    font-size: 14px;
}

          .clasas_form{
            width: 100%;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
gap: 20px;
          }
        </style>

</head>
<body>
<div class="wrapper wrapper--start">
    <main class="start">
        <section class="start__image-side">
                        <img src="{{asset('')}}assets/img/reg_img1.png" alt="" style="width: auto;">
                        
        </section>
        <section class="start__form-side">
<!--                <div class="language__container"></div>-->
            <div class="start__form-header">
               <a href="index.html"> <img src="{{asset('')}}assets/icons/logo-main.svg" alt=""></a>
            </div><div class="start__form start__form--login"><div class="start__form-title"><div class="start__main-text _one _f48">Welcome

            </div><div class="start__sub-text _medium _f16"><span>Don&#039;t have an account? 

            </span>&nbsp; <a href="page.php=create.html"  class="start__link">Register

            </a></div></div><div class="start__form-inputs">
                <form   class="signin_validate clasas_form" method="POST"	
             action="{{route('login')}}">
             
             {{ csrf_field() }}
             <style type="text/css">.
             
             form-control{margin-bottom: 25px;}.bg-danger{color: #fff;border-radius: 50px;}.err{color: rgb(208, 60, 60);}</style>
             <!-- <fieldset><table class="table" style=""> --><div class="start__main-inputs-wrapper">
                <div class="settings__password-new-repeat">	<tr><div class="hide_box_0">
                    <style type="text/css"></style><div class="form-input">
                        <input name="username" placeholder="Usernmae"  value="" size="20" type="text" 
                        class="string_small start__input _semi _f17 _pink"></div></div></tr><tr><div>
                            
                        <style type="text/css"></style>	
                             	<div class="form-input"><input name="password" placeholder="Enter password*"  value="" size="20" type="password"  class="password  start__input _semi _f17 _pink  ">
                            </div></div></tr>									
                            </div></div><br><style type="text/css"></style><!-- <center> -->
                                <button type="submit"class="button start__input start__input--submit _one _f17 _white _upper"data-hover="Login to account" id="WalletWithdrawalButton" ><div>
                                    Login to account</div></button><!--   
                                         <button  class="btn btn-lg btn-block btn-dark lift text-uppercase">
                                            <span class="btn_page"></span></button> --><!-- </center> --></form>
                                </div><a href="page.php=forgot.html" class="start__link _regular _f16">
                                    Reset password </a></div><div class="start__form-footer _one _f13">
  <!-- Privacy policy -->
</div>
</section>
</main>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="{{asset('')}}assets/js/app.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script>

var container = document.getElementsByClassName("settings__password-new-repeat start__payment-password")[0];
container.onkeyup = function(e) {
    var target = e.srcElement;
    var maxLength = parseInt(target.attributes["maxlength"].value, 10);
    var myLength = target.value.length;
    if (myLength >= maxLength) {
        var next = target;
        while (next = next.nextElementSibling) {
            if (next == null)
                break;
            if (next.tagName.toLowerCase() == "input") {
                next.focus();
                break;
            }
        }
    }
}

</script>



</body>
</html>