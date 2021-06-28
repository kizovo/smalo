FROM node:16.3-alpine

ENV APP_ROOT /src

RUN mkdir ${APP_ROOT}
WORKDIR ${APP_ROOT}
ADD . ${APP_ROOT}

# Install python/pip
ENV PYTHONUNBUFFERED=1
RUN apk add --update --no-cache python3 && ln -sf python3 /usr/bin/python
RUN python3 -m ensurepip
RUN pip3 install --no-cache --upgrade pip setuptools

# Install Package
RUN apk add --no-cache --virtual .gyp \
        make \
        g++ \
    && npm install \
    && apk del .gyp

RUN npm run build

ENV HOST 0.0.0.0
