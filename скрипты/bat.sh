#!/bin/sh

echo "22" > /sys/class/gpio/export
echo "in" > /sys/class/gpio/gpio22/direction

while (true)
do

if [ `cat /sys/class/gpio/gpio22/value` = "0" ]
then 
sleep 1

if [ `cat /sys/class/gpio/gpio22/value` = "0" ]
then
sleep 1

if [ `cat /sys/class/gpio/gpio22/value` = "0" ]
then
echo "battery low"
echo "22" > /sys/class/gpio/unexport

shutdown -h now "System halted by a GPIO action ---------------------------------------------------------------- Battery Low-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------"
fi
fi
fi
sleep 1
done
