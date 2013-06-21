HOWTO UNDERSTAND ALL THOSE BRANCHES IN THIS REPOSITORY
======================================================

See [this mindmap](https://mm.tt/295565470?t=RG3eYbkL9j) for an overview.

[Upstream mediawiki.git](https://gerrit.wikimedia.org/r/p/mediawiki/core.git) -
Huge, with many branches and tags. The mediawiki source code is located in the
root of the repository. We do not use this one.

[Eloy's public pseudo-mirror](https://github.com/stronk7/mediawiki) - mediawiki
product in the 'mediawiki' subfolder (Eloy uses git-pull --strategy=subtree).
We are interested in branches:

* RELX\_Y - upstream stable branches currently we use REL1\_17
* RELX\_Y\_custom - contains the "realusername" extension to display full name
  instead of username

[HQ's private repository](https://github.com/moodlehq/mediawiki) - Eloy pushes
to here.

* RELX\_Y - vanilla upstream (but in the subfolder)
* RELX\_Y\_custom - Eloy's "realusername" extension
* RELX\_Y\_skin - Moodle skin (theme), Sam Hemelryk is the original author
* RELX\_Y\_private - HQ's customizations, hacks, extensions, configuration, static main pages
  (like list of docs) and some helper tools
* RELX\_Y\_deploy - is merged RELX\_Y + RELX\_Y\_custom + RELX\_Y\_skin +
  RELX\_Y\_private.

Important note
--------------

Any change you do must be committed into appropriate "working" branch, for example
RELX\_Y\_private, and then be merged into RELX\_Y\_deploy. Only that way we are
able to keep track of our modifications and rebase them onto the new upstream
during the upgrade.
