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



## Acknowledgments

Read detils on https://github.com/Kunena/Kunena-Forum/wiki/Create-a-new-branch-with-git-and-manage-branches