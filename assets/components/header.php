<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href='https://fonts.googleapis.com/css?family=Signika Negative' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script src="assets/js/functions.js"></script>

<!-- <link rel="stylesheet" type="" href="./assets/css/style.css"> -->
    <title>Document</title>
<style>
    
    *{
        font-family: 'Signika Negative', sans-serif;
      }
        .btn-css{
          width: 100px;
          background-color: #19364D !important;
          border: none;
          border-radius: 5px;
          color: white;
          padding: 10px 0px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          font-family: 'Signika Negative', sans-serif;
        }
        a{
          color: rgb(66, 66, 66);
        }
        a:hover{
          color: rgb(66, 66, 66);
        }
      .card-input:focus {
          box-shadow:inset 10px  10px 10px #888888 !important;

        }
        .padding-xs{letter-spacing: -1px;
          line-height: 1;
          padding-left:0px !important
        }

        .col-md-02{
          width:0.5%;
        }
       
        .logo-center{
          height: auto; margin-top:45px;padding-left:10px
        }
        .wrapper-center{
          padding-left: 5px !important;
         
        }
        .headings{
          font-weight: bold; font-size:24px ;
          margin-top: 3%;
        }
        .radio-card{
          border-radius: 32px;
          box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
        }
        .icons{
          padding-left: 0px; padding-right:0px;
          padding-top: 10%;
        }
        .panel-body{
          padding: 10px !important;
        }
        .radio-card:hover{
          -webkit-box-shadow:-6px -6px 6px rgb(255 255 255 / 20%), 6px 6px 10px rgb(0 0 0 / 80%);
    -moz-box-shadow:-6px -6px 6px rgb(255 255 255 / 20%), 6px 6px 10px rgb(0 0 0 / 80%);
    box-shadow: -6px -6px 6px rgb(255 255 255 / 20%), 6px 6px 10px rgb(0 0 0 / 80%);
color: #C6D301;
    border-radius: 32px;
        }
        .dismiss {
  animation: fadeOut 1s forwards;
  -webkit-animation: fadeOut 1s forwards;
}
@keyframes fadeOut {
  100% {opacity: 1;}
  0% {opacity: 0;} 
} 

#tab-animate
{
display: none;
}
#tab-form{
  display: none;
}
        .tab{
            display: none;
        }
        .text{
            font-size: 14px;
        }
        .strong-nav{
            font-size: 18px;
            color: #51CF6A;
        }
        #triangle_down {
            width: 0;
            height: 0;
            border-top: 25px solid #267ebf;
            border-left: 40px solid transparent;
            border-right: 40px solid transparent;
        }
        .card-input-element {
    display: none !important;
}
.fields{
  font-size: 100% !important;
  padding: 22px 20px;
  margin: 0px 0;
  border: 1px solid #ccc;
}
.col-md-3{
padding-left: 8px;
padding-right: 8px;
}
.progress{
  height: 15px;
  width: 15px;
  margin: 0px 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
   opacity: 0.5;
   background-image:none;
}
.card-input {
    margin: 10px;
    padding: 00px;
}
.col2-5{
  width: 20%;
  float: left;
}
.card-input:hover {
    cursor: pointer;
}

