# GeekWisdom Sandbox

This is a sandbox for testing out things with GIT, in particular in preparation for eventually committing to real projects

## Git Flow Steps

First clone this sandbox for testing purposes

1) git clone https://github.com/geekwisdom/sandbox.git

2) Switch to the branched directory

3) Create a branch (eg: develop) git checkout -b develop 

4) Make your changes

5) add/udpate your changes (git status / git add)

6) Commit changes (git commit) - Add your commmit as 1 short line, a space (enter), longer description a space (enter), specific issue or item fixed

7) Create a pull request

8) Communicate back and forth on the pull request.

9) Deploy and verify in Production

10) Merge to production (if pull request has someting like closes #32) issue 32 is automatically closed

## Updating from your branch

If in your branch (ie: develop) and you want to pull in all latest master changes

1) git checkout develop (if not already on develop branch)

2) git fetch origin (Get up to date with origin)

3) git merge origin/master (Merge your changes that you made with any other changes others have made in your develop branch)

## Forking your own

If you have no contribute to the project you can fork your own copy and submit your fork changes to the master

1) From the main (other persons) project look for the 'fork button' [top right hand corner?]

2) This causes github to creat your own repository as a fork

3) You can then clone it into your own folder with git clone http://github.com/{yourusername}

4) Make your changes, commit it and push back to master (Your master)

5) Add an upstream to keep in sync with git remote add upstream {url of the orginal author)

6) Submit a pull request to the orginal author using compare across forks

## Acknowledgments

Read detils on https://github.com/Kunena/Kunena-Forum/wiki/Create-a-new-branch-with-git-and-manage-branches