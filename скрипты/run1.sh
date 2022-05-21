#!/bin/bash
xset -dpms
xset s off
xset s noblank
unclutter &
matchbox-window-manager &
while true;do
/usr/bin/chromium -kiosk --start-fullscreen http://localhost/wordpress
done
