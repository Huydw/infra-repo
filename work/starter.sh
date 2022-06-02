#!/bin/bash

cd infra-repo/work/
nohup ./runner.sh &> runner.log &
echo $! > runner.pid
