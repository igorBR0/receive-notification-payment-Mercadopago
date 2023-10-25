# receive-notification-payment-Mercadopago
This project is a way to use to receive payment notification from the MERCADO PAGO
1-Fist step

  *-It is necessary to have a domain and hosting with https technology, or some SSL type certificate, in my case, i used kinghost
  *-Open an account on the Mercado Pago, and tab Develop add: your URL IPN (Exemplo: https://www.yourdomain.com/not.php), the Mercadopago send notification for this URL, only 
  work if your domain has HTTP'S
  *-Enable  account developer for to acess Token.

2-Second step
  *-In your servidor, (I used PHP),"but the Mercado Pago, has other support languages (https://github.com/mercadopago)", follow the steps for installation of repository 
  (https://github.com/mercadopago/sdk-php)

3-Third-step
  *-You will need to create two files, one for notification, and another to create the payment, in my case, a create: not.php for notificacion and  pag.php for to created       
  custom payament.

4-Forty-step
  *-Copy repositorys, edit  the files with your Token and receiv  the notifications in format json.
 
    
