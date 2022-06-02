#!/bin/bash
scp -r work mydocker:infra-repo
ssh mydocker infra-repo/work/starter.sh
ssh mydocker cat infra/work/runner.pid

