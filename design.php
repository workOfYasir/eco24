<?php
include("./assets/components/header.php")
?>



<div class="container-md container-fluid" style="background-color: #fff;">

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 " style="font-weight: 600;padding-left:0px">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-12 col-sm-12 col-xs-12 padding-xs">
    <h3 style="font-weight: 600;" >        
        Erfahrene Schuldnerberatung deutschlandweit!</h3>
        <span style="font-size: 16px;">
Mit Soforthilfe-Garantie!
</span>
    </div>
    </div></div>
    <div class="mt-5">&nbsp;</div>

</div>
<div class="col-md-12 col-sm-12 col-xs-12 text-center " style="padding-left: 0px;">
            <form class="regForm" action="home.php">

                <div class="tab col-xs-12 col-md-12 col-sm-12 fieldsets">
                    <div class="col-md-6 text-left" >
                        Wie ist Ihre familiäre Situation?
                    </div>
                    <div class="mt-5">&nbsp;</div>
                    <div class="col-md-12">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6  card-wrapper">
                        <div class="wrapper">
                            <label style="display: block;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />
                              
                                <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                        <i class="fas fa-user fa-4x pt-2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                                Single
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                       
                        </div>
                        </label>

                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6  card-wrapper ">
                        <div class="wrapper">
                            <label style="display: block;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                    <i class="fas fa-user-friends fa-4x pt-2" aria-hidden="true"></i>
                               
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            Verheiratet
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>

                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6  card-wrapper ">
                        <div class="wrapper">
                            <label style="display: block;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                        <i class="fas fa-heart-broken  fa-4x pt-2" aria-hidden="true"></i>
                                      
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            Geschieden
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i> 
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>

                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 card-wrapper ">
                        <div class="wrapper">
                            <label style="display: block;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                        <i class="fas fa-user-times fa-4x pt-2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            Verwitwet
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>

                    </div>
                </div></div>

                <div class="tab col-xs-12 col-md-12 col-sm-12" >
                <div class="col-md-6 text-left" >
                       Wie ist Ihr derzeitiger Berufsstatus?
                        
                    </div>
                    <div class="mt-5">&nbsp;</div>
                    <div class="col-md-12">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12   card-wrapper " style="padding-left: 0px;padding-inline:10px">
                        <div class="wrapper">
                            <label style="display: block;" style="width: 100%;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                        <i class="fas fa-user-tie fa-4x pt-2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            Erwerbstätig
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>

                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 card-wrapper " style="padding-left: 0px;padding-inline:10px">
                        <div class="wrapper">
                            <label style="display: block;" style="width: 100%;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                    <span class="fa-stack fa-2x">
                                    <i class="fas fa-briefcase fa-stack-1x" aria-hidden="true"></i>
                                    <i class="fas fa-ban fa-stack-2x" style="color:darkgray" aria-hidden="true"></i>
                                </span>
                                        <!-- <i class="fas fas fa-ban fa-stack-2x fa-4x pt-2" ></i> -->
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            Nicht erwerbstätig
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>

                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 card-wrapper " style="padding-left: 0px;padding-inline:10px">
                        <div class="wrapper">
                            <label style="display: block;" style="width: 100%;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                        <i class="fas fa-user-graduate fa-4x pt-2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            Student/Azubi
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>
                        </div>
                    </div>
                    </center>
                </div>

               
                <div class="tab col-xs-12 col-md-12 col-sm-12" >
                <div class="col-md-6 text-left" >
                        Wie viele offene Forderungen haben Sie aktuell?
                        
                    </div>
                    <div class="mt-5">&nbsp;</div>
                    <div class="col-md-12">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12  card-wrapper " style="padding-left: 0px;padding-inline:10px">
                        <div class="wrapper">
                            <label style="display: block;" style="width: 100%;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                    <p style="font-size: 33px;">&lt; 10</p>
                                  
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            unter 10
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>

                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12  card-wrapper " style="padding-left: 0px;padding-inline:10px">
                        <div class="wrapper">
                            <label style="display: block;" style="width: 100%;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                    <p style="font-size: 33px;">10-20</p>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            10-20
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>

                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12  card-wrapper " style="padding-left: 0px;padding-inline:10px">
                        <div class="wrapper">
                            <label style="display: block;" style="width: 100%;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                    <p style="font-size: 33px;">&gt; 20</p>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            über 20
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>
                        </div>
                    </div>
                    </center>
                </div>
                <div class="tab col-xs-12 col-md-12 col-sm-12" id="tab-count">
                 
          
                <div class="col-md-6 text-left" >
                            Wie hoch sind Ihre Schulden in etwa?
                        </div>
               
   
                            <div class="container-fluid" style="padding-left: 30px;">
                            <input  id="Postleitzahl" class="form-control input-lg"
                                placeholder="Postleitzahl" style="border:1px solid #888888;"
                                name="Schulden" type="number" min="100" max="1000000000"  placeholder="Schuldenhöhe in €">
                            <div class="mt-5">&nbsp</div>
                            <div class="col-md-12 text-right">
                            <button type="button" name="next" class=" btn btn-css "
                                style="border:0px; " onclick="nextValidate(1)"
                                id="next">Weiter
                            </button>
                        </div>
                        </div>
                </div>
                <div class="tab col-xs-12 col-md-12 col-sm-12" >
                <div class="col-md-6 text-left" >
                        Bitte wählen Sie Ihr Geschlecht
                        
                    </div>
                    <div class="mt-5">&nbsp;</div>
                    <div class="col-md-12">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 card-wrapper " style="padding-left: 0px;padding-inline:10px">
                        <div class="wrapper">
                            <label style="display: block;" style="width: 100%;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                        
                                        <i class="fas fa-venus fa-4x pt-2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            weiblich
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>

                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 card-wrapper " style="padding-left: 0px;padding-inline:10px">
                        <div class="wrapper">
                            <label style="display: block;" style="width: 100%;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                        <i class="fas fa-mars fa-4x pt-2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            männlich
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>

                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 card-wrapper " style="padding-left: 0px;padding-inline:10px">
                        <div class="wrapper">
                            <label style="display: block;" style="width: 100%;">
                                <input type="radio" name="product" class="card-input-element nextBtn"
                                    onclick="nextPrev(1)" />

                                    <div class="panel panel-default card-input  radio-card col-xs-12 col-md-12 col-sm-12" tabindex="0">
                                    <div class="col-xs-12 col-md-12 col-sm-12 icons">
                                        <i class="fas fa-transgender fa-4x pt-2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 card-wrapper ">
                                        <div class="panel-body text-center card-text">
                                            <div class="col-xs-12 ">
                                            divers
                                            </div>
                                            <!-- <div class="col-xs-1 text-right"><i class="fa fa-caret-right icon"
                                                    aria-hidden="true"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </label>
                        </div>
                    </div>
                    </center>
                </div>
                <div class="tab col-xs-12 col-md-12 col-sm-12">
               
                    <div class="col-md-6 text-left" >
                            Bitte geben Sie Ihr Geburtsdatum ein
                        </div>
                 
   
                            <div class="container-fluid" style="padding-left: 30px;">
                            <input id="postal" class="form-control input-lg"
                                style="border:1px solid #888888;"
                                 type="date" id="birthdate" name="birthdate" max="2005-01-01" min="1940-01-01">
                            <div class="mt-5">&nbsp</div>
                            <div class="col-md-12 text-right">
                            <button type="button" name="next" class=" btn btn-css "
                                style="border:0px; " onclick="animation()"
                                id="next">Weiter
                            </button>
                        </div>
                        </div>
                        </div>
                </div>

                <div class="  col-xs-12 col-md-12 col-sm-12 text-center" id="tab-animate">
                    <div class="col-md-12">
                    Daten werden berechnet...
                        <div class="mt-5">&nbsp;</div>
                        <br>
                        <div class="col-md-12">
                            <i class="fas fa-spinner fa-pulse fa-9x" style="color:darkgray"></i>
                            <div class="col-md-12">
                                <div class="found-text" id="text" style="font-weight: bold; color:green"></div>
                            </div>


                            <div class="mt-5">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div id="tab-form">
               
                    <div class="container-fluid"style="padding-left:30px;padding-right:30px;">
                    <span style="text-decoration: none; font-size:14px">
                    Info:
                    </span>
                                    <div class="form-row">
                                 
                                        <div class="form-group col-md-6" style="padding-left: 2px; padding-right:2px">
                                            <input type="text" class="form-control fields" required id="vorname"
                                                placeholder="Vorname*">
                                        </div>
                                        <div class="form-group col-md-6 " style="padding-left: 1px; padding-right:1px">

                                            <input type="text" class="form-control fields" required id="nachname"
                                                placeholder="Nachname*">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" style="padding-left: 2px; padding-right:2px">

                                            <input type="text" class="form-control fields" required id="email"
                                                placeholder="name@example.com*">
                                        </div>
                                        <div class="form-group col-md-6 " style="padding-left: 1px; padding-right:1px">

                                            <input type="text" class="form-control fields" required id="telefon"
                                                placeholder="Telefonnummer">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" style="padding-left: 2px; padding-right:2px">
                                            <input type="text" class="form-control fields" id="inputEmail4"
                                                placeholder="Straße und Nr.">
                                        </div>
                                        <div class="form-group col-md-6 " style="padding-left: 1px; padding-right:1px">

                                            <input type="text" class="form-control fields" id="inputPassword4"
                                                placeholder="PLZ">
                                        </div>
                                    </div>
                               <div class="form-group">
                                        <div class="form-check">
                                            <div class="col-md-12" style="padding-left: 0px; padding-right:0px;display: flex;   font-size: 16px; ">
                                                <!-- <div class="col-md-02" style="padding-left: 0px; padding-right:0px"> -->
                                                    <input class="form-check-input checkboxtext" type="checkbox"
                                                        id="gridCheck">
                                                <!-- </div> -->
                                                <div class="col-md-11 text-left" style="padding-left: 2px; padding-right:0px">
                                                    Ja, ich möchte per E-Mail den eco24-Newsletter mit wertvollen Tipps zu Finanz- und </div>  </div>
                                                    <span style="  font-size: 16px;">Zukunftsplanung erhalten.</span>

                                                <br>
                                               
                                          
                                            <div class="col-md-12" style="    font-size: 16px; padding-left:0px">
                                                Durch das Absenden stimme ich der Datenschutzerklärung zu und erlaube, dass man mir per Post, Telefon oder E-Mail Informationen zukommen lässt.
                                                </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">&nbsp;</div>
                                    <div class="col-md-12 text-right">
                                      <button type="submit" name="submit" onclick="validate()" class=" btn  btn-css"id="submit">
                                        Absenden
                                      </button>
                                    </div>
                                </form>
                                <div class="mt-5">&nbsp;</div>
                        <div class="mt-5">&nbsp;</div>
                    </div>
                </div>
                <div class="tab">
                </div>
        </div>
        <div class="mt-5">&nbsp;</div>
        <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="padding-left:10px">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 progress-bar-wrapper"
                id="progress-bar-wrapper">
                <div class="number"></div>
                <div class="progress text-center">
                </div>
                <div class="progress text-center">
                </div>
                <div class="progress text-center">
                </div>
                <div class="progress text-center">
                </div>
                <div class="progress text-center">
                </div>
                <div class="progress text-center">
                </div>
                <div class="progress text-center">
                </div>
            </div>
        </div>
        <div class="mt-5">&nbsp;</div>
        <div class="mt-5">&nbsp;</div>
        <div class="col-12 text-center">
