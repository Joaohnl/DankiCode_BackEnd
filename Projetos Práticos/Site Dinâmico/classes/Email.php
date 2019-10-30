<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


Class Email {

    private $phpMailer;

        function __construct()
        {
            $this->phpMailer = new PHPMailer(true);

            try {

                $this->phpMailer->isSMTP();                                            // Send using SMTP
                $this->phpMailer->Host       = SMTP_HOST;                              // Set the SMTP server to send through
                $this->phpMailer->SMTPAuth   = true;                                   // Enable SMTP authentication
                $this->phpMailer->Username   = SMTP_USERNAME;                          // SMTP username
                $this->phpMailer->Password   = SMTP_PASSWORD;                          // SMTP password
                $this->phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $this->phpMailer->Port       = 587;                                    // TCP port to connect to
                $this->phpMailer->CharSet    = 'utf-8';                            
                                  
                $this->phpMailer->isHTML(true);                                        // Set email format to HTML


                //Recipients
                $this->phpMailer->setFrom(SMTP_USERNAME, EMAIL_NOME);

                // Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                
            } catch (Exception $e) {
                echo "Erro no servidor SMTP. Erro Mailer: {$this->phpMailer->ErrorInfo}";
            }

        }

        public function addAddress ($email, $nome) {
            $this->phpMailer->addAddress($email, $nome);
        }
        
        // Content
        public function conteudoEmail ($conteudo) {
            $this->phpMailer->Subject = $conteudo['assunto'];
            $this->phpMailer->Body    = $conteudo['corpo'];
            $this->phpMailer->AltBody = strip_tags($conteudo['corpo']);
        }
        
        public function enviarEmail () {
            if($this->phpMailer->send()) {
                echo '<script> alert("Mensagem enviada com sucesso!")</script>';
                return true;
            } else {
                echo '<script> alert("Mensagem não pode ser enviada! Erro mailer: {'.$this->phpMailer->ErrorInfo.'})</script>';
                return false;
            }
        }
    }
?>