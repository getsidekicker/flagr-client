#!/bin/sh

docker run --rm --volume $(pwd):/local openapitools/openapi-generator-cli:v6.2.1 generate \
  --input-spec https://openflagr.github.io/flagr/api_docs/bundle.yaml \
  --invoker-package=Flagr\\Client \
  --config /local/config.yml \
  --generator-name php \
  --output /local

