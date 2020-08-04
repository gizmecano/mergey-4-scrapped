# Project

This repository contains source code of a [handmade portfolio](http:mergey.ch/) which aims to display various informations about activities and works made by a _craftsman who makes miscellaneous things using a keyboard and a mouse_.

> For the time being, this website is still currently on recasting and the content of this repository should be considered like any `beta` phase project.

## Project root layouts

Currently, the main layouts necessary for the website running  can be presented in the following list:

1. `error.php`: composed with plain `Markdown` files for displaying error related page according to response status codes (cf. #19)
2. `index.php`: composed with modular `PHP` inclusions for displaying temporary home page content (cf. #2, #20)
3. `model.php`: generic minimal template for all root layouts, never displayed in any way (cf. #2)
4. `proof.php`: composed with modular `PHP` inclusions for displaying legal or necessary data (cf. #15)
5. `stall.php`: composed with plain `Markdown` files for displaying information related to activities (cf. #18)

## Project folders tree

With the exception of the `vendor` folder (unversioned) which contains the dependencies (managed by composer) and the `assets` folder (versioned) where files from third-party projects are stored, the general tree structure of the project is presented as follows:

- `design`
  - `design/artwork`
    - `design/artwork/backgrounds`
      - `design/artwork/backgrounds/generic`
    - `design/artwork/brands`
      - `design/artwork/brands/portable`
      - `design/artwork/brands/scalable`
  - `design/styling`
- `layout`
  - `layout/parceled`
  - `layout/required`
  - `layout/reusable`
- `speech`
    - `speech/en`
    - `speech/fr`
