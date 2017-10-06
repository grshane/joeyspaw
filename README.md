# My Project

A brief description of My Project.

## Getting Started

This project is based on BLT, an open-source project template and tool that enables building, testing, and deploying Drupal installations following Acquia Professional Services best practices.

To set up your local environment and begin developing for this project, refer to the [BLT onboarding documentation](http://blt.readthedocs.io/en/latest/readme/onboarding/). Note the following properties of this project:
* Primary development branch: develop
* Local environment: DrupalVM
* Local drush alias: @joeyspaw.local
* Local site URL: http://local.joeyspaw.com/

## BSD Local Directions
1. Clone Repo
2. If not set up follow above instructions for setting up BLT
3. `cd repo-dir`
4. `composer install`
4. `vagrant up`
5. `blt sync:refresh` (Pulls down db from remote and imports config)
7. If `command not found: blt`: run 
```
composer run-script blt-alias
source ~/.bash_profile
```
6. Commit changes
6. PUSH to GitHub
7. `blt deploy --commit-msg "BLT-000: Example deploy to branch" --branch "stage" --no-interaction
` (This creates the build artifact and pushes to Stage)

### Exporting Config
`drush @joeyspaw.local cex vcs`

1. Choose VCS
2. Commit files
3. PUSH to Github
3. After `blt deploy`: `drush @joeyspaw.{env} cim vcs`


### Theme Development
1. `cd docroot/themes/custom/joeyspaw`
2. `yarn install`
3. `gulp serve` _ctrl + c to quit gulp_
4. Make changes
5. If committing to production `gulp build`
6. Deploy as in step 7 above


## Resources

* [GitHub](https://github.com/grshane/joeyspaw) 
* Acquia Cloud subscription - link me!
* TravisCI - link me!
