#!/bin/bash
scp -r work mydocker:myproject
ssh mydocker myproject/work/starter.sh
ssh mydocker cat myproject/work/runner.pid

