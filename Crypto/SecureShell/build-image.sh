#!/bin/bash
chmod 400 private.pem
ssh-keygen -f private.pem -y > authorized_keys
docker build -t secureshell .