#!/bin/bash

cd myproject/work/
nohup ./runner.sh &> runner.log &
echo $! > runner.pid
