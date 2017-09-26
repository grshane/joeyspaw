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
4. `vagrant up`
5. `blt sync:refresh` (Pulls down db from remote and imports config)
6. Commit changes
7. `blt deploy --commit-msg "BLT-000: Example deploy to branch" --branch "stage" --no-interaction
` (This creates the build artifact and pushes to Stage)


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
