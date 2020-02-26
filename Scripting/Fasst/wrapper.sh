#!/bin/bash
docker build -t scripting .
docker run -d -it --rm --name scripting scripting /bin/bash
docker exec scripting supervisord
docker exec scripting python /home/shell/fast.py&
