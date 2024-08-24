#!/bin/bash

for i in $(seq 1 25); do
  curl -k -s http://192.168.39.152:30001/index.php | grep Welcome
done

