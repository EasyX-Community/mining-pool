# HelixAlpha Mining Pool

# Warning: Project in Active Development, Use at own risk.

HAMP is a feature rich mining pool. Written in PHP, JavaScript and C++. Using Laravel and ReactJS as the major frameworks with a small hint of jQuery (Practically not using it.).

# Deploying the Server

  - Import a HTML file and watch it magically convert to Markdown
  - Drag and drop images (requires your Dropbox account be linked)

### Technology Stack

HAMP uses a number of open source projects to work properly:

* [ReacJS](https://reactjs.org/) - React is a JavaScript library for building user interfaces. Maintained by Facebook
* [Laravel](https://laravel.com) - Beautiful PHP Code, with a beautiful framework.
* [AntD](https://ant.design) - Not popular in the US, this chinese UI framework has it all.
* [node.js](https://nodejs.org) - Building and Compiling
* Docker
* Kubernetes
* Helm
* Terraform

And of course HAMP itself is open source with a [public repository](https://github.com/helixalpha/mining-pool) on GitHub.

### Installation

Install the recent version of [node](https://nodejs.org), (docker)[https://docker.com] and [docker-compose](https://github.com/Yelp/docker-compose/blob/master/docs/install.md). We recommend using [asdf](https://github.com/asdf-vm/asdf). The .tool-versions file in the repository will give you the correct node version. I plan on using pure docker development in the fiture to get the right version of node.

Follow these steps to get the project working. The stratum server is still being developed, so it might not work as expected.

```sh
$ cp .env.example .env
$ CFG_MYSQL_HOST=127.0.0.1
$ docker network create mining-pool
$ docker-compose down -v
$ docker-compose up -d
$ docker-compose exec server php artisan database:rebuild
```

Donate to the project BTC 1AyRs6qnpZ4TNhNfoVgsAERtVv2riutcgL

Email me for support / ideas at me@ryanhein.com. 