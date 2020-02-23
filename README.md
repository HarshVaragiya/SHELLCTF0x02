# SHELLCTF 0x02 Archive

## Build Base Docker image
- Assuming all challenges require ubuntu 18.04 LTS docker images
- Example Dockerfile [general_dockerfile_config]general_dockerfile_config()
- Build a base docker image which has ubuntu:18.04 updated and su installed (execute from git root)
```bash
docker build -t baseimage .
```
- This will add a docker image "baseimage" in your docker images.. (check with 'docker image ls')

## Challenge Workflow
- Create a Dockerfile for the challenge/ set of challenges.
- Add the challenges in the docker image.
- Run 1 Docker container for that image exposing and mapping the necessary ports.

## Creating Challenge Dockerfile
- Build Docker Image for the set of challenges using the example dockerfile
```Dockerfile
FROM baseimage

WORKDIR <work_directory_for_challenge1>
COPY <challenge1_files/folder> <image_file/folder>
EXPOSE <port>
..

WORKDIR <work_directory_for_challenge2>
COPY <challenge2_files/folder> <image_file/folder> 
EXPOSE <port>
..


COPY startup_script.sh <script.sh>
CMD["<script.sh>"]

```
- Make Sure to Write a startup_script.sh that would start the challenges and specify that as CMD/ENTRYPOINT

