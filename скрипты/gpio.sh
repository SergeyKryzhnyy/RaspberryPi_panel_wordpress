#!/bin/sh

echo "16" > /sys/class/gpio/export
echo "out" > /sys/class/gpio/gpio16/direction
/etc/init.d/temp.sh &
