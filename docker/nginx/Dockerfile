ARG NGINX_VERSION=1.18

FROM nginx:${NGINX_VERSION} AS ahe-projekt-nginx

#ENV CERT_DOMAIN=cawi.local

#RUN openssl req -x509 -nodes -days 365 \
#    -subj  "/C=CA/ST=QC/O=laravelWebsite/CN=${CERT_DOMAIN}" \
#    -newkey rsa:2048 -keyout /etc/ssl/certs/laravelWebsite.key \
#    -out /etc/ssl/certs/laravelWebsite.crt;

COPY default.conf /etc/nginx/conf.d/
