#!/bin/sh

docker run --rm --volume $(pwd):/local openapitools/openapi-generator-cli:v7.26.0 generate \
  --input-spec https://openflagr.github.io/flagr/api_docs/bundle.yaml \
  --invoker-package=Flagr\\Client \
  --config /local/config.yml \
  --generator-name php \
  --output /local

if command -v composer &> /dev/null
then
  composer rector
  composer fixer
fi
