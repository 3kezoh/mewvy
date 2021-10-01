# Mewvy

[![Contributor Covenant](https://img.shields.io/badge/Contributor%20Convenant-2.1-4baaaa?style=for-the-badge)](./CODE_OF_CONDUCT.md)

[![GitHub license](https://img.shields.io/github/license/3kezoh/templates?style=for-the-badge)](./LICENSE)

Mewvy is a dummy project that aims to gather a maximum of good practices for a project, including minimal, clear and concise installation instructions.

## Prerequisites

- [PHP >= 7.2.5](https://www.php.net/manual/fr/install.php)
- [docker-compose](https://docs.docker.com/compose/install/)

## Installation

Clone this repository

```sh
# Gitlab (prefered)
git clone https://gitlab.com/iw-intensive-week-1-2021/groupe-10-iw3-4.git mewvy
```

```sh
# Github
git clone https://github.com/3kezoh/blog.git
```

Use [docker-compose](https://docs.docker.com/compose/install/) to bootstrap the project

```sh
docker-compose up --build
```

Deploy the database:

```sh
php artisan migrate
```

Insert random information into the database:

```sh
php artisan db:seed
```

## Endpoints

| Nom  | Endpoint | Description                                                |
| ---- | -------- | ---------------------------------------------------------- |
| home | /        | Génère une JSONResponse contenant deux films               |
| time | /time    | Génère une JSONResponse contenant le timestamp UNIX actuel |

## Good Practices

### Authentication 🔒

You should **really** consider using SSH to interact securely with, which provides a secure channel over an insecure network. [More informations](https://docs.gitlab.com/ee/ssh/)

### Verified commits ✅

Using a GPG key, you can locally sign commits and tags to enforce their authenticity.

### [Gitmoji](https://gitmoji.dev)

Gitmoji is an initiative to standardize and explain the use of emojis on GitHub commit messages.

> Example

- ✨ Introduce new feature
- 📄 Update LICENSE

### Branch Naming conventions

Not using proper naming conventions causes confusion and makes it difficult for the code maintenance team to maintain the code.

Ypu can apply a simple and well known naming conventions

> Example

- master
- feature, feature/google-oauth, feature/flex-component
- release,
- hotfix, hotfix/key-vulne

## [Code of Conduct](./CODE_OF_CONDUCT.md)

Mewvy has adopted a Code of Conduct that we expect project participants to adhere to. Please read [the full text](./CODE_OF_CONDUCT.md) so that you can understand what actions will and will not be tolerated.

## License

Mewvy is [MIT Licensed](./LICENSE)