<a href="#"  style="color:black; text-decoration: none">Kontakt | </a>
<a href="#"  style="color:black; text-decoration: none">Datenschutz | </a>
<a href="#" style="color:black; text-decoration: none">Impressum | </a>
<a href="#"  style="color:black; text-decoration: none">Jobs</a>
<br>
<span  style="color:grey;font-size:12px">
Eco24 erbringt ausschließlich wirtschaftliche und kaufmännische Dienstleistungen. Eine Rechtsberatung wird nicht ausgeübt.</span>
<div class="mt-5">&nbsp;</div>


    </div>
    </div>
</div>
</div>
<script>

   var x = document.getElementsByClassName("tab");
  var z = document.getElementsByClassName("progress")
  console.log(x.length);
  console.log(z.length);
  for (let i = 0; i < x.length; i++) {
    z[i].style.backgroundColor = "#bbbbbb;";
   
  }
var currentTab = 0; // Current tab is set to be the first tab (0)
var current = 1,steps;
showTab(currentTab); // Display the current tab
var steps = $(".tab").length;
function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");

  x[n].style.display = "block";
  z[n-1].style.backgroundColor = "#4CAF50";
  z[n].style.backgroundColor="black";

}
document.getElementsByClassName("tab-nxt").style.display='none';

</script>
<script>
</script>