.card-input-element:checked + .card-input {
     box-shadow: 0 0 1px 1px #2ecc71;
 }
 .img-fluid {
  max-width: 100%;
  height: auto;
}
.form-card{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:1%;background-color: #fff;padding: 40px
}

        #blue-card{
            background-color: #267ebf;
            box-shadow: inset 0 5px 7px -7px black;
            padding-top: 15px;
            font-weight: bold;
            color:#fff;
        }  
        .nav{
            padding-top: 15px;
            padding-right: 0px;
            padding-left: 0px;
            padding-bottom: 15px;
        }
       .text-div{
            padding-right: 10px;
            padding-right: 0px;
            padding-left: 0px;
        }
       .diamond{
            display: flex;
            justify-content: center;
        }
        .diamond-div{
            margin-top: -2px;
        }

       .contact-us{
           background-color: #f4f6f8;
           padding-left: 35px;
           padding-right: 35px;
     
       }
       .inline-img{
        margin-bottom: 1.5%;
       }

       .contact-us-text{
        font-family: "Signika Negative", sans-serif;
        font-size: 16px;
        font-weight: 600px;
        padding-left: 0px;
        padding-right: 0px;
        margin-top: 1%;
       }
       .a-tag{
           color: #7D7D7D;
           font-family: "Signika Negative", sans-serif;
           font-size: 12px;
       }
       .copyright{
            color: #7D7D7D;
           font-family: "Signika Negative", sans-serif;
           font-size: 12px;
       }
       .regForm .tab:not(:first-of-type) {
    display: none;
  }
  .regForm #tab-form:not(:first-of-type) {
    display: none;
  }
  .regForm fieldset:not(:first-of-type) {
    display: none;
  }
  .regForm #tab-animate:not(:first-of-type) {
    display: none;
  }
 
  .progress-bar{
    background-image: none;
  }
  @media only screen and (min-width: 1024px) {

    body{
      padding: 0px;
      padding-left: 0px;
      padding-right: 0px;
      margin: 0px;
      margin-left: 0px;
      margin-right: 0px;
      overflow-x: hidden;
      font-family: 'Signika Negative', sans-serif;
      background-image:  url("../img/BGimg.png");
      background-repeat: no-repeat;
      background-size: cover;
      height: 100%;
  }
  .tab{
    display: none;
}
  .radio-card{
    border-radius: 32px;
    box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
  }
    .col2-5{
      width: 20%;
      float: left;
    }
    .radio-card:focus{
      box-shadow:inset 10px  10px 10px #888888 !important;

    }
  .card-input-element {
      display: none !important;
  }  
    .center-div{
      padding: 0px;padding-top:10px
     }
.container-md {
    width: 800px;
}
.icon{
  display: none;
}
.fields{
  font-size: 100% !important;
  padding: 22px 20px;
  margin: 0px 0;
  border: 1px solid #ccc;
}
.card-wrapper{
  padding-left: 5px;
  padding-right: 5px;
    }
    .card-text{
        padding-left: 0px;
        padding-right: 0px;
    }
    .headings{
      font-weight: bold; font-size:24px; 
      margin-top: 3%;
    }
    .wizard-text{
        padding-left: 0px;
    padding-right: 0px;
    }
    .contact-us-text{
      font-family:"Signika Negative", sans-serif;
      font-size: 16px;
      font-weight: bold;
      padding-left: 0px;
      padding-right: 0px;
      margin-top: 1%;
     }

}

 @media (max-width: 1024px){
  .col2-5{
    width: 30% !important;
    float: left;
  }
  .radio-card:focus{
    box-shadow:inset 10px  10px 10px #888888 !important;

  }
  .tab{
    display: none;
}
  .radio-card{
    border-radius: 32px;
    box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
  }
  .card-input-element {
    display: none !important;
}
  .center-div{
    padding: 0px;padding-top:10px
   }
    .card-wrapper{
      padding-left: 5px;
      padding-right: 5px;
        }
        .card-text{
            padding-left: 0px;
            padding-right: 0px;
        }
        .wizard-text{
            padding-left: 0px;
        padding-right: 0px;
        }
        .contact-us-text{
        font-family: "Signika Negative", sans-serif;
        font-size: 16px;
        font-weight: 600px;
        padding-left: 0px;
        padding-right: 0px;
        margin-top: 1%;
       }
       .headings{
        font-weight: bold; font-size:24px;
        margin-top: 3%;
      }

} 


@media only screen and (max-width: 760px) and (min-width: 500px){
  .col2-5{
    width: 30%;
    float: left;
  }
  .tab{
    display: none;
}
  .radio-card{
    border-radius: 32px;
    box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
  }
  body{
    padding: 0px;
    padding-left: 0px;
    padding-right: 0px;
    margin: 0px;
    margin-left: 0px;
    margin-right: 0px;
    overflow-x: hidden;
    font-family: 'Signika Negative', sans-serif;
    background-color: #fff !important;
}
  .card-input-element {
    display: none !important;
}
  .radio-card:focus{
    box-shadow:inset 10px  10px 10px #888888 !important;

  }
  .container-md {
    width: 100%;
}
.center-div{
  padding: 0px;
 }
.logo-center{
  height: auto; margin-top:15px;padding-left:0px
}
.wrapper-center{
  padding: 0px;
}

.card-wrapper{
  padding-left: 5px;
  padding-right: 5px;
}
.card-text{
    padding-left: 0px;
    padding-right: 0px;
}
.wizard-text{
    padding-left: 0px;
padding-right: 0px;
}
.icon{
  display: block;
}
.col-md-3{
padding-left: 8px;
padding-right: 8px;
}
.col-sm-3{
  padding-left: 0px;
  padding-right: 0px;

}
.headings{
  font-weight: bold; font-size:18px;
  margin-top: 4%;
}
.col-xs-3{
  padding-left: 0px;
  padding-right: 0px;
}
.card-text{
  padding: 20px; text-align:center; padding-left:0px
}

}

