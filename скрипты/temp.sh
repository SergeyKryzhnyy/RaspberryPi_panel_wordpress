#!/bin/bash

temp="50" # Устанавливаем какую хотим поддерживать температуру
while (true) 
do
realtemp=`cat vcgencmd measure_temp`

str2="${realtemp%???}"

if [ "$str2" -gt "$temp" ]
then
echo "1" > /sys/class/gpio/gpio16/value
else
echo "0" > /sys/class/gpio/gpio16/value
fi

sleep 10 # Устанавливаем как часто будем снимать показания температуры

done
