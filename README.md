[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

Basis thema ter voorbeeld
===



Installation
---------------

### Requirements

Dit voorbeeld thema heeft de volgende benodigdheden:

- [Node.js](https://nodejs.org/)

### Quick Start

1. Installeer NodeJS
2. Installeer het thema in jouw (lokale) WordPress (WP) installatie in "/wp-content/themes/" (drag n drop)
3. Activeer het thema via de WP-Admin omgeving
4. Open het thema in jouw code editor (VS Code o.i.d.)
5. Voer via de terminal het volgende commando uit: "npm install"
6. In het bestand "wpgulp.config.js" verander 'const ProjectURL' naar de URL van jouw lokale WP installatie
7. Voer via de terminal het volgende commando uit: "npm start"
8. Nu zal je zien in de terminal dat WP Gulp je styles en je JS aan t "watchen" is. 



### Available CLI commands

`Dit thema` comes packed with CLI commands tailored for WordPress theme development :

- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
