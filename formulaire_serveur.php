<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["email_dest"]) && isset($_POST["exp"]) && isset($_POST["message"])) {
  // autre façon de restreindre caracteres

  // créa de variable avec recup du formulaire avec machin post qui permet de recup donnés visiteur?

  $email_dest = $_POST["email_dest"];
  $exp = $_POST["exp"];
  $message_txt = $_POST["message"];
  $dest = "nadegemokdad@orange.fr";

  //$headers = "des trucs en plus comme from mail ou reply-To";


  // ex specialchars : $message = htmlspecialchars ($_POST["message"];);
  $erreur;
  $verif = false; // etat du formulaire par defaut

  // conditions de conformité du mail
  //(si) les imputs sont remplis (!= negation)
  if ($email_dest != "" && $exp != "" && $message_txt != "") {
    //le du mail contenu est conforme (si)
    if (preg_match(" /^.+@.+\.[a-zA-Z]{2,}$/", $email_dest)) {
      // suppression des chevrons potentiels
      strip_tags($email_dest);
      strip_tags($exp);
      strip_tags($message_txt);
      $verif = true; // alors il est juste

      // connection base donnée
      $dsn = "mysql:host=localhost;dbname=nadegem_cartevoeux;charset=utf8;";
      $bdd = new PDO($dsn, 'nadegem', 'liOm3ZJR/n3tlw==');
      $stmt = "INSERT INTO carte_voeux (message) VALUES (?);";
      $query = $bdd->prepare($stmt);
      $query->execute([$message_txt]);

      // recup données 

      $stmt = "SELECT MAX(id) AS id FROM `carte_voeux`";
      $query = $bdd->query($stmt);
      $id_message = $query->fetch(PDO::FETCH_ASSOC)["id"];







      $passage_ligne = "\n";
      $message_html = '<!doctype html>
            <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
            
            <head>
              <title> Say hello to card </title>
              <!--[if !mso]><!-- -->
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <!--<![endif]-->
              <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <style type="text/css">
                #outlook a {
                  padding: 0;
                }
            
                body {
                  margin: 0;
                  padding: 0;
                  -webkit-text-size-adjust: 100%;
                  -ms-text-size-adjust: 100%;
                }
            
                table,
                td {
                  border-collapse: collapse;
                  mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                }
            
                img {
                  border: 0;
                  height: auto;
                  line-height: 100%;
                  outline: none;
                  text-decoration: none;
                  -ms-interpolation-mode: bicubic;
                }
            
                p {
                  display: block;
                  margin: 13px 0;
                }
              </style>
              <!--[if mso]>
                    <xml>
                    <o:OfficeDocumentSettings>
                      <o:AllowPNG/>
                      <o:PixelsPerInch>96</o:PixelsPerInch>
                    </o:OfficeDocumentSettings>
                    </xml>
                    <![endif]-->
              <!--[if lte mso 11]>
                    <style type="text/css">
                      .mj-outlook-group-fix { width:100% !important; }
                    </style>
                    <![endif]-->
              <style type="text/css">
                @media only screen and (min-width:480px) {
                  .mj-column-per-100 {
                    width: 100% !important;
                    max-width: 100%;
                  }
                  .mj-column-per-35 {
                    width: 35% !important;
                    max-width: 35%;
                  }
                  .mj-column-per-65 {
                    width: 65% !important;
                    max-width: 65%;
                  }
                  .mj-column-per-80 {
                    width: 80% !important;
                    max-width: 80%;
                  }
                }
              </style>
              <style type="text/css">
                @media only screen and (max-width:480px) {
                  table.mj-full-width-mobile {
                    width: 100% !important;
                  }
                  td.mj-full-width-mobile {
                    width: auto !important;
                  }
                }
              </style>
            </head>
            
            <body style="background-color:#F2F2F2;">
              <div style="background-color:#b8b0be;">
                <!--[if mso | IE]>
                  <table
                     align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
                  >
                    <tr>
                      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                  <![endif]-->
                <div style="margin:0px auto;max-width:600px;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                    <tbody>
                      <tr>
                        <td style="direction:ltr;font-size:0px;padding:10px 0 20px 0;text-align:center;">
                          <!--[if mso | IE]>
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            
                    <tr>
                  
                        <td
                           class="" style="vertical-align:top;width:600px;"
                        >
                      <![endif]-->
                          <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"> </table>
                          </div>
                          <!--[if mso | IE]>
                        </td>
                      
                    </tr>
                  
                              </table>
                            <![endif]-->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--[if mso | IE]>
                      </td>
                    </tr>
                  </table>
                  
                  <table
                     align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
                  >
                    <tr>
                      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                  <![endif]-->
                <div style="background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#FFFFFF;background-color:#FFFFFF;width:100%;">
                    <tbody>
                      <tr>
                        <td style="direction:ltr;font-size:0px;padding:20px 20px 0 20px;text-align:center;">
                          <!--[if mso | IE]>
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            
                    <tr>
                  
                        <td
                           class="" style="vertical-align:top;width:196px;"
                        >
                      <![endif]-->
                          <div class="mj-column-per-35 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                              <tr>
                                <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                  <div style="font-family: \'Times New Roman\', Times, Helvetica, Arial, sans-serif;font-size:20px;font-weight:500; font-style: italic;line-height:24px;text-align:left;color:#583b4c;"> OH Oh oh !</div>
                                </td>
                              </tr>
                            </table>
                          </div>
                          <!--[if mso | IE]>
                        </td>
                      
                        <td
                           class="" style="vertical-align:top;width:364px;"
                        >
                      <![endif]-->
                          <div class="mj-column-per-65 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"> </table>
                          </div>
                          <!--[if mso | IE]>
                        </td>
                      
                    </tr>
                  
                              </table>
                            <![endif]-->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--[if mso | IE]>
                      </td>
                    </tr>
                  </table>
                  
                  <table
                     align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
                  >
                    <tr>
                      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                  <![endif]-->
                <div style="background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#FFFFFF;background-color:#FFFFFF;width:100%;">
                    <tbody>
                      <tr>
                        <td style="direction:ltr;font-size:0px;padding:20px 20px 0 20px;text-align:center;">
                          <!--[if mso | IE]>
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            
                    <tr>
                  
                        <td
                           class="" style="vertical-align:top;width:560px;"
                        >
                      <![endif]-->
                          <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                              <tr>
                                <td align="center" style="font-size:0px;padding:30px 40px 10px 40px;word-break:break-word;">
                                  <div style="font-family:\'Times New Roman\', Times,  Helvetica, Arial, sans-serif;font-size:36px;font-weight:300;font-style:italic;line-height:40px;text-align:center;color: #545164 ;">Joyeuses Fêtes!</div>
                                </td>
                              </tr>
                            </table>
                          </div
                          <!--[if mso | IE]>
                        </td>
                      
                    </tr>
                  
                              </table>
                            <![endif]-->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--[if mso | IE]>
                      </td>
                    </tr>
                  </table>
                  
                  <table
                     align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
                  >
                    <tr>
                      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                  <![endif]-->
                <div style="background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#FFFFFF;background-color:#FFFFFF;width:100%;">
                    <tbody>
                      <tr>
                        <td style="direction:ltr;font-size:0px;padding:10px 20px;text-align:center;">
                          <!--[if mso | IE]>
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            
                    <tr>
                  
                        <td
                           class="" style="vertical-align:top;width:560px;"
                        >
                      <![endif]-->
                          <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                              <tr>
                                <td style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                  <p style="border-top:solid 3px #9B9B9B;font-size:1;margin:0px auto;width:30px;"> </p>
                                  <!--[if mso | IE]>
                    <table
                       align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 3px #9B9B9B;font-size:1;margin:0px auto;width:30px;" role="presentation" width="30px"
                    >
                      <tr>
                        <td style="height:0;line-height:0;">
                          &nbsp;
                        </td>
                      </tr>
                    </table>
                  <![endif]-->
                                </td>
                              </tr>
                            </table>
                          </div>
                          <!--[if mso | IE]>
                        </td>
                      
                    </tr>
                  
                              </table>
                            <![endif]-->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--[if mso | IE]>
                      </td>
                    </tr>
                  </table>
                  
                  <table
                     align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
                  >
                    <tr>
                      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                  <![endif]-->
                <div style="background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#FFFFFF;background-color:#FFFFFF;width:100%;">
                    <tbody>
                      <tr>
                        <td style="direction:ltr;font-size:0px;padding:0 20px 20px 20px;text-align:center;">
                          <!--[if mso | IE]>
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            
                    <tr>
                  
                        <td
                           class="" style="vertical-align:top;width:448px;"
                        >
                      <![endif]-->
                          <div class="mj-column-per-80 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                              <tr>
                                <td align="center" style="font-size:0px;padding:0px;padding-top:10px;word-break:break-word;">
                                  <div style="font-family:\'Times New Roman\', Helvetica, Arial, sans-serif;font-size:20px;font-weight:500;font-style:italic;line-height:24px;text-align:center;color:#000000;">Vous avez reçu une carte de voeux pour cette nouvelle année. Vous pouvez la visualiser ici :</div>
                                </td>
                              </tr>
                            </table>
                          </div>
                          <!--[if mso | IE]>
                        </td>
                      
                    </tr>
                  
                              </table>
                            <![endif]-->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--[if mso | IE]>
                      </td>
                    </tr>
                  </table>
                  
                  <table
                     align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
                  >
                    <tr>
                      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                  
                    <v:rect  style="width:600px;" xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false">
                    <v:fill  origin="0.5, 0" position="0.5, 0" src="http://nimus.de/share/tpl-card/bg.jpg" type="tile" />
                    <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
                  <![endif]-->
                <div style="background:url(http://nimus.de/share/tpl-card/bg.jpg) top center / cover no-repeat;margin:0px auto;max-width:600px;">
                  <div style="line-height:0;font-size:0;">
                    <table align="center" background="http://nimus.de/share/tpl-card/bg.jpg" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:url(http://nimus.de/share/tpl-card/bg.jpg) top center / cover no-repeat;width:100%;">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;">
                            <!--[if mso | IE]>
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            
                    <tr>
                  
                        <td
                           class="" style="vertical-align:top;width:600px;"
                        >
                      <![endif]-->
                            <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                <tr>
                                  <td align="center" style="font-size:0px;padding:0px;word-break:break-word;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                      <tbody>
                                        <tr>
                                          <td style="width:600px;"> <img alt="" height="auto" src="http://nimus.de/share/tpl-card/lineshadow.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="600" /> </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;padding-top:20px;padding-bottom:70px;word-break:break-word;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                                      <tr>
                                        <td align="center" bgcolor="#1d1039 " role="presentation" style="border:none;border-radius:3px;cursor:auto;mso-padding-alt:15px 30px;background:#1d1039;" valign="middle"> <a href="https://nadegem.promo-31.codeur.online/meilleursvoeux/carte.php?id=' . $id_message . '" style="display:inline-block;background:#630077 ;color:#FFFFFF;font-family:Montserrat, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:15px 30px;mso-padding-alt:0px;border-radius:2px;"
                                            target="_blank">
                          Par ici
                        </a> </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </div>
                            <!--[if mso | IE]>
                        </td>
                      
                    </tr>
                  
                              </table>
                            <![endif]-->
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--[if mso | IE]>
                    </v:textbox>
                  </v:rect>
                
                      </td>
                    </tr>
                  </table>
                  
                  <table
                     align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
                  >
                    <tr>
                      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                  <![endif]-->
                <div style="background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#FFFFFF;background-color:#FFFFFF;width:100%;">
                    <tbody>
                      <tr>
                        <td style="direction:ltr;font-size:0px;padding:50px 0 0 0;text-align:center;">
                          <!--[if mso | IE]>
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            
                    <tr>
                  
                        <td
                           class="" style="vertical-align:top;width:600px;"
                        >
                      <![endif]-->
                          <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                              <tr>
                                <td align="center" style="font-size:0px;padding:0px;word-break:break-word;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                    <tbody>
                                      <tr>
                                        <td style="width:600px;"> <img alt="bottom border" height="auto" src="http://nimus.de/share/tpl-card/bottom.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="600" /> </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </div>
                          <!--[if mso | IE]>
                        </td>
                      
                    </tr>
                  
                              </table>
                            <![endif]-->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--[if mso | IE]>
                      </td>
                    </tr>
                  </table>
                  
                  <table
                     align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
                  >
                    <tr>
                      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                  <![endif]-->
                <div style="margin:0px auto;max-width:600px;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                    <tbody>
                      <tr>
                        <td style="direction:ltr;font-size:0px;padding:10px 0 20px 0;text-align:center;">
                          <!--[if mso | IE]>
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            
                    <tr>
                  
                        <td
                           class="" style="vertical-align:top;width:600px;"
                        >
                      <![endif]-->
                          <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                              <tr>
                                <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                  <div style="font-family:\'Time New Roman\', Helvetica, Arial, sans-serif;font-size:11px;font-weight:400;line-height:24px;text-align:center;color:#9B9B9B;"><a href="#" style="color: #9B9B9B;">Unsubscribe</a> from this newsletter<br/> <a href="#" style="color: #9B9B9B; text-decoration:none;">Made by Birdy</a></div>
                                </td>
                              </tr>
                            </table>
                          </div>
                          <!--[if mso | IE]>
                        </td>
                      
                    </tr>
                  
                              </table>
                            <![endif]-->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--[if mso | IE]>
                      </td>
                    </tr>
                  </table>
                  <![endif]-->
              </div>
            </body>
            
            </html>';


      //=====Création de la boundary.
      $boundary = "-----=" . md5(rand());
      $boundary_alt = "-----=" . md5(rand());
      //=====Définition du sujet.
      $subjectto = "Vous avez reçu une carte de voeux";
      //=====Création du header de l'e-mail.
      $header = "From:" . $exp . " " . $passage_ligne;
      $header .= "Reply-to: " . $exp . $passage_ligne;
      $header .= "MIME-Version: 1.0" . $passage_ligne;
      $header .= "Content-Type: multipart/mixed;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
      //=====Création du message.
      $message = $passage_ligne . "--" . $boundary . $passage_ligne;
      $message .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary_alt\"" . $passage_ligne;
      $message .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;
      //=====Ajout du message au format texte.
      $message .= "Content-Type: text/plain; charset=\"UTF-8\"" . $passage_ligne;
      $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
      $message .= $passage_ligne . $message_txt . $passage_ligne;
      $message .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;
      //=====Ajout du message au format HTML.
      $message .= "Content-Type: text/html; charset=\"UTF-8\"" . $passage_ligne;
      $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
      $message .= $passage_ligne . $message_html . $passage_ligne;
      //=====On ferme la boundary alternative.
      $message .= $passage_ligne . "--" . $boundary_alt . "--" . $passage_ligne;
      //==========
      $message .= $passage_ligne . "--" . $boundary . $passage_ligne;
      //=====Envoi de l'e-mail.
      mail($email_dest, "Vous avez reçu un message de " .  $exp, $message, $header);
    } // sinon il est faux  
    else {
      $erreur = "Votre email n'est pas valide";
    }
  } //sinon (il est vide)
  else {
    $erreur = "Un ou plusieurs champs sont vides";
  }
  /*autres soluces specialchars transforme code pouvant ê saisi par chaine caract
 voir aussi isset*/
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title> Confirmation</title>
</head>

<body>
<div class="snow_form"></div>

<img src="img/reindeer_min.png" alt=" traineau" class="anim">

<div class="conf">
    <div class="conf1">
            <?php
            //generation du message 
            // si la verrif est ok alors on envoie ce message
            if ($verif == true) {
                echo "Votre carte a bien été envoyée à :<br>" . $email_dest;
            }
            //sinon on envoie un  message d'erreur
          else {
          echo $erreur;
        }
        ?>

</div>
        <div class="conf1" id="retour">
            <div class="retour_bis">
                <a href="https://nadegem.promo-31.codeur.online/meilleursvoeux/carte.php">
                    <img src="img/card_icon.png" alt="icone lettre" class="icon">
                </a>
                <p> Retour carte</p>
            </div>
            <div class="retour_bis">
                <a href=https://nadegem.promo-31.codeur.online/meilleursvoeux/index.php>
                    <img src="img/form_icon.png" alt="icone formulaire" class="icon">
                </a>
                <p>Retour formulaire</p>

            </div>
        </div>
    </div>






</body>

</html>