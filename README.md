# ArduinoWebFrancaWebDevs
Demonstração de interface Arduino e web.

# Projeto Interação Arduino Web

- Plataforma escrita em HTML/CSS, com backend PHP, usando comunicação serial usb para comunicação entre o computador e o arduino. 
- Index contém as chamadas pelos botões (input) e o HTML da página. 
- A comunicação acontece pela biblioteca PhpSerial, estando as chamadas nos arquivos porta_serial.php.
- Arquivo para o Arduino está na pasta Arduino_web_dev_music, o arquivo é .ino.
- A comunicação é feita na velocidade de 9600 bauds. É interessante checar a porta que o Arduino está conectado. Todo esse trabalho foi feito em uma máquina Linux (Debian9.2 kernel 4.9). Não foi testado em Windows ou em MacOS. Provavelmente será necessário a modificação das porta de entrada, nos arquivos porta_serial.php.
- Projeto todo foi testado em um Arduino Uno Original. 

# TODO 

- Uso de jQuery ou Ajax, para que a página não recarregue quando um botão for acionado.
- Melhoria do código, como um todo, muitas classes repetidas que podem ser unidas em uma só.
- Teste em outros sistemas operacionais.
- Teste em outras placas Arduino, ou clones.
- Adição de outras músicas. 

# Autor 

Marcel Garcia França

Vocẽ me encontra nesse lugares:

Facebook: https://www.facebook.com/marcel.garcia.franca
LinkedIn: https://www.linkedin.com/in/marcel-fran%C3%A7a-78082430/
E-Mail: marcelgarciafranca@gmail.com
GitHub: https://github.com/MarcelGFranca

# Fontes
PHP-Serial https://github.com/MarcelGFranca/PHP-Serial.git
https://www.embarcados.com.br/sistema-web-com-raspberry-pi-e-arduino/
https://thenounproject.com/term/arduino/34403/
https://bootsnipp.com/snippets/featured/3d-buttons-effects

Música do Mário
http://blog.usinainfo.com.br/tocando-tema-do-super-mario-com-buzzer-e-arduino/

PHP-Serial
https://github.com/Xowap/PHP-Serial

Arduino Sensor de Temperatura
http://cleitonbueno.com/arduino-sensor-de-temperatura-parte1/
