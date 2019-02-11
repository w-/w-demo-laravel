#!/bin/sh

mkdir -p dist
rm -r dist/*
zip dist/laravel-default.zip -r * .[^.]* -x "vendor/*" -x "*.git/*" -x ".c9/*"