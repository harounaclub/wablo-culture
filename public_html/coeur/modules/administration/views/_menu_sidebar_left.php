<nav id="sidebar-left" class="sidebar mcs-overflow">
            	<ul class="sb-header m-b-20">
                	<li class="dp-trigger" data-dp-action="left-sidebar-toggle" data-dp-target="#sidebar-left">
                        <a href="#"><span class="header-logo m-r-20">Dashplus Admin</span><i class="menu-icon zmdi zmdi-arrow-left"></i></a>
                    </li>
                </ul>
                <div class="nav-menu-wrapper mcs-overflow1">
                	<ul class="nav-menu">
                        <li class="nav-item">
                            <a href="#" data-dp-action="submenu-toggle"><i class="zmdi zmdi-palette"></i>&nbsp;<span>Dashboard</span></a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>index.php/administration/info_entreprise"><i class="zmdi zmdi-apps"></i>&nbsp;<span>Infos entreprise</span></a>
                        </li>
                        
                        <li class="nav-item mm-col-3">
                            <a href="#" data-dp-action="submenu-toggle" class="mega-menu-toggle"><i class="zmdi zmdi-laptop-mac"></i>&nbsp;<span>Personnels</span></a>
                            <ul class="mega-menu">
                                <li>
                                    <ul>
                                        <li><a href="<?php echo base_url() ?>index.php/administration/ajout_unite">Ajout d'une unite</a></li>
                                        <li><a href="<?php echo base_url() ?>index.php/administration/liste_unite">liste des unites</a></li>
                                        <li><a href="<?php echo base_url() ?>index.php/administration/ajout_personnel">Ajouter personnel</a></li>
                                        <li><a href="<?php echo base_url() ?>index.php/administration/liste_des_personnels">liste des personnels</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-dp-action="submenu-toggle"><i class="zmdi zmdi-border-color"></i>&nbsp;<span>Valeurs</span></a>
                            <ul>
                                
                                <li><a href="<?php echo base_url() ?>index.php/administration/ajout_valeur">Ajouter valeur</a></li>
                                        <li><a href="<?php echo base_url() ?>index.php/administration/liste_des_valeurs">Liste des valeurs</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>index.php/administration/questionnaires" data-dp-action="submenu-toggle"><i class="zmdi zmdi-grid"></i>&nbsp;<span>Questionnaires</span></a>
        
                            
                        </li>
                        <li class="nav-item mm-col-2">
                            <a href="<?php echo base_url() ?>index.php/administration/evaluation" data-dp-action="submenu-toggle" class="mega-menu-toggle"><i class="zmdi zmdi-copy"></i>&nbsp;<span>Evaluations</span></a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>index.php/administration/performance" data-dp-action="submenu-toggle"><i class="zmdi zmdi-layers"></i>&nbsp;<span>Performances</span></a>
         
                        </li>
                        
                    </ul>
                </div>
            </nav>