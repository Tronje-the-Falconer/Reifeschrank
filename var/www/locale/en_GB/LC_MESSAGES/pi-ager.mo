��          �      �       0     1     L     e     �     �     �     �     �     �          6     I  q  Q  i   �  u  -  �   �  �  h  �  
  A  �    �  �  �  �  �  o	  �    $  
   0&           
                           	                    helptext_agingtable_config helptext_circulation_air helptext_dehumidifier_config helptext_exhausting_air helptext_humidify_config helptext_humidity_setpoint helptext_light_config helptext_operation_mode helptext_temperature_config helptext_temperature_setpoint helptext_uv_config monitor Project-Id-Version: Pi-Ager-EN
PO-Revision-Date: 2021-02-08 13:39+0100
Last-Translator: 
Language-Team: 
Language: en_GB
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Generator: Poedit 2.4.2
X-Poedit-Basepath: ../../###GITHUB/branches/entwicklung/var/www
Plural-Forms: nplurals=2; plural=(n != 1);
X-Poedit-SearchPath-0: .
 <br><br>
<b>failure humidity delta: </b> Text.
<br><br>
<b>failure temperature delta: </b> Text.
<br><br> <br><br>
<b>period: </b> This is used to set the pause time, which waits until the recirculation is switched on again. if the value is 0 (= no pause), the circulating air is permanently switched on. the maximum value is 1440min.
<br><br>
<b>duration: </b> This sets the circulation time during which the fan is running. at 0, the circulating air timer function is switched off. the maximum value is 1440min.
<br><br>
<b>note: </b> The circulating air fan runs independently of the timer settings - also during cooling, heating and humidification.
<br><br>
<b>attention: </b> period=0 und duration=0 is not useful and not allowed. <br><br>
<b>only exhaust: </b> Text.
<br><br>
<b>exhaust & dehumidifier: </b> Text.
<br><br>
<b>only dehumidifier:</b> Text.
<br><br>
<b>recommendation:</b> Text.
<br><br>
<b>attention: </b> Text. <br><br>
<b>period: </b> this is used to set the pause time, which waits until the exhausting is switched on again. if the .lue is 0 (= no pause), the exhausting air is permanently switched on. the maximum value is 1440min.
<br><br>
<b>duration: </b> this sets the exhausting time during which the fan is running. at 0, the exhausting air timer function is switched off. the maximum value is 1440min.
<br><br>
<b>note: </b>  The exhaust air fan runs independently of the timer settings - also during dehumidification in the "automatic mode with humidification and dehumidification.
<br><br>
<b>attention: </b> period=0 und duration=0 is not useful and not allowed. <br><br>
<b>switching hysteresis:</b>
<br><br>
<b>switch-on value: </b> is the value at which the control becomes active (value: 0-30%)
<b>switch-off value: </b>  is the value at which the control becomes inactive (value: 0-30%)
<br>the values may not be the same in order to avoid a wild switching on and off.
<br><br>
<b>delay: </b>here the delay time is set until the humidifier turns on if the humidity is too low. this can be used to blast out the rapidly falling air humidity during "cooling", "timer exhaust" or "dehumidification". The minimum value is 0 minutes, the maximum 60 minutes.
<br><br>
<b>example </b></b><i> target humidity: 75% ; switch-on value: 5% ; switch-off value: 1%</i>
<br>switch-on humidity = target humidity - switch-on value --> 75% - 5% = 70%
<br>switch-off humidity = target humidity - switch-off value--> 75% - 1% = 74%
<br>delay = 5 minutes
<br>so if 70% relative humidity are reached, the control waits for 5 minutes. only then does the pi-ager humidify the air to 74% and then switch off humidification again.
<br><br>
<b>example automatic mode with with humidification and dehumidification: </b> in this automatic mode, the humidity is completely automatically controlled. the current humidity is determined first. it is then decided which method (humidification and dehumidification) is suitable for achieving the desired set-point humidity. this also means that the switching values of the hysteresis must not be too close together. otherwise, humidification and dehumidification could always be switched on and off alternately.
<br><br>
<b>recommendation:</b> check the stored values in the logfile!
<br><br>
<b>attention: </b> use only positive integers! <br><br>
<b>target humidity: </b> the desired humidity is set here.
<br>The minimum value is theoretically 0% and a maximum of 99%. these values will be never reached normally. The circulating air is always active during humidification. The effectiveness of the dehumidification (automatic mode with with humidification and dehumidification) is dependent on the ambient air humidity, since only a passive dehumidification by exhaust air takes place.
<br><br>
<b>recommendation: </b> check the stored values in the logfile!
<br><br>
<b>attention! </b> se only positive integers! <br><br>
<b>period: </b> This is used to set the pause time, which waits until the light is switched on again. If the value is 0 (= no pause), the light is permanently switched on. The maximum value is 1440min.
<br><br>
<b>duration: </b> This sets UV light time during which the light is switched on. At 0, the UV light timer function is switched off. The maximum value is 1440min.
<br><br>
<b>timestamp: </b> Text.
<br><br>
<b>note: </b>  Text
<br><br>
<b>attention: </b> period=0 und duration=0 is not useful and not allowed. <b>0 - cooling: </b> It is cooled to the set temperature with circulating air.
<br><br>
<b>1 - cooling with humidification: </b> It is cooled to the set temperature with circulating air and humidification is on,the heating is never controlled.
<br><br>
<b>2 - heating with humidification: </b> It is heated to the set temperature with circulating air and humidification is on, the cooling is never controlled.
<br><br>
<b>3 - automatik with humidification: </b> The pi-ager cools or heats with circulating air, depending on the set value and humidification is on.
<br><br>
<b>4 - automatik with dehumidification and humidification </b> Like automatic with humidification, additional: when the humidity is exceeded, the exhaust air switches on until the humidity target is reached again. Since it is a passive dehumidification, the minimum achievable humidity depends on the dryness of the ambient air. To avoid a wild switching on and off, the humidification should be delayed (5-10min)! <b>switch-on value: </b>  is the value at which the control becomes active (value limit: 0-10 ° C). This value must always be greater than the switch-off value.
<br><br>
<b>switch-off value: </b> is the value at which the control becomes inactive (value: 0-10 ° C). The values may not be the same in order to avoid a wild switching on and off.
<br><br>
<b>recommendation:</b> check the stored values in the logfile!
<br><br>
<b>attention: </b> use only positive integers! <b>setpoint temperature:</b> The desired temperature is set here. the minimum value is 0 ° C, the maximum + 25 ° C. 
<br> For technical reasons, not all values can be approached in any operating mode. the circulating air is always active during the cooling or heating phases.
<br><br>
<b>example of cooling:</b>
</b><i>setpoint temperature: 12°C; switch-on value: 3°C; switch-off value: 1°C</i>
<br>switch-on temperature = setpoint temperature + switch-on value --> 12°C + 3°C = 15°C
<br>switch-off temperature = setpoint temperature + switch-off value --> 12°C + 1°C = 13°C
<br>So, if 15 degrees are exceeded, the pi-ager cools down to 13 ° C and then switches off to avoid excessive cooling. 
<br>Tthe entire behavior is different from pi-ager to pi-ager and therefore to be determined individually.
<br><br>
<b>example of heating:</b>
</b><i>setpoint temperature: 22°C; switch-on value: 3°C; switch-off value 1°C</i>
<br>switch-on temperature = setpoint temperature - switch-on value --> 22°C - 3°C = 19°C
<br>switch-off temperature = setpoint temperature - switch-off value --> 22°C - 1°C = 21°C
<br>So, if the temperature drops below 19 degrees, the pi-ager heats up to 21 ° C and then switches off to avoid excessive heating.
<br>The entire behavior is different from pi-ager to pi-ager and therefore to be determined individually.
<br><br>
<b>automatic mode:</b> in every automatic mode, the temperature is fully automatically controlled. 
first, the current temperature is determined. Then decide which method (cooling or heating) is suitable to reach the setpoint temperature set. this also means that the switching values of the hysteresis must not be too close together. Otherwise, cooling and heating could be switched on and off alternately.
<br><br>
<b>example of automatic:</b> setpoint temperature: 15°C; switch-on value: 5°C; switch-off value 3°C
<br>1st case: sensor temperature >= (setpoint temperature + switch-on value [=20°C]) = cooling on
<br>2st case: sensor temperature <= (setpoint temperature + switch-off value [=18°C]) = cooling off
<br>3st case: sensor temperature >= (setpoint temperature - switch-on value [=10°C]) = heating on
<br>4st case: sensor temperature <= (setpoint temperature - switch-off value [=12°C]) = heating off
<br><br>
<b>recommendation:</b> check the stored values in the logfile!
<br><br>
<b>attention:</b> use only positive integers! <br><br>
<b>period: </b> This is used to set the pause time, which waits until the UV light is switched on again. If the value is 0 (= no pause), the UV light is permanently switched on. The maximum value is 1440min.
<br><br>
<b>duration: </b> This sets UV light time during which the light is switched on. At 0, the UV light timer function is switched off. The maximum value is 1440min.
<br><br>
<b>timestamp: </b> Text.
<br><br>
<b>note: </b>  Text
<br><br>
<b>attention: </b> period=0 und duration=0 is not useful and not allowed. monitor EN 