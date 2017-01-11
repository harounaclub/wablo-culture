
 <main class="mn-inner">
                <div class="row">
                    
                    <div class="card-stacked">
                                <div class="card-content">
                                    <p>Code distributeur : <?php echo $code_transaction; ?> .</p>
                                    <p>Nom et prenoms : <?php echo $nom_prenom; ?> .</p>
                                    <p>Solde  : <?php echo $solde; ?> .</p>
                                    <p>Credit  : <?php echo $credit; ?> .</p>
                                </div>
                               
                            </div>


                  </br></br></br>

                  <div class="card-content">
                                <span class="card-title">Informations credits</span><br>
                                <div class="row">
                                    <form action="<?php echo base_url() ?>dashboard/ajout_regularisateur" method="POST" class="col s12">
                                        <div class="row">
                                        <select class="browser-default" name="choix">
                                            <option selected="" disabled="" value="">choisir une option</option>
                                           
                                            <option value="2">remboursement</option>
                                           
                                        </select>
                                        <input type="text" name="code_transaction" value="<?php echo $code_transaction; ?>">
                                          <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input type="text" name="montant_credit" class="validate" id="icon_prefix" value=" <?php echo $credit; ?> ">
                                                <label for="icon_prefix">Montant</label>
                                            </div>

                                             <select class="browser-default" name="appliquer">
                                            <option selected="" disabled="" value="">Appliquer sur le bonus</option>
                                            <option value="oui">oui</option>
                                            <option value="non">non</option>
                                           
                                        </select>


                                          

                                            <input type="submit" value="Regulariser" class="waves-effect waves-light btn green m-b-xs" />
                                           
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    
                                </div>
                            </div>

                    
                </div>
            </main>
            <div class="page-footer">
               
            </div>


               