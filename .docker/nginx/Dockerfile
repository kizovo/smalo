#FROM nginx:1.21-alpine
FROM fholzer/nginx-brotli

LABEL maintainer="Rheza Sindhuwinata <rheza.s@gmail.com>"

# Install packages
RUN apk --update --no-cache add openssl

COPY nginx.conf /etc/nginx/nginx.conf