@media only screen and (max-width: 500px) and (min-width: 430px){ 
  .col2-5{
    width: 35%;
    float: left;
  }
  .radio-card{
    border-radius: 32px;
    box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
  }
  .tab{
    display: none;
}
  body{
    padding: 0px;
    padding-left: 0px;
    padding-right: 0px;
    margin: 0px;
    margin-left: 0px;
    margin-right: 0px;
    overflow-x: hidden;
    font-family: 'Signika Negative', sans-serif;
    background-color: #fff !important;
}
  .card-input-element {
    display: none !important;
}
  .padding-xs{
    letter-spacing: -1px;
    line-height: 1;
    padding-left:15px !important
  }
  .container-md {
    width: 100%;
}

.radio-card:focus{
  box-shadow:inset 10px  10px 10px #888888 !important;

}
.radio-card{
  border-radius: 32px;
  box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
}
.center-div{
  padding: 0px;
 }
.logo-center{
  height: auto; margin-top:15px;padding-left:0px
}
.wrapper-center{
  padding: 0px !important;
}
.headings{
  font-size: 16px;
  font-weight: bold;
  margin-top: 4%;
}
.form-card{
    box-shadow: none;   background-color: #e5f1f7;
}
.list{
    font-size: 11px; padding-left:0px; padding-right:0px;
    color: #595959;
}
.icon{
  display: block;
}
.radio-card{
  border-radius: 32px;
  box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
}
.radio-tab{
  height: 200px;
}
.col-xs-12{
  padding-right: 10px;
     padding-left: 2px;
}
.wrapper{
  height: 90px;
}
.card-text{
  padding: 25px; text-align:left; padding-left:0px;width: 100%; padding-right: 0px;
}

}
@media only screen and (max-width: 330px) {
  .col2-5{
    width: 35%;
    float: left;
  } 
  .radio-card{
    border-radius: 32px;
    box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
  }
  .tab{
    display: none;
}
  body{
    padding: 0px;
    padding-left: 0px;
    padding-right: 0px;
    margin: 0px;
    margin-left: 0px;
    margin-right: 0px;
    overflow-x: hidden;
    font-family: 'Signika Negative', sans-serif;
    background-color: #fff !important;
}
  .card-input-element {
    display: none !important;
}
  .radio-card:focus{
    box-shadow:inset 10px  10px 10px #888888 !important;

  }
  .padding-xs{letter-spacing: -1px;
    line-height: 1;
    padding-left:15px !important ;
  }
  .container-md {
  width: 100%;
}
.center-div{
  padding: 0px;
 }
.headings{
  font-weight: bold; font-size:16px;
  margin-top: 3%;
}
.icon{
  display: block;
}
.col-xs-12{

     padding-left: 2px;
}
.wrapper{
  height: 90px; 
}
.card-text{
  padding: 20px; text-align:center; padding-left:0px; padding-right: 0px;
}

}
@media only screen and (max-width: 280px) { 
  .col2-5{
    width: 35%;
    float: left;
  }
  .tab{
    display: none;
}
  .card-input-element {
    display: none !important;
}
  .radio-card:focus{
    box-shadow:inset 10px  10px 10px #888888 !important;

  }
  .radio-card{
    border-radius: 32px;
    box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
  }
  body{
    padding: 0px;
    padding-left: 0px;
    padding-right: 0px;
    margin: 0px;
    margin-left: 0px;
    margin-right: 0px;
    overflow-x: hidden;
    font-family: 'Signika Negative', sans-serif;
    background-color: #fff !important;
}
  .padding-xs{letter-spacing: -1px;
    line-height: 1;
    padding-left:15px !important
  }
  .container-md {
  width: 100%;
}
.center-div{
  padding: 0px;
 }
.col-xs-12{
  padding-right: 10px;
     padding-left: 2px;
}
.headings{
  font-weight: bold;
  font-size: 16px;
  margin-top: 4%;
}
.wrapper{
  height: 90px;
}
.card-text{
  padding: 25px; text-align:left; padding-left:0px;
  
}

}

      @media only screen and (max-width: 1024px) and (min-width:800px) {
        .col2-5{
          width: 20%;
          float: left;
        }
        .radio-card:focus{
          box-shadow:inset 10px  10px 10px #888888 !important;

        }
        .tab{
          display: none;
      }
        .radio-card{
          border-radius: 32px;
          box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
        }
        .col2-5{
          width: 20%;
          float: left;
        }
        body{
          padding: 0px;
          padding-left: 0px;
          padding-right: 0px;
          margin: 0px;
          margin-left: 0px;
          margin-right: 0px;
          overflow-x: hidden;
          font-family: 'Signika Negative', sans-serif;
          background-color: #fff !important;
      }
        .card-input-element {
          display: none !important;
      }
       .text{ 
            font-size: 12px;
            padding-left: 0px;
            padding-top:14px;     
            }
        .strong-nav{
            font-size: 15px;
            color: #51CF6A;
        }
        .padding-xs{letter-spacing: -1px;
          line-height: 1;
          padding-left:0px !important
        }
        .container-md{
          width: 78.2%;
        }
        .headings{
          font-weight: bold; font-size:18px;
          margin-top: 4%;
        }
        #blue-card{
            background-color: #267ebf;
            box-shadow: inset 0 5px 7px -7px black;
            font-weight: bold;
            color: #fff;
            padding-top: 2px;
            padding-left: 2px;
            padding-right: 2px;
        }  
        .blue-card-text{
            font-size: 22px;
        }
        .radio-card{
          border-radius: 32px;
          box-shadow: -6px -6px 6px rgb(255 255 255 / 10%), 6px 6px 10px rgb(0 0 0 / 40%);
        }
        .nav{
            padding-top: 10px;
            padding-right: 0px;
            padding-left: 0px;
        }
       .text-div{
            padding-right: 10px;
            padding-right: 0px;
            padding-left: 0px;
       }
       .img-brands{
           width: 20%;
           padding-left: 5px;
           padding-right: 5px;
           
       }
       .footer-text {
        font-family: "Signika Negative", sans-serif;
        font-size: 11px;
        color:#7D7D7D;
       }
       .inline-img{
margin-bottom: 1.5%;
       }
       .contact-us-child{
           text-align: left;
           padding: 5px;
           text-align: center;
       }
       .center-div{
        padding: 0px;padding-top:10px
       }
       .contact-us-logo{
        padding-left: 0px ; padding-right:0px;
        text-align: right;
       }
       .contact-us-text{
        font-family:"Signika Negative", sans-serif;
        font-size: 16px;
        font-weight: 600px;
        padding-left: 0px;
        padding-right: 0px;
        margin-top: 1%;
       }
       .contact-us-child-wrapper{
           text-align: center;
       }

    }
    
    
