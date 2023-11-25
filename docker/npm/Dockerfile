FROM alpine AS ahe-projekt-npm

RUN apk add --update nodejs npm

WORKDIR /application

COPY package*.json ./

COPY . .

RUN npm install

EXPOSE 5000

CMD ["npm", "start"]
