# Freshboard - A Fresh Birdboard
## What is this?
This is for the [Build A Laravel App With TDD](https://laracasts.com/series/build-a-laravel-app-with-tdd) project, which I did a few years ago (2020).  I'm doing it again, using it as an opportunity to learn more about git (merging from other repos), and I will be using the testing skills to make tests for the [Laravel 8 From Scratch](https://laracasts.com/series/laravel-8-from-scratch) course.

## Git Commit Style
I will commit changes based on their features, then do an empty commit for each episode (or update change log).  This allows clear distinctions for what episode changes are from, and allows reverting changes because sometimes multiple techniques for something are shown.

If I deviate from an episode in any significant way, the commit will have a `*` at the beginning, or `_` do something that only makes sense because of my own changes/repo (except for DOC: commits it's assumed), and probably the reason in the commit message.

Using commit prefixes based on the [NumPy dev workflow commit messages](https://numpy.org/doc/1.14/dev/gitwash/development_workflow.html#writing-the-commit-message):
(I will remove **#UNUSED** when they are used.)
```
API: an (incompatible) API change #UNUSED
BENCH: changes to the benchmark suite #UNUSED
BLD: change related to building numpy
BUG: bug fix #UNUSED
DEP: deprecate something, or remove a deprecated object #UNUSED
DEV: development tool or utility #UNUSED
DOC: documentation
ENH: enhancement
MAINT: maintenance commit (refactoring, typos, etc.) #UNUSED
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
