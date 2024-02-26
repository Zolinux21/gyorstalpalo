#!/usr/bin/bash
git status
git add --all
git status
git commit -m "$1"
echo "commit kész"
git push gyorstalpalo
echo "--- Feltöltés kész! ---"

