<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            body{
                font-family: 'Roboto', sans-serif;
                color: #777;
                font-size: 12px;
            }

            .header{
               width: 100%;
               padding: 10px 20px;
               background-color: #eee;
              
            }

            h2.create{
                font-size: 40px;
                color: #777;
                font-weight: 300;
            }
            
            .connection{
                
               padding-top: 15px;
                
                
            }

            .formulare{
                width: 100%;
                max-width: 960px;
                margin: 0 auto;
                min-height: 400px;
                margin-top: 30px;
                padding: 20px;
            }

            label{
                font-size: 14px;
            }

            .zone-form{
                background-color: #f1f1f1;
                padding: 20px;
            }

            .device{
                text-align: center;
                margin-top: 30px;
            }

            .device img{
                display: inline-block;
            }

          
        </style>
    </head>
    <body>

        <div class="header">
            <div class="row">
                <div class="col-md-3"><img src="http://placehold.it/120x60" alt="" class="img-responsive"></div>
                <div class="col-md-4 col-md-offset-5 connection">
                 <span class="text-center">Deja membre cliquer pour vous connecter </span>
                <button type="button" class="btn btn-primary">connecter vous</button></div>
            </div>
        </div>

        <div class="contenu">
            <h2 class="text-center create">Créer votre compte W@bloCulture</h2>
            <h5 class="text-center create">ou deja membre cliquer ici pour vous connecter </h5>
            <div class="formulare">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Vous n'avez besoin que d'un compte </h4>
                        <p>Pour utiliser W@bloCulture un seul compte suffit .</p>

                        <p></p>

                        <div class="device">
                            <img src="<?php echo base_url() ?>assets/device.png" alt="" class="img-responsive">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="zone-form">
                            <form action="" method="POST" role="form">
                            
                             <div class="form-group">
                                    <label for=""> * Nom de la societe</label>
                                    <input type="text" name="societe" class="form-control" id="">
                                </div>

                            
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> * Nom</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for=""> * Prénoms</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for=""> * Email </label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> * Contact bureau</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for=""> * Contact Mobile</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="">Nombre d employes</label>
                                    <div class="row">
                                       
                                        <div class="col-md-12">
                                            <select name="" id="input" class="form-control" required="required">
                                                <option value="">1-20</option>
                                                <option value="">20-100</option>
                                                <option value="">50-150</option>
                                               
                                                
                                            </select>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                
                                 <div class="form-group">
                                    <label for="">Mode de paiement</label>
                                    <div class="row">
                                       
                                        <div class="col-md-12">
                                            <select name="" id="input" class="form-control" required="required">
                                                <option value="">choississer un mode de paiement</option>
                                                <option value="">Paiement mobile</option>
                                                <option value="">Carte bancaire</option>
                                               
                                                
                                            </select>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                               
                                
                                
                            
                                <button type="submit" class="btn btn-primary">Créer le compte</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
    </body>
</html>