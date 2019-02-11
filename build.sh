#!/bin/sh

mkdir -p dist
rm -r dist/*
zip dist/laravel-demo.zip -r * .[^.]* -x "vendor/*" -x "*.git/*" -x ".c9/*"