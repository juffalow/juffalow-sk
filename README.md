# [www.juffalow.com](https://www.juffalow.com)

WordPress slovak theme for my blog. You can find here only theme files.

## About

Now, it is running on [WordPress](https://wordpress.org) 4.x.

The [wp-bootstrap-navwalker](https://github.com/twittem/wp-bootstrap-navwalker) is used for generating bootstrap menu.

[Javascript code prettifier](https://github.com/google/code-prettify) from Google is responsible for nice formatted source code.

## Deploy

For deploying this site I am using [git-ftp](https://github.com/git-ftp/git-ftp)

## Multilanguage

I tried a few things - plugins in my old job, but it was really hard to set up and maintain ( it was a few years ago, so this problem is maybe solved ). This time I tried to change the approach and create two separate pages, two separate WordPress systems.

Every post has its own custom field - alternate language - where is saved the link on the same post in other language. This link is then put in the menu to easily swap between the languages.

## Known issue

When using Safari browser the content list is not on the right side but it overlays the content. This is [registered issue](https://github.com/twbs/bootstrap/issues/12126) and I will solve it ( or use the recommended solution ) when I have time for it.