</style>
</head>
<body > 
<div class="container-md container-fluid" style="background-color:#fff">
    <div class="row">
<div class="col-md-10  col-sm-10 col-xs-12 nav" style="padding-top: 10px;padding-left:5px">
<div class="col-xs-4 col-md-3  col-sm-3 text-left" style="padding: 0px;">
<div class='outside-wrapper'><a data-reload="1" href="javascript:void(0)">
    <span class='hidden-xs image'>
<img alt="Logo" width="157" height="138" style="height: auto;" srcset="./assets/img/logo-left.gif 1x, ./assets/img/logo-left.gif 2x" src="./assets/img/logo-left.gif" />
</span>
<span class='image visible-xs-inline'>
<img alt="Logo" width="110" style="height: auto;" srcset="./assets/img/logo-left.gif 1x, ./assets/img/logo-left.gif 2x" src="./assets/img/logo-left.gif" />
</span>
</div>
</a>
</div>
<div class="col-md-6 col-sm-4 col-xs-4 col-lg-6 center-div" >
<div class='outside-wrapper'>
<a data-reload="1" href="javascript:void(0)" style="text-decoration:none;">
<span class='hidden-xs image' style="color:#193660">
<img alt="Logo" width="333"  style="height: auto;" srcset="./assets/img/logo-center.gif 1x, ./assets/img/logo-center.gif 2x" src="./assets/img/logo-center.gif" />
<h3 style="font-weight: 600;font-size:20px; margin-bottom:0px;margin-top:5px">Erfahrene Schuldnerberatung deutschlandweit mit</h3>
<h2 style="font-weight: 600;font-size:28px;margin-top:2px">
Soforthilfe-Garantie!
</h2>
</span>
<span class='image visible-xs-inline'>
<img alt="Logo" width="140" class="logo-center" style="height: auto; margin-top:30px;padding-left:10px" srcset="./assets/img/logo-center.gif 1x, ./assets/img/logo-center.gif 2x" src="./assets/img/logo-center.gif" />
</span>
</a>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-div text-right "style="padding-top:10px;padding-left:20px">
<div class='outside-wrapper'><a data-reload="1" href="javascript:void(0)">
    <span class='hidden-xs image'>
<img alt="Logo" width="100" style="height: auto;" srcset="./assets/img/logo-right.gif 1x, ./assets/img/logo-right.gif 2x" src="./assets/img/logo-right.gif" />
</span>
<span class='image visible-xs-inline'>
<img alt="Logo" width="60"  style="height: auto;" srcset="./assets/img/logo-right.gif 1x, ./assets/img/logo-right.gif 2x" src="./assets/img/logo-right.gif" />
</span>
</a>
</div>
</div>
</div></div>
</div>