# Freshboard - A Fresh Birdboard
## What is this?
This is for the [Build A Laravel App With TDD](https://laracasts.com/series/build-a-laravel-app-with-tdd) project, which I did a few years ago (2020).  I'm doing it again, using it as an opportunity to learn more about git (merging from other repos), and I will be using the testing skills to make tests for the [Laravel 8 From Scratch](https://laracasts.com/series/laravel-8-from-scratch) course.

## Note: Skip The UI
To anyone who does this course, most of the UI stuff is out of date, and most of the value is in the testing side.  So probably just do bare html (I've already set up laravel breeze so I'm using that, but it was more of a hassle than it was worth).

## Git Commit Style
**I will be rebasing when I want, regardless of whether the repo is public.**  A nicer commit history makes sense for this kind of project.

I will commit on each notable code change, then do an empty commit for each episode.  This allows clear distinctions for what episode changes are from, and allows reverting changes because sometimes multiple techniques for something are shown.

**Commit Keycodes:** For some commits, the commit message will start with:  *(and probably an explanation in the commit message body.)*

- `*` if I deviate from an episode in any significant way
- `_` for something that only makes sense because of my own changes/repo (except for DOC: commits it's assumed)
- `^` if there was an issue related to the laravel/php version difference
- `!` if the tests failed *(only started half way through Ep5)*
- `RMVCT` `ENH/BUG/MAINT:` The letter will be there if the routes (`web.php`), models, views (`*.blade.php`), controllers, and/or tests are in the commit. *(started from Ep 10)*

Using **commit prefixes** based on the [NumPy dev workflow commit messages](https://numpy.org/doc/1.14/dev/gitwash/development_workflow.html#writing-the-commit-message):
(I will remove **#UNUSED** when they are used.)

*(Note after doing 10 Eps or so, this doesn't work great since this is a MVC app, I added `RMVC` codes to help this)*
```
API: an (incompatible) API change #UNUSED
BENCH: changes to the benchmark suite #UNUSED
BLD: change related to building numpy
BUG: bug fix
DEP: deprecate something, or remove a deprecated object #UNUSED
DEV: development tool or utility #UNUSED
DOC: documentation
ENH: enhancement
MAINT: maintenance commit (refactoring, typos, etc.)
REV: revert an earlier commit #UNUSED
STY: style fix (whitespace, PEP8) #UNUSED
TST: addition or modification of tests
REL: related to releasing numpy #UNUSED
```

## Changelog?  Using Git Commit History
After looking at [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), I determined that it would be unnecessary & using git commits with their messages would serve fine, as the commits are very linear, and there would be too much overlap with between commits and the changelog, and (semantic) versioning doesn't make sense (episode numbers do).

## Build (as of ~July 2022)
On arch linux, using:

- `laravel` 9.19 (latest atm)
- `php` 8.1.7 (latest atm)
- `composer` 2.3.7 (latest atm)
- `mysql` 10.8.3 via `mariadb` (latest atm)
- `sqlite` 3.38.5 (latest atm)

PHP extensions (for mysql), in /etc/php/php.ini, uncomment the lines:
```
extension=mysqli
extension=pdo_mysql
extension=pdo_sqlite
extension=sqlite3
```
Then install `php-sqlite`.
