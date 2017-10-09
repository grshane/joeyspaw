# Joey's P.A.W.

A brief description of Joey's P.A.W. for Beyond Spots and Dots

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
6. If `command not found: blt`: run 
```
composer run-script blt-alias
source ~/.bash_profile
```
7. Commit changes
8. ```
    git pull
    git push

8. `blt deploy --commit-msg "BLT-000: Example deploy to branch" --branch "stage" --no-interaction
` (This creates the build artifact and pushes to Stage)

### Exporting Config
`drush @joeyspaw.local cex vcs`

1. Choose VCS
2. Commit files
3. ```
       git pull
       git push
4. After `blt deploy` completes: `drush @joeyspaw.{env} cim vcs`
5. `blt deploy --commit-msg "BLT-000: Example deploy to branch" --branch "stage" --no-interaction
`


### Theme Development
_Prior to developing:_
Install Node 6.10, (NVM)[https://github.com/creationix/nvm], (ANV)[https://github.com/wbyoung/avn], and (yarn)[https://yarnpkg.com/en/docs/install] 

1. `cd docroot/themes/custom/joeyspaw`
2. `yarn install`
3. `yarn run serve` _ctrl + c to quit gulp_
4. Make changes
5. If committing to production `gulp build`
6. ```$xslt
    git pull
    git push

7. `blt deploy --commit-msg "BLT-000: Example deploy to branch" --branch "stage" --no-interaction`


## Resources

* [GitHub](https://github.com/grshane/joeyspaw)
* [Cog Base Theme Documentation](https://github.com/acquia-pso/cog/blob/8.x-1.x/STARTERKIT/README.md)
* Living Theme Styleguide(/themes/custom/joeyspaw/styleguide/)
* TravisCI - link me!

## Troubleshooting

**Error 255:** Readd public key for Acquia
**Config on local fails:** Try running `drush @joeyspaw.local updb`
