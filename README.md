Laravel пакет для smsaero.ru

<h2>Установка</h2>
<code>composer require mzcoding/smsaero</code>

Далее подключите в app.php сервис-провайдер и фасад:

...
Mzcoding\SmsAero\SmsAeroServiceProvider::class

...
'SmsAero'    => Mzcoding\SmsAero\SmsAeroFacade::class
