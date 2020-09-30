# Project

This repository contains source code of a [handmade portfolio](http:mergey.ch/) which aims to display various informations about activities and works made by a _craftsman who makes miscellaneous things using a keyboard and a mouse_.

> For the time being, this website is still currently on recasting and the content of this repository should be considered like any `beta` phase project.

## Root layouts

The main layouts necessary for the website running can be presented in the following list:

1. `error.php`: composed with plain `Markdown` files for displaying error related page according to response status codes
2. `index.php`: composed with modular `PHP` inclusions for displaying temporary home page content
3. `model.php`: generic minimal template for all root layouts, never displayed in any way
4. `proof.php`: composed with modular `PHP` inclusions for displaying legal or necessary data
5. `stall.php`: composed with plain `Markdown` files for displaying information related to activities

## Folders tree

The general tree structure of the project is presented as follows:

- `/design`
  - `/artwork`
    - `/backgrounds`
      - `/generic`
    - `/brands`
      - `/portable`
      - `/scalable`
  - `/styling`
- `/layout`
  - `/parceled`
  - `/required`
  - `/reusable`
- `/speech`
    - `/en`
    - `/fr`

Some specific folders are managed in a particular way, namely:

- `/.github`: folder (versioned but marked as documention for [language detection](https://github.com/github/linguist#overrides)) which contains various files used for repository management
- `/.scope`: (unversioned) folder which contains various stashed notes concerning possible future works which are not yet drafted as open issues
- `/assets` : folder (versioned but vendored for [language detection](https://github.com/github/linguist#overrides)) where files from third-party projects are stored
- `/vendor`: (unversioned) folder which contains `PHP` dependencies (managed by [Composer](https://github.com/composer/composer))
