Laravel пакет для smsaero.ru

<h2>Установка</h2>
<code>composer require mzcoding/smsaero</code>

Далее подключите в app.php сервис-провайдер и фасад:

<pre><span class="pl-s"><span class="pl-pds">
...
Mzcoding\SmsAero\SmsAeroServiceProvider::class
</span></span></pre>
<pre><span class="pl-s"><span class="pl-pds">
...
'SmsAero'    => Mzcoding\SmsAero\SmsAeroFacade::class
</span></span></pre>
