<?php 
                     function mailgonder(){
                                     // PHPMailer dosyamızı çağırıyoruz  
                                        include "PHPMailer/inc/class.phpmailer.php";
                                     $mail = new PHPMailer();   
                                     $mail->IsSMTP();

                                     $mail->From     = "adiniz@yandex.com"; //Gönderen kısmında yer alacak e-mail adresi  
                                     $mail->Sender   = "adiniz@yandex.com";  
                                     $mail->FromName = "Form Başlığı";  

                                     $mail->Host     = "smtp.yandex.com"; //SMTP server adresi  
                                     $mail->SMTPAuth = true;  
                                     $mail->Username = "adiniz@yandex.com"; //SMTP kullanıcı adı  
                                     $mail->Password = "Şifreniz"; //SMTP şifre  
                                     $mail->SMTPSecure="ssl";
                                     $mail->Port = "465";
                                     $mail->CharSet = "utf-8";
                                     $mail->WordWrap = 50;  

                                     $fadi = $_POST['adi'];
                                     $ftel = $_POST['tel'];
                                     $fmail = $_POST['email'];
                                     $fkonu = $_POST['konu'];
                                     $fmesaj = $_POST['mesaj'];

                                     $mail->IsHTML(true); //Mailin HTML formatında hazırlanacağını bildiriyoruz.  


                                     $mail->Subject  = "İletişim Formu";
                                     $mail->Body     = "<strong>Adı Soyadı :</strong> $formadi <br> 
                                                        <strong>Telefon :</strong> $formtel <br>
                                                        <strong>E-posta :</strong> $formmail <br> 
                                                        <strong>Konu :</strong> $formkonu <br> 
                                                        <strong>Mesaj :</strong> $formmesaj <br> ";  
                                     $mail->AltBody = strip_tags("mesaj");
                                     $mail->AddAddress("adiniz@yandex.com"); //Mailin gideceği adres


                                     return ($mail->Send())?true:false;      
                                     $mail->ClearAddresses();  
                                     $mail->ClearAttachments();
                                    }

?>
