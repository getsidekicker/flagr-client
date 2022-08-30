#!/bin/sh
docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli:latest-release generate \
    -i https://openflagr.github.io/flagr/api_docs/bundle.yaml \
    --invoker-package=Flagr\\Client \
    -g php \
    -o /local

composer fixer
composer rector
