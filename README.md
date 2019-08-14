# Docker Example

Before we jump into this demonstration, you'll need to install Docker for [MacOS](https://docs.docker.com/docker-for-mac/install/) or [Windows](https://docs.docker.com/docker-for-windows/install/).

Clone this repository somewhere on your computer. Run `docker-compose build` and `docker-compose up -d`.

### Goal
Connect the application to MySQL so that it can count button presses. 

The Dockerfile for a MySQL service has already been created, so all that's left to do is edit the `docker-compose.yml` file. We'll cover how to do this in the workshop.

### Helpful Resources
* [MySQL image documentation](https://hub.docker.com/_/mysql)
* [Dockerfile reference](https://docs.docker.com/engine/reference/builder/)
* [Docker Compose documentation](https://docs.docker.com/compose/)