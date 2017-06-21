#!/bin/bash
#
# sudo web script allowing user www-data to run commands with root privilegs
# shell_exec('sudo /var/sudowebscript.sh PARAMETER')

# GPIO's aus config.json auslesen
gpio_cooling_compressor=4
gpio_heater=3
gpio_humidifier=18
gpio_circulating_air=24
gpio_exhausting_air=23
gpio_uv_light=25
gpio_light=8
gpio_dehumidifier=7

case "$1" in
    startmain) #Starten von main.py
        sudo python3 /opt/pi-ager/main.py > /dev/null 2>/dev/null &
    ;;
    pkillmain) #Stoppen von Rss.py
        sudo pkill -f main.py
    ;;
    grepmain) #Überprüfen von Rss.py | ps ax gibt Prozessliste zurück, wird nach grep übergeben und Versionsnummer von Grep wird hinzugefügt, wird dann nach grep nochmals übergeben und nach RSS.py gesucht
        sudo ps ax | grep -v grep | grep main.py
    ;;
    startagingtable) #Starten von agingtable.py
        sudo python3 /opt/pi-ager/agingtable.py > /dev/null 2>/dev/null &
    ;;
    pkillagingtable) #Stoppen von agingtable.py
        sudo pkill -f agingtable.py
    ;;
    grephagingtable) #Überprüfen von agintable.py  | ps ax gibt Prozessliste zurück, wird nach grep übergeben und Versionsnummer von Grep wird hinzugefügt, wird dann nach grep nochmals übergeben und nach Reifetab.py gesucht
        sudo ps ax | grep -v grep | grep agingtable.py
    ;;
    read_gpio_cooling_compressor) # Ansteuern von GPIO Kühlschrankkompressor
        sudo /usr/local/bin/gpio -g read $gpio_cooling_compressor
    ;;
    write_gpio_cooling_compressor) # Ansteuern von GPIO Kühlschrankkompressor
        sudo /usr/local/bin/gpio -g write $gpio_cooling_compressor 1
    ;;
    read_gpio_heater)# Ansteuern von GPIO Heizkabel
        sudo /usr/local/bin/gpio -g read $gpio_heater
    ;;
    write_gpio_heater)# Ansteuern von GPIO Heizkabel
        sudo /usr/local/bin/gpio -g write $gpio_heater 1
    ;;
    read_gpio_humidifier)# Ansteuern von GPIO Luftbefeuchter
        sudo /usr/local/bin/gpio -g read $gpio_humidifier
    ;;
    write_gpio_humidifier)# Ansteuern von GPIO Luftbefeuchter
        sudo /usr/local/bin/gpio -g write $gpio_humidifier 1
    ;;
    read_gpio_circulating_air)# Ansteuern von GPIO Umluftventilator
        sudo /usr/local/bin/gpio -g read $gpio_circulating_air
    ;;
    write_gpio_circulating_air)# Ansteuern von GPIO Umluftventilator
        sudo /usr/local/bin/gpio -g write $gpio_circulating_air 1
    ;;
    read_gpio_exhausting_air)# Ansteuern von GPIO Austauschlüfter
        sudo /usr/local/bin/gpio -g read $gpio_exhausting_air
    ;;
    write_gpio_exhausting_air)# Ansteuern von GPIO Austauschlüfter
        sudo /usr/local/bin/gpio -g write $gpio_exhausting_air 1
    ;;
    read_gpio_uv_light)# Ansteuern von GPIO UV-Licht
        sudo /usr/local/bin/gpio -g read $gpio_uv_light
    ;;
    write_gpio_uv_light)# Ansteuern von GPIO UV-Licht
        sudo /usr/local/bin/gpio -g write $gpio_uv_light 1
    ;;
    read_gpio_light)# Ansteuern von GPIO reserved1
        sudo /usr/local/bin/gpio -g read $gpio_light
    ;;
    write_gpio_light)# Ansteuern von GPIO reserved1
        sudo /usr/local/bin/gpio -g write $gpio_light 1
    ;;
    read_gpio_dehumidifier)# Ansteuern von GPIO reserved2
        sudo /usr/local/bin/gpio -g read $gpio_dehumidifier
    ;;
    write_gpio_dehumidifier)# Ansteuern von GPIO reserved1
        sudo /usr/local/bin/gpio -g write $gpio_dehumidifier 1
    ;;
    reboot) # reboot
        sudo reboot
    ;;
    shutdown) #Shutdown 
        sudo shutdown -h now
    ;;
    getpirevision) # auslesen der Revision vom pi um auf Model zu kommen
        sudo cat /proc/cpuinfo | grep 'Revision' | awk '{print $3}' | sed 's/^1000//'
    ;;
    *) echo "ERROR: invalid parameter: $1 (for $0)"; exit 1 #Fehlerbehandlung
    ;;
esac

exit 0
