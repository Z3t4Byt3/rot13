#!/bin/bash

if [ $USER != root ]; then
  echo "Voce precisa ser root"
  exit
fi

chmod +x /opt/rot13/rot13.php
ln -s /opt/rot13/rot13.php /usr/bin/rot13
echo "terminou de instalar!!"
