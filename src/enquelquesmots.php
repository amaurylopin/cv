<?php
  $anniversaire = "06/05/1991";
  $anniversaire = explode("/", $anniversaire);
  $age = (date("dm", date("U", mktime(0, 0, 0, $anniversaire[0], $anniversaire[1], $anniversaire[2]))) > date("md")
    ? ((date("Y") - $anniversaire[2]) - 1)
    : (date("Y") - $anniversaire[2]));
?>

            <section class="pt-page pt-page-2" data-id="enquelquesmots">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper clearfix">
                    <h2 class="section-title">Amaury Lopin</h2>
                    <h5 class="section-description">Responsable de service Digital</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                    <div class="my-photo-block tilt-effect">
                      <img src="images/amaury-lopin.jpg" alt="">
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <h3>En quelques mots …</h3>
                    <p>Fort de 10 années d'expériences (développeur et responsable de pôle), technicien dans l'âme et passionné par les nouvelles technologies, je souhaite apporter mes compétences à votre entreprise pour contribuer à son développement</p>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                    <ul class="info-list">
                      <li><span class="title">Age</span><span class="value"><?php echo $age ?> ans</span></li>
                      <li><span class="title">Adresse</span><span class="value">Nantes</span></li>
                      <li><span class="title">Mobilité</span><span class="value">Internationale</span></li>
                      <li><span class="title">E-mail</span><span class="value"><a href="mailto:amaury@lopin.io?subject=.">amaury@lopin.io</a></span></li>
                      <li><span class="title">Téléphone</span><span class="value"><a href="+33662705582">+33 6 62 70 55 82 </a></span></li>
                      <li><span class="title">Disponibilité</span><span class="value available">Immediate</span></li>
                    </ul>

                    <ul class="social-links">
                      <li><a class="tip social-button" href="https://www.linkedin.com/in/amaury-lopin/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                      <li><a class="tip social-button" href="https://github.com/amaurylopin" target="_blank" title="Github"><i class="fa fa-github"></i></a></li>
                    </ul>
                  </div>
                </div>

                <!-- Skills -->
                <div class="block-title">
                  <h3>Skills</h3>
                </div>

                <div class="row">
                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/skills/management.png" alt="Management d'équipe">
                        <h4>Management</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/skills/pilotage.png" alt="Pilotage de projets">
                        <h4>Pilotage de projets</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/skills/dev.png" alt="Développeur">
                        <h4>Dev Full-Stack</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/skills/growth.png" alt="Growth Hacking">
                        <h4>Growth Hacking</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/skills/crises.png" alt="Gestion de crises">
                        <h4>Gestion de crises</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/skills/cybersecurite.png" alt="Cybersécurité">
                        <h4>Cybersécurité</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End of Skills block -->

                <!-- Soft Skills block -->
                <div class="block-title">
                  <h3>Soft Skills</h3>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/softskills/ingenieux.png" alt="Management d'équipe">
                        <h4>Ingénieux</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/softskills/alecoute.png" alt="Pilotage de projets">
                        <h4>À l'écoute des autres</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/softskills/bienveillant.png" alt="Développeur">
                        <h4>Bienveillant</h4>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/softskills/urgence.png" alt="Growth Hacking">
                        <h4>À l'aise avec l'urgence</h4>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
</